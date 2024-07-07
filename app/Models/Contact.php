<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;
use App\Models\Region;

class Contact extends Model implements HasMedia
{
    protected $fillable = [
        'name'
    ];
    use HasFactory,SoftDeletes,InteractsWithMedia;
    protected $dates = ['deleted_at'];
    protected $guarded=[];
  
 
}
