<?php

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
            $return = 'text-white';
        }

        return $return;
    }
}
