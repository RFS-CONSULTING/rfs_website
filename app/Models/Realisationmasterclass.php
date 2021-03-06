<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisationmasterclass extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'realisationmasterclass';
    protected $fillable = ['title','youtube','description','imagepath','youtube_embeded']; 
}
