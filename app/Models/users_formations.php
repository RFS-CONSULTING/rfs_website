<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class users_formations extends Model
{
    use HasFactory;

    protected $table = 'users_formations';
    protected $fillable = ['user_id','formation_id'];
}
