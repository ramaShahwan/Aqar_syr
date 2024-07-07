<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Spatie\MediaLibrary\HasMedia;
use App\Models\City;
use App\Models\Neighborhood;

class Region extends Model
{
    protected $fillable = [
        'name', 'city_id'
    ];
    use HasFactory,SoftDeletes;
    protected $dates = ['deleted_at'];
    protected $guarded=[];
    public function city(){
        return $this->belongsTo(City::class);
    }
    // public function neighborhoods()
    // {
    //     return $this->hasMany(Neighborhood::class);
    // }
}
