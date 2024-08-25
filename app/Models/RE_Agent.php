<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\HasMedia;

class RE_Agent extends Model
{
    protected $guarded=[];
    protected $table = 're_agents';

    public function neighborhood()
    {
        return $this->belongsTo(Neighborhood::class);
    }


}
