<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use App\Models\Property;

class Owner extends Model
// class Owner extends Model implements HasMedia
{
    use HasFactory;
    // use HasFactory,SoftDeletes,InteractsWithMedia;
    // protected $dates = ['deleted_at']; 
    protected $guarded=[];
    public function properties()
    {
        return $this->hasMany(Property::class);
    }
}
