<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Galeris extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'paket_travels_id', 'image',
    ];

    protected $hidden = [
        
    ];

    public function paket_travels(){
        return $this->belongsTo(PaketTravels::class, 'paket_travels_id', 'id');
    }
}
