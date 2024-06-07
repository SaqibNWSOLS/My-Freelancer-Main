<?php

namespace App\Models\Setting;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class State extends Model
{
    use HasFactory;
      protected $table = 'states';

    protected $fillable = ['name','countries_id','status'];

      public function country()
    {
        return $this->belongsTo(Country::class, 'countries_id');
    }

    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
