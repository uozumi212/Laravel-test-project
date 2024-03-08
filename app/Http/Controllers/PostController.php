<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use Illuminate\Support\Facades\Gate;

class PostController extends Controller
{
    //
    public function create() {
        return view('post.create');
    }

    public function store(Request $request)
    {
        Gate::authorize('test');
        $validated = $request->validate([
            'title' => 'required|max:20',
            'content' => 'required|max:400',
        ]);

        $validated['user_id'] = auth()->id();
        $post = Post::create($validated);

        $request->session()->flash('message', '保存しました');
        return redirect()->route('post.index');
    }

    public function index()
    {
//        $posts = Post::all();
        $posts = Post::orderBy('created_at', 'desc')->get();
//        $posts = Post::where('user_id', auth()->id())->get();
        return view('post.index', compact('posts'));
    }

}
