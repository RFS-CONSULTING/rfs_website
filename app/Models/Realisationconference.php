<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Realisationconference extends Model
{
    use HasFactory;
    protected $guarded = ['id'];
    protected $fillable = ['title','youtube','description','imagepath','youtube_embeded']; 
}
