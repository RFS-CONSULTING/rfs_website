<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Speakers extends Model
{
    use HasFactory;


    protected $table = "speakers";

    protected $fillable = ['name','email','job','description',
    'profile_photo_path','facebook_link','whatsapp_link','linkedin_link',
    'twitter_link'];
}
