<?php

namespace Modules\Blog\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Routing\Controller;
use Modules\Blog\Http\Requests\LoginRequest;
use Modules\Blog\Http\Requests\RegisterRequest;

class AuthController extends Controller
{
    public function register(RegisterRequest $request)
    {
        User::create([
            'name' => $request->get('name'),
            'family' => $request->get('family'),
            'mobile' => $request->get('mobile'),
            'password' => Hash::make($request->get('password'))
        ]);
        return response()->json([
            'message' => 'ثبت نام با موفقیت انجام شد'
        ], 200);
    }

    public function login(LoginRequest $request)
    {
        $user = User::where('mobile', $request->mobile)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return response(['errors' => ['mobile' => 'اطلاعات ورود اشتباه است']], 403);
        }
        return response()->json([
            'token' => $user->createToken('Quera Access Token')->accessToken,
            'name' => $user->name,
            'family' => $user->family,
            'mobile' => $user->mobile
        ], 200);
    }
}
