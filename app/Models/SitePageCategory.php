<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SitePageCategory extends Model
{
    use HasFactory;

    protected $fillable=['name','page_categories_id','route','icon','description','sort_id','type'];

    protected $table='page_categories';

    public function pagesList(){

        return $this->hasMany(SitePage::class,'page_categories_id')->orderBy('sort_id')->where('status','publish');
    }
     public function child_categories(){

        return $this->hasMany(SitePageCategory::class,'page_categories_id')->orderBy('sort_id');
    }
    public function subChildCategories(){

        return $this->hasMany(SitePageCategory::class,'page_categories_id')->orderBy('sort_id')->with('pagesList');
    }

      public function blogsList(){

        return $this->hasMany(Blog::class,'page_categories_id')->orderBy('sort_id');
    }

    public function parentCategory(){

        return $this->belongsTo(SitePageCategory::class,'page_categories_id')->orderBy('sort_id');
    }
}
