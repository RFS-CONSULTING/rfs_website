<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tutopdf extends Model
{
    use HasFactory;

    protected $table = 'table_tutopdfs';
    protected $guarded = ['id'];
}
