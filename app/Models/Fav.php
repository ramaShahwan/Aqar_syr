<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class Fav extends Model
{
    protected $guarded=[];
    protected $table = 'favs';

    public function properties()
    {
        return $this->belongsTo(Property::class, 'property_id');
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
