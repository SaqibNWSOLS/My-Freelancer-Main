<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cities extends Model
{
    use HasFactory;

       protected $table = 'cities';

    protected $fillable = ['name','countries_id','states_id','status'];
    
      public function country()
    {
        return $this->belongsTo(Country::class, 'countries_id');
    }

    public function state()
    {
        return $this->belongsTo(State::class, 'states_id');
    }
}
