<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InstructorSubscribe extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    protected $table = 'instructorSubscribe';
}
