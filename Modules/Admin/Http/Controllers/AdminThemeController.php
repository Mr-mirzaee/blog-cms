<?php

namespace Modules\Admin\Http\Controllers;

use Carbon\Carbon;
use Illuminate\Routing\Controller;
use App\Models\Theme;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Modules\Admin\Http\Requests\StoreThemeRequest;
use Modules\Admin\Traits\AdminUtil;
use ZipArchive;

class AdminThemeController extends Controller
{
    use AdminUtil;

    public function index()
    {
        return view('admin::themes.index');
    }

    public function data(Request $request)
    {
        return response()->json(Theme::generateDataTable($request));
    }

    public function activate(Theme $theme)
    {
        $theme->active = !$theme->active;
        $theme->save();
        return redirect(route('themes.index'));
    }

    public function create()
    {
        return view('admin::themes.create');
    }

    public function store(StoreThemeRequest $request)
    {
        $inputs = $request->all();
        !request()->filled('slug') && $inputs['slug'] = Str::slug($request->name, '-');
        $file = $inputs['file'];
        $date = Carbon::now();
        $fileName = $date->timestamp . '_' . $file->getClientOriginalName();
        $inputs['size'] = $this->formatBytes($file->getSize());
        $zip = new ZipArchive;
        $zipFile = $zip->open($file);
        if ($zipFile !== TRUE) {
            return redirect()->back()->withErrors(['file' => 'فقط فایل ZIP مجاز است']);
        }
        $imageName = pathinfo($fileName, PATHINFO_FILENAME) . '.png';
        $zip->renameName('screenshot.png', $imageName);
        $zip->extractTo(storage_path('app/public/images/themes/' . $date->year), array($imageName));
        $inputs['images'] = 'images/themes/' . $date->year . '/' . $imageName;
        $zip->extractTo(base_path() . '/' . env('CLIENT_PATH') . '/src/themes/' . $inputs['slug']);
        exec('cd ' . env('CLIENT_PATH') . ' && npm run build');
        $zip->close();
        $inputs['file'] = $file->storeAs(
            '/themes', $fileName, 'local'
        );
        Theme::query()->create($inputs);
        return redirect()->route('themes.index');
    }

    public function show(Theme $theme)
    {
        //
    }

    public function edit(Theme $theme)
    {
        //
    }

    public function update(Request $request, Theme $theme)
    {
        //
    }

    public function destroy(Theme $theme)
    {
        //
    }
}
