<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Proposal extends Model
{
    use HasFactory;

      protected $fillable = ['users_id','job_id','proposal_content','status','price','time'];

     protected $table = 'proposals';
}
