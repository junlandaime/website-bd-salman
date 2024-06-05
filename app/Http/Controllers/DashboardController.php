<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use App\Models\Category;
use App\Models\Event;
use App\Models\Photo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $postsQuery = Post::query();

        // if ($user->hasRole('teacher')) {
        //     $postsQuery->whereHas('author', function ($query) use ($user) {
        //         $query->where('user_id', $user->id);
        //     });
        // }

        $posts = $postsQuery->count();
        $categories = Category::count();
        $events = Event::count();
        $photos  = Photo::count();
        $users = User::count();

        return view('admin.dashboard', compact('categories', 'events', 'posts', 'photos', 'users'));
    }
}
