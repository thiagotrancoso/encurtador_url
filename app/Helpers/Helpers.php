<?php

use Carbon\Carbon;
use Illuminate\Support\Facades\Route;

if (!function_exists('menu_active')) {
    /**
     * Return string "active" or empty string
     *
     * @param array|string $routeName
     * @return string
     */
    function menu_active(array|string $routeName): string
    {
        $return = '';

        if (Route::is($routeName)) {
            $return = 'active';
        }

        return $return;
    }
}

if (!function_exists('convert_date_br_to_db')) {
    /**
     * Converts the date to brazil format to database format.
     *
     * @param array|string $routeName
     * @return string
     */
    function convert_date_br_to_db(string $date): string
    {
        return Carbon::createFromFormat('d/m/Y', $date)->format('Y-m-d');
    }
}
