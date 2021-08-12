<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class LocalizationController extends Controller
{
    public function set_lang($locale = 'es')
    {
        App::setLocale($locale); //definimos
        session()->put('locale', $locale); //almacenamos en session
        return redirect()->back(); //redireccionamos
    }
}