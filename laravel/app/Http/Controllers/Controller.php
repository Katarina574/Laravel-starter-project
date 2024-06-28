<?php

namespace App\Http\Controllers;

abstract class Controller
{
    public function index()
    {
        $welcomeMessage = __('messages.welcome');
        return view('welcome', compact('welcomeMessage'));
    }

    public function setLanguage($locale)
    {
        app()->setLocale($locale);
        session()->put('locale', $locale);

        return redirect()->back();
    }

}
