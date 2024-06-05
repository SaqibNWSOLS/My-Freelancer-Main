<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;


    public function userDetail(){
        return $this->belongsTo(User::class,'users_id')->with('profile');
    }
}
