<?php

use App\Models\User;
use Illuminate\Support\Facades\Cache;

function settings($settings, $updateCache = false)
{

    switch ($settings) {

   // Appearance settings
   case 'users':

    // Check if want to update cache
    if ($updateCache) {

        // Remove it from cache
        Cache::forget('users');

    } else {
   
        // Return data
        return Cache::rememberForever('users', function () {
            return User::all();
        });

    }

    break;
    }
}