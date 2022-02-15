<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Posts extends Model
{
    use HasFactory;

    protected $table = "posts";

    protected $fillable = ['id','title','content','slug','author_id','keywords','image_path'];

    public function author()
    {
        return $this->belongsTo(Authors::class);
    }
    public function comments()
    {
        return $this->hasMany(Comments::class,'post_id');
    }
}
