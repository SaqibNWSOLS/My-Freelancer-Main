<?php

namespace App\Models;

use App\Models\Search;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class SitePage extends Model
{
    protected $guarded = [];
    use HasFactory, Search;

    protected $searchable = [
        'name',
        'page_categories_id'
    ];
    public static $statues = [
        'publish'=>'Publish',
        'review'=>'Review',
        'pending_review'=>'Pending Review',
        'draft'=>'Draft'
    ];

    public function categoryDetail(){
       return $this->hasOne(SitePageCategory::class,'id','page_categories_id')->with('parentCategory');
    }

    public function pageComments(){

        return $this->hasMany(Comment::class,'ref_id')->where('type','support_page')->orderBy('id','DESC')->with('userDetail');
    }

    /**
     * Set route before saving in DB
     *
     * @param string $value value
     *
     * @access public
     *
     * @return string
     */
    public function setRouteAttribute($value)
    {
        if (!empty($value)){
            
            $temp_slug = Str::slug($value, '-');
            if (!SitePage::all()->where('route', $temp_slug)->isEmpty()) {
                $i = 1;
                $new_slug = $temp_slug . '-' . $i;
                while (!SitePage::all()->where('route', $new_slug)->isEmpty()) {
                    $i++;
                    $new_slug = $temp_slug . '-' . $i;
                }
                $temp_slug = $new_slug;
            }
            $this->attributes['route'] = $temp_slug;
        }else{
            $this->attributes['route'] = null;
        }
    }
}
