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
    protected $fillable = [
        'name', 'region_id'
    ];

    // use HasFactory,SoftDeletes;
    // protected $dates = ['deleted_at'];
    protected $guarded=[];
    public function region(){
        return $this->belongsTo(Region::class);
    }

}
