<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Search;

class Blog extends Model
{
     protected $guarded = [];
    use HasFactory, Search;

    protected $searchable = [
        'name',
    ];

       public static $statues = [
        'publish'=>'Publish',
        'review'=>'Review',
        'pending_review'=>'Pending Review',
        'draft'=>'Draft'
    ];

    public function categoryDetail(){
       return $this->belongsTo(SitePageCategory::class,'page_categories_id');
    }
    
    public function blogComments(){

        return $this->hasMany(Comment::class,'ref_id')->where('type','blog')->orderBy('id','DESC')->with('userDetail');
    }
}
