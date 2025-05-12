<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AboutUs extends Model
{
    protected $fillable = [
        'header', 'logo', 'about_description', 'mission_description', 'message_description', 'vision_description'
    ];
}
