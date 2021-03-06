<?php

namespace App\Http\Controllers;

use App\Models\ShortenedUrl;
use Carbon\Carbon;

class AdminController extends Controller
{
    public function dashboard()
    {
        $data['quantUrlShortened'] = ShortenedUrl::where('expiration', '>', Carbon::now()->format('Y-m-d'))->count();

        return view('admin.dashboard', [
            'data' => $data
        ]);
    }

    public function allLinks()
    {
        $links = ShortenedUrl::where('expiration', '>', Carbon::now()->format('Y-m-d'))->paginate(10);

        return view('admin.all-links', [
            'links' => $links
        ]);
    }
}
