<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Category;
use App\Models\Tag;
use Illuminate\Routing\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Modules\Admin\Http\Requests\StorePostRequest;
use Modules\Admin\Traits\AdminUtil;

class AdminPostController extends Controller
{
    use AdminUtil;

    public function index()
    {
        return view('admin::posts.index');
    }

    public function data(Request $request)
    {
        return response()->json(Post::generateDataTable($request));
    }

    public function activate(Post $post)
    {
        $post->isApproved() ?
            $post->update(['approved' => false]) :
            $post->update(['approved' => true]);
        return redirect()->route('posts.index');
    }

    public function create()
    {
        $categories = Category::query()->latest()->whereNull('parent_id')->get();
        $tags = Tag::query()->latest()->get();
        return view('admin::posts.create', compact('categories', 'tags'));
    }

    public function store(StorePostRequest $request)
    {
        $inputs = $request->except(['categories', 'image']);
        $imagesUrl = $this->uploadImages($request->file('image'), '/images/posts');
        !request()->filled('slug') && $inputs['slug'] = $this->createSlug($request->title, '-');
        $post = auth()->user()->posts()->create(
            array_merge($inputs, ['images' => $imagesUrl])
        );
        $post->categories()->sync($request->input('categories'));
        $post->tags()->sync($request->input('tags'));
        return redirect()->route('posts.index');
    }

    public function show(Post $post)
    {
        //
    }

    public function edit(Post $post)
    {
        $categories = Category::query()->latest()->whereNull('parent_id')->get();
        $tags = Tag::query()->latest()->get();
        return view('admin::posts.edit', compact('post', 'categories', 'tags'));
    }

    public function update(Request $request, Post $post)
    {
        $inputs = $request->except(['categories']);
        !request()->filled('slug') && $inputs['slug'] = $this->createSlug($request->title, '-');
        if($request->hasFile('image')) {
            Storage::disk('public')->delete('/' . $post->images);
            $inputs['images'] = $this->uploadImages($request->file('image'), '/images/posts');
        } else {
            $inputs['images'] = $post->images;
        }
        $post->update($inputs);
        $post->categories()->sync($request->input('categories'));
        $post->tags()->sync($request->input('tags'));
        return redirect()->route('posts.index');
    }

    public function destroy(Post $post)
    {
        //
    }
}
