<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostsTag extends Model
{
    use HasFactory;

    protected $fillable = ['post_id','tag_id'];

    public function tags()
    {
        return $this->belongsTo(Tags::class,'tag_id');
    }
}
