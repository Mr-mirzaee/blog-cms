<?php

namespace Modules\Admin\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Admin\Traits\DataTable;


class AdminCommentController extends Controller
{
    public function index()
    {
        return view('admin::comments.index');
    }

    public function data(Request $request)
    {
        return response()->json(Comment::generateDataTable($request));
    }

    public function activate(Comment $comment)
    {
        if($comment->isApproved()) {
            $comment->update([
                'approved' => false,
            ]);
        } else {
            $comment->update([
                'approved' => true,
            ]);
        }
        return redirect(route('comments.index'));
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show(Comment $comment)
    {
        //
    }

    public function edit(Comment $comment)
    {
        //
    }

    public function update(Request $request, Comment $comment)
    {
        //
    }

    public function destroy(Comment $comment)
    {
        //
    }
}
