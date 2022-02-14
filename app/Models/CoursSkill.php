<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoursSkill extends Model
{
    use HasFactory;

    protected $table = 'table_cours_skills';
    
    protected $fillable = ['formation_id','description'];
}
