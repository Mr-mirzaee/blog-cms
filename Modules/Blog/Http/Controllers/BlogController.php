<?php

namespace Modules\Blog\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog::index');
    }

    public function create()
    {
        return view('blog::create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('blog::show');
    }

    public function edit($id)
    {
        return view('blog::edit');
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
