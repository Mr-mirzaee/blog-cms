<?php

namespace Modules\Admin\Repositories;

use Illuminate\Http\Request;
use App\Models\Post;

class PostsDatatableRepository
{
    public static function allPosts(Request $request)
    {
        $page = 1;
        $start = $request->start;
        $length = $request->length;

        if ($length > 0) {
            $page = intdiv($start, $length);
        }

        $datatable = [];
        $users = Post::paginate($length, ['*'], 'page', $page)->toArray()['data'];
        $datatable['data'] = $users;
        $datatable['recordsTotal'] = count($users);
        $datatable['recordsFiltered'] = count($users);
        $datatable['draw'] = (int) $request->draw;
        $datatable['start'] = (int) $start;
        $datatable['length'] = (int) $length;

        return $datatable;
    }
}
