<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RealisationProcess extends Model
{
    use HasFactory;
    protected $table = 'realisationProcess';
    protected $guarded = ['id'];
}
