<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

use Spatie\MediaLibrary\HasMedia;
use App\Models\Region;
use App\Models\Property;

class Neighborhood extends Model
{
    // protected $fillable = [
    //     'name', 'region_id'
    // ];
    protected $table = 'neighborhoods';

    // use HasFactory,SoftDeletes;
    // protected $dates = ['deleted_at'];
    protected $guarded=[];

    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    public function properties()
    {
        return $this->hasMany(Property::class);
    }
    public function temps()
    {
        return $this->hasMany(Temp::class);
    }

}
