<?php

namespace CHAPTER7\問題1;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //
    public function create() {
        return view('post.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|max:20',
            'content' => 'required|max:400',
        ]);

        $validated['user_id'] = auth()->id();
        $post = Post::create($validated);

        $request->session()->flash('message', '保存しました');
        return redirect()->route('dashboard');
    }

    public function index()
    {
//        $posts = Post::all();
        $posts = Post::orderBy('created_at', 'desc')->get();
        return view('post.index', compact('posts'));
    }

}
