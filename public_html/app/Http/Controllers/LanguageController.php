<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Session;
use App;
use Illuminate\Http\Request;

class LanguageController extends Controller
{
    public function switchLang($lang)
    {
        if (array_key_exists($lang, config('languages'))) {
            \Illuminate\Support\Facades\Session::put('applocale', $lang);
        }
        return redirect()->back();
    }
}
