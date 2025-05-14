<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactInfo extends Model
{
    protected $fillable = [
        'phone', 'address', 'email', 'facebook', 'instagram', 'linkedin', 'twitter', 'googleplaylink',
    'appstorelink',
    ];
}
