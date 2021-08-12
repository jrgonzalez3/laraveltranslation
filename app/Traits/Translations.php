<?php

namespace App\Traits;

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;

trait Translations
{
    public function translation($column, $default = '')
    {

        $locale = App::getLocale(); //aqui se usa app, usar facade

        if ($this->locale == $locale) {
            return $default;
        }

        $translation = DB::table('translations')
            ->where('table', $this->table)
            ->where('column', $column)
            ->where('row_id', $this->id)
            ->where('locale', $locale) //filtra traducion x localizacion actual del site
            ->first();

        if ($translation) {
            return $translation->translation;
        } else {
            return $default;
        }
    }
}