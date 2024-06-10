<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;

     protected $fillable = [
        'full_name',
        'users_id',
        'screen_name',
        'home_town',
        'countries_id',
        'hourly_rate',
        'completed_tran',
        'whatsapp_number',
        'whatsapp_status',
        'facebook_id',
        'facebook_status',
        'skype_id',
        'skype_status',
        'zoom_id',
        'zoom_status',
        'website',
        'header_image',
        'header_photo'
    ];
}
