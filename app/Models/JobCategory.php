<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobCategory extends Model
{
    use HasFactory;
    protected $table = 'job_categories';

    protected $fillable = ['parent_id','name','status'];


    public function parentDetail(){

        return $this->belongsTo(JobCategory::class,'parent_id','id');
    }
}
