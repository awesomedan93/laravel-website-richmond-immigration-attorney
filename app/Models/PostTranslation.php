<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PostTranslation extends Model
{
    public $timestamps = false;

    protected $fillable = ['slug', 'title', 'body'];

    public function post()
    {
        return $this->belongsTo('App\Models\Post');
    }
}
