<?php

namespace App\Http\Controllers;

use App\Models\ShortenedUrl;
use Carbon\Carbon;

class RedirectController extends Controller
{
    public function redirect($codeUrl)
    {
        $shortenedUrl = ShortenedUrl::where('code_url', $codeUrl)
            ->where('expiration', '>', Carbon::now()->format('Y-m-d'))
            ->first();

        if (!$shortenedUrl) {
            return "404";
        }

        return redirect($shortenedUrl->original_url);
    }
}
