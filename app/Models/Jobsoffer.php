<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jobsoffer extends Model
{
    use HasFactory;

    protected $table = 'jobsoffers';
    protected $guarded = ['id'];
}
