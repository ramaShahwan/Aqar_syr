<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use App\Models\Neighborhood;
use App\Models\Owner;

class Property extends Model 
// class Property extends Model implements HasMedia
{
    // use HasFactory,SoftDeletes,InteractsWithMedia;
    // protected $dates = ['deleted_at'];
    protected $guarded=[];

    public function owner()
    {
        return $this->belongsTo(Owner::class);
    }
    public function neighborhood()
    {
        return $this->belongsTo(Neighborhood::class);
    }
    
}
