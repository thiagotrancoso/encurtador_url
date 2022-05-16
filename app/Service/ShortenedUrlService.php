<?php

namespace App\Service;

use App\Models\ShortenedUrl;
use Carbon\Carbon;
use Illuminate\Support\Str;

class ShortenedUrlService
{
    /**
     * @param array $inputs
     * @return string
     */
    public function store(array $inputs)
    {
        try {
            self::removeExpiredUrls();

            $inputs['code_url'] = $inputs['code_url'] ?? $this->getCodeUrl();
            $inputs['expiration'] = $inputs['expiration'] ?? $this->getExpirationDate();

            ShortenedUrl::create($inputs);

            return response()->json(['shortened_url' => url("/{$inputs['code_url']}")]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 500,
                'message' => 'Não foi possível encurtar a url.'
            ], 500);
        }
    }

    /**
     * @return string
     */
    private function getCodeUrl(): string
    {
        do {
            $codeUrl = Str::random(5);
            $codeUrlExists = ShortenedUrl::where('code_url', $codeUrl)->exists();
        } while ($codeUrlExists);

        return $codeUrl;
    }

    /**
     * @param integer $days
     * @return string
     */
    private function getExpirationDate(int $days = 7): string
    {
        return Carbon::now()->addDays($days)->format('Y-m-d');
    }

    public static function removeExpiredUrls(): void
    {
        ShortenedUrl::where('expiration', '<', Carbon::now()->format('Y-m-d'))->delete();
    }
}
