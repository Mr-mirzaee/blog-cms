<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Post;
use App\Models\Theme;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\User;

class AdminController extends Controller
{
    public function index()
    {
        $countUsers = count(User::all());
        $countPosts = count(Post::all());
        $theme = Theme::where('active', 1)->first();
        return view('admin::dashboard', compact('countUsers', 'countPosts', 'theme'));
    }

    public function create()
    {
        return view('admin::create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('admin::show');
    }

    public function edit($id)
    {
        return view('admin::edit');
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
