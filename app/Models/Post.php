<?php namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['author_id','title','body','slug','active','image','published_at'];


}
