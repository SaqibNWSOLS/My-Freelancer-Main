<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BillBoard extends Model
{
    use HasFactory;

       protected $fillable = [
        'title',
        'job_categories_id',
        'sub_job_categories_id',
        'tags',
        'users_id',
        'price',
        'pricing_description',
        'img1',
        'img2',
        'img3',
        'video',
        'doc1',
        'doc2',
    ];
}
