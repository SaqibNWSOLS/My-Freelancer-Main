<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Job extends Model
{
    use HasFactory,SoftDeletes;

      protected $table = 'job';

    protected $fillable = ['job_categories_id','users_id','title','slug','description','min_price','max_price','price','visile_to','date_till','status'];

     public function user_detail(){
      return $this->belongsTo(User::class,'users_id')->with('profile_detail');
    }
}
