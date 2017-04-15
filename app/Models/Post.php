<?php namespace App\Models;

use Dimsav\Translatable\Translatable;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use Translatable;

    public $translatedAttributes = ['title','body','slug'];
    protected $fillable = ['author_id','active','image','featured','published_at'];


}
