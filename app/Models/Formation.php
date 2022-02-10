<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Formation extends Model
{
    use HasFactory;

    protected $table = "formations";

    protected $fillable = ['title','description','instructor_id',
    'nb_hours','nb_articles','downloadable_ressources','is_certified',
    'actual_price','original_price','slug','keywords','image_path'];


    public function instructor()
    {
        return $this->belongsTo(Instructors::class);
    }
}
