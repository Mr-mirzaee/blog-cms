<?php

namespace Database\Seeders;

use App\Models\Theme;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class BaseSeeder extends Seeder
{
    public function run()
    {
        $user = User::whereMobile('09031662231')->first();
        if($user) $user->delete();
        User::create([
            'level' => 'admin',
            'name' => 'Ali',
            'family' => 'Mirzaee',
            'email' => 'AliMirzaee1382@gmail.com',
            'mobile' => '09031662231',
            'password' => Hash::make('09031662231')
        ]);

//        $user = User::whereMobile('demo')->first();
//        if($user) $user->delete();
//        User::create([
//            'level' => 'admin',
//            'name' => 'user',
//            'family' => 'demo',
//            'email' => 'demo@bolg-cms.ir',
//            'mobile' => 'demo',
//            'password' => Hash::make('demo')
//        ]);

        $theme = Theme::whereSlug('starter-theme')->first();
        if($theme) $theme->delete();
        Theme::create([
            'name' => 'قالب اولیه',
            'slug' => 'starter-theme',
            'size' => '1.7 MB',
            'file' => 'themes/starter-theme.zip',
            'images' => 'images/themes/2022/starter-theme.png',
            'active' => 1
        ]);
    }
}
