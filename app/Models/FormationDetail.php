<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormationDetail extends Model
{
    use HasFactory;

    protected $table = 'table_formation_details';
    protected $fillable = ['formation_id','description','title'];
}
