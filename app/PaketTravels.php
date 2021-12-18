<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PaketTravels extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'title', 'slug', 'namapaket', 'deskripsi', 'hotel', 'maskapai', 'jenispaket',
        'tgl_berangkat', 'programhari', 'bandara', 'kamar', 'type', 'harga'
    ];

    protected $hidden = [
        
    ];
    public function galeris(){
        return $this->hasMany(Galeris::class, 'paket_travels_id', 'id');
    }
}
