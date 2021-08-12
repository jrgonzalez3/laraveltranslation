<?php

namespace App\Models\Traits\Mutators;

use App\Traits\Translations;

trait ArticleMutators
{
    use Translations;

    public function getTitleAttribute($value)
    {
        return $this->translation('title', $value);
    }

    public function getContentAttribute($value)
    {
        return $this->translation('content', $value);
    }
}