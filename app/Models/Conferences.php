<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conferences extends Model
{
    use HasFactory;

    protected $table = "conferences";

    protected $fillable = ['topic','location','date','hours',
    'description','link_hightlights_video','image_path','gif_link','ticket_price'];
}
