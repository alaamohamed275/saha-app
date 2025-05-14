<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;

class LanguageController extends Controller
{
    public function switch($locale)
    {
        // Validate if the locale is supported
        if (!in_array($locale, ['en', 'ar'])) {
            $locale = 'ar'; 
        }

        // Store the locale in session
        Session::put('locale', $locale);
        
        // Set the application locale
        App::setLocale($locale);
        
        return redirect()->back();
    }
}
