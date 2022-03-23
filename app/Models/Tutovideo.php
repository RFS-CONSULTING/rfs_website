<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutovideo extends Model
{
    use HasFactory;
    protected $table = 'table_tutovideos';
    protected $guarded = ['id'];
}
