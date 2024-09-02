<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use App\Models\Event;
use App\Models\Photo;
use App\Models\Post;
use Carbon\Carbon;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $now = Carbon::now();
        $events = Event::where('status', '1')->orderBy('id', 'desc')->get();

        $posts = Post::query();

        $posts->whereHas('category', function ($posts) {
            $posts->whereNotIn('id', [1, 2]);
        });

        $posts = $posts->where('status', 1)->orderBy('id', 'desc')->paginate(3);
        // $posts = Post::where('status', '1')->whereIn('category_id', [3, 4])->orderBy('published_at', 'desc')->paginate(3);

        return view('front.index', compact('events', 'posts', 'now'));
    }

    public function events()
    {
        $events = Event::orderBy('id', 'desc')->where('status', '1')->get();
        $tags = Tag::where('name', '!=', '')->orderBy('name', 'asc')->get();
        $categories = Category::where('slug', 'event')->with(['child'])->withCount(['child'])->getParent()->orderBy('name', 'DESC')->get();
        $now = Carbon::now();


        return view('front.events', compact('events', 'tags', 'categories', 'now'));
    }

    public function details(Event $event)
    {
        $events = Event::orderBy('id', 'desc')->get();
        $galleries = Photo::where('gallery_id', $event->category->id)->orderBy('id', 'asc')->paginate(4);
        $tags = Tag::where('name', '!=', '')->orderBy('name', 'asc')->get();
        $now = Carbon::now();


        return view('front.details', compact('event', 'tags', 'now', 'galleries'));
    }

    public function features()
    {
        $posts = Post::where('category_id', '2')->orderBy('id', 'asc')->get();

        return view('front.features', compact('posts'));
    }

    public function informations()
    {
        $posts = Post::where('category_id', '3')->orderBy('id', 'asc')->get();

        return view('front.informations', compact('posts'));
    }

    public function infomore(Post $post)
    {
        $posts = Post::orderBy('id', 'desc')->get();
        $categories = Category::where('slug', 'informations')->orderBy('slug', 'asc')->get();


        return view('front.infomore', compact('post', 'categories'));
    }

    public function blogs()
    {

        $posts = Post::query();

        $posts->whereHas('category', function ($posts) {
            $posts->where('parent_id', 4);
        });

        $posts = $posts->where('status', 1)->orderBy('id', 'desc')->paginate(10);
        return view('front.blogs', compact('posts'));
    }

    public function readmore(Post $post)
    {
        $posts = Post::query();

        $posts->whereHas('category', function ($posts) {
            $posts->where('parent_id', '4');
        });

        $posts = $posts->where('status', 1)->orderBy('id', 'desc')->paginate(3);

        $categories = Category::where('slug', 'blogs')->orderBy('slug', 'asc')->get();


        return view('front.readmore', compact('post', 'posts', 'categories'));
    }

    public function about()
    {
        $posts = Post::where('category_id', 1)->orderBy('id', 'asc')->get();

        return view('front.about', compact('posts'));
    }

    public function tentang(Post $post)
    {
        $posts = Post::query();

        $posts->whereHas('category', function ($posts) {
            $posts->where('slug', 'profile');
        });

        $posts = $posts->where('status', 1)->orderBy('id', 'asc')->paginate(3);

        $categories = Category::where('slug', 'blogs')->orderBy('slug', 'asc')->get();


        return view('front.about', compact('post', 'posts', 'categories'));
    }

    public function category(Category $category)
    {
        $events = Event::query();
        $categories = Category::where('slug', 'event')->with(['child'])->withCount(['child'])->getParent()->orderBy('name', 'ASC')->get();
        $now = Carbon::now();

        $events->whereHas('category', function ($events) use ($category) {
            $events->where('category_id', $category->id);
        });
        // $categories = Category::with(['child'])->where('parent_id', '!=', 3)->get();
        $events = $events->where('status', '!=', '0')->orderBy('id', 'desc')->get();

        return view('front.events', compact('events', 'categories', 'category', 'now'));
    }
























    public function rapih()
    {
        $events = Event::orderBy('id', 'desc')->get();

        return view('front.rapihkan', compact('events'));
    }
}
