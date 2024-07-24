<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use App\Models\Region;

class City extends Model 
// class City extends Model implements HasMedia
{
    // protected $fillable = [
    //     'name','city_image'
    // ];
    // use HasFactory,SoftDeletes,InteractsWithMedia;
    use HasFactory;
    protected $table = 'cities';
    // protected $dates = ['deleted_at'];
    protected $guarded=[];
    public function regions()
    {
        return $this->hasMany(Region::class);
    }
 
}
