<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\MstPrefecture;


class PostController extends Controller
{

    public function create()
    {
        $prefectures = Prefecture::all();

        return view('auth.register')
            ->with([
                'prefectures' => $prefectures,
            ]);
    }

    public function edit(Post $post)
    {
        $prefectures = Prefecture::all();

        return view('profile.parties.edit')
            ->with([
                'prefectures' => $prefectures,
                'post' => $post,
            ]);
    }
}