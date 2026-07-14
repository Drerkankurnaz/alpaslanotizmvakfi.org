<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use App;

class LanguageMiddleware
{
    public function handle($request, Closure $next)
    {
        if (Session::has('applocale') AND array_key_exists(Session::get('applocale'), config('languages'))) {
            \Illuminate\Support\Facades\App::setLocale(Session::get('applocale'));
        } else { // Bu kısım kullanıcının tarayıcısının dili varsayılan olarak ayarlanması için, isteğe bağlıdır.
            \Illuminate\Support\Facades\App::setLocale('tr');
        }
        return $next($request);
    }
}
