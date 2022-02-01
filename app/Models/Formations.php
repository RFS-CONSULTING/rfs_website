<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formations extends Model
{
    use HasFactory;

    protected $table = "formations";

    protected $fillable = ['title','description','instructor_id',
    'nb_hours','nb_articles','downloadable_resources','is_certified',
    'actual_price','original_price','slug','keywords','image_path'];
}
