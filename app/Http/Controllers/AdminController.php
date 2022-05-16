<?php

namespace App\Http\Controllers;

use App\Models\ShortenedUrl;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function allLinks()
    {
        $links = ShortenedUrl::paginate(10);

        return view('admin.all-links', [
            'links' => $links
        ]);
    }
}
