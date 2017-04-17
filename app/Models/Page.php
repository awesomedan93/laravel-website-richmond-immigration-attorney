<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'url','title_en', 'slug_en', 'keywords_en', 'title_es', 'slug_es', 'keywords_es',
    ];
}