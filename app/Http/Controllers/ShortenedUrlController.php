<?php

namespace App\Http\Controllers;

class ShortenedUrlController extends Controller
{
    public function create()
    {
        return view('admin.shortened-url.create');
    }
}
