<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePostRequest;
use App\Http\Requests\UpdatePostRequest;
use Closure;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;

class PostController extends Controller
{
    /**
     * فقط پست هایی رو برگردون که مربوط به کاربر لاگین شده هستن
     */
    public function index()
    {
        Cookie::queue('cart' , 'value' , -60);


        $posts = Post::where('user_id' , auth()->user()->id)->get();

        return view('posts.index', compact('posts'));
    }

    /**
     * انتقال به صفحه ساخت پست
     */
    public function create(Post $post)
    {
        return view('posts.create', compact('post'));
    }

    /**
     * عمل ساخت پست جدید برای یوزر
     */
    public function store(StorePostRequest $request)
    {

        Post::create([
            'user_id' => auth()->id(),
            ...$request->validated(),
        ]);

        session()->put('status' , 'پست با موفقیت ساخته شد');

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        return view('posts.single', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePostRequest $request, Post $post)
    {
        //   UPDATING POST

        //    authorization

        $post->update($request->validated());

        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();

        return redirect()->route('posts.index');
    }
}
