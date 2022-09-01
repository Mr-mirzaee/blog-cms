<?php

namespace Modules\Admin\Traits;

use Carbon\Carbon;

Trait AdminUtil
{
    protected function uploadImages($file, $path)
    {
        $date = Carbon::now();
        $filePath = $path . "/$date->year";
        $filename = $date->timestamp . '_' . $file->getClientOriginalName();
        return $file->storeAs(
            $filePath, $filename, 'public'
        );
    }

    protected function createSlug($str, $char = '-')
    {
        // \x{0600}-\x{06FF} is the persian characters ranges
        $str = preg_replace('/[^A-Za-z0-9\x{0600}-\x{06FF}-]+/u', $char, $str);
        $str = trim($str, $char);
        return $str;
    }

    function formatBytes($bytes, $precision = 2) {
        $units = array('B', 'KB', 'MB', 'GB', 'TB');
        $i = 0;
        while($bytes > 1024) {
            $bytes /= 1024;
            $i++;
        }
        return round($bytes, $precision) . ' ' . $units[$i];
    }
}