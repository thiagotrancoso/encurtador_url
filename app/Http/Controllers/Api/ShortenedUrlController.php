<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Service\ShortenedUrlService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class ShortenedUrlController extends Controller
{
    private ShortenedUrlService $shortenedUrlService;

    public function __construct(ShortenedUrlService $shortenedUrlService)
    {
        $this->shortenedUrlService = $shortenedUrlService;
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $inputs = $request->all();
        $validator = Validator::make(
            $inputs,
            [
                'original_url' => 'required|url',
                'code_url'     => 'nullable|unique:shortened_urls,code_url',
                'expiration'   => 'nullable|date_format:d/m/Y'
            ]
        );

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        return $this->shortenedUrlService->store($inputs);
    }
}
