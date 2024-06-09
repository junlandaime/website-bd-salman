<?php

namespace App\Http\Controllers;

use App\Models\Photo;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\StorePhotoRequest;

class PhotoController extends Controller
{
    public function index()
    {
        $photos = Photo::get();
        $categories = Category::where('slug', 'event')->with(['child'])->withCount(['child'])->getParent()->orderBy('name', 'ASC')->get();
        $parent = Category::getParent()->orderBy('name', 'ASC')->get();


        return view('admin.photos.index', compact('photos', 'categories', 'parent'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('slug', 'event')->with(['child'])->withCount(['child'])->getParent()->orderBy('name', 'ASC')->get();
        $parent = Category::getParent()->orderBy('name', 'ASC')->get();


        return view('admin.photos.create', compact('categories', 'parent'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePhotoRequest $request)
    {
        DB::transaction(function () use ($request) {

            $validated = $request->validated();

            if ($request->hasFile('path')) {
                $photoPath = $request->file('path')->store('gallery', 'public');
                $validated['path'] = $photoPath;
            } else {
                $photoPath = 'gallery/image-default.png';
            }

            $validated['slug'] = Str::slug($validated['name']);
            // $validated['published_at'] = Carbon::now();
            $validated['user_id'] = Auth::user()->id;

            Photo::create($validated);
        });

        return redirect()->route('admin.photos.index')->with(['success' => 'Foto Baru Ditambahkan!']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Photo $photo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Photo $photo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Photo $photo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Photo $photo)
    {
        //
    }
}
