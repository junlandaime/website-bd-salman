<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Models\Event;
use App\Models\Category;
use App\Models\TagEvent;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StoreEventRequest;
use App\Http\Requests\UpdateEventRequest;
use Carbon\Carbon;

class EventController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $events = Event::get();
        $now = Carbon::now();


        return view('admin.events.index', compact('events', 'now'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::with(['child'])->withCount(['child'])->getParent()->orderBy('name', 'ASC')->get();
        $parent = Category::getParent()->orderBy('name', 'ASC')->get();


        return view('admin.events.create', compact('categories', 'parent'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEventRequest $request)
    {
        // $subjek = $request->subjs;
        $subjek = json_decode($request->subjs, TRUE);
        $hasil = array();

        foreach ($subjek as $a => $b) {
            foreach ($b as $c => $d) {
                $hasil[] = $d;
            }
        }

        DB::transaction(function () use ($request, $hasil) {

            $validated = $request->validated();

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
                $validated['image'] = $imagePath;
            } else {
                $imagePath = 'images/image-default.png';
            }
            $validated['slug'] = Str::slug($validated['name']);
            $validated['user_id'] = Auth::user()->id;
            $event = Event::create($validated);

            foreach ($hasil as $tag) {
                $datatag = Tag::where('name', $tag)->get();
                if (sizeof($datatag) != 0) {
                    TagEvent::create([
                        'tag_id' => $datatag[0]->id,
                        'event_id' => $event->id
                    ]);
                } else {
                    $newtag = Tag::create([
                        'name' => $tag,
                        'slug' => Str::slug($tag)
                    ]);
                    TagEvent::create([
                        'tag_id' => $newtag->id,
                        'event_id' => $event->id
                    ]);
                }
            }
        });

        return redirect()->route('admin.events.index')->with(['success' => 'Event Baru Ditambahkan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Event $event)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Event $event)
    {

        $categories = Category::with(['child'])->withCount(['child'])->getParent()->orderBy('name', 'ASC')->get();

        return view('admin.events.edit', compact('event', 'categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEventRequest $request, Event $event)
    {
        $subjek = json_decode($request->subjs, TRUE);
        $hasil = array();

        foreach ($subjek as $a => $b) {
            foreach ($b as $c => $d) {
                $hasil[] = $d;
            }
        }

        DB::transaction(function () use ($request, $event, $hasil) {

            $validated = $request->validated();

            if ($request->hasFile('image')) {
                $imagePath = $request->file('image')->store('images', 'public');
                $validated['image'] = $imagePath;
            }

            $validated['slug'] = Str::slug($validated['name']);

            $event->update($validated);
            $event->tags()->detach();

            foreach ($hasil as $tag) {
                $datatag = Tag::where('name', $tag)->get();
                if (sizeof($datatag) != 0) {
                    TagEvent::create([
                        'tag_id' => $datatag[0]->id,
                        'event_id' => $event->id
                    ]);
                } else {
                    $newtag = Tag::create([
                        'name' => $tag,
                        'slug' => Str::slug($tag)
                    ]);
                    TagEvent::create([
                        'tag_id' => $newtag->id,
                        'event_id' => $event->id
                    ]);
                }
            }
        });

        return redirect()->route('admin.events.index')->with(['success' => 'Event Berhasil Diedit!']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Event $event)
    {
        DB::beginTransaction();

        try {
            $event->delete();
            DB::commit();

            return redirect()->route('admin.events.index')->with(['success' => 'Postingan Event Berhasil Dihapus']);
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->route('admin.events.index')->with('error', 'terjadinya sebuah error');
        }
    }
}
