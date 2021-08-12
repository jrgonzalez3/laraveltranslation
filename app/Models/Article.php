<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\Traits\Mutators\ArticleMutators;


class Article extends Model
{
    use HasFactory,
        ArticleMutators;


    protected $fillable = [
        'title',
        'content',
        'locale'
    ];
}