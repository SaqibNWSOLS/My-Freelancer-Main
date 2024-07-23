<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

      protected $table = 'job';

    protected $fillable = ['job_categories_id','users_id','title','slug','description','price','visile_to','date_till','status'];

     public function user_detail(){
      return $this->belongsTo(User::class,'users_id')->with('profile_detail');
    }
}
