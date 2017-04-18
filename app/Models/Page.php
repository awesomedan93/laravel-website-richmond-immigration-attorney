<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class Page extends Model
{
    protected $fillable = [
        'url','title_en', 'slug_en', 'keywords_en', 'title_es', 'slug_es', 'keywords_es',
    ];

    public function getMetaTags($pageRouteName)
    {
        $lang = App::getLocale();

        $pageMetaTags = Page::where('key',$pageRouteName)->firstOrFail();

        return [
            'title'=>$pageMetaTags->{"title_$lang"},
            'keywords'=>$pageMetaTags->{"keywords_$lang"},
            'description'=>$pageMetaTags->{"description_$lang"},
            'menu_title'=>$pageMetaTags->menu_title
            ];
    }
}