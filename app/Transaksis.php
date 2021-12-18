<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaksis extends Model
{
    protected $table = "transaksis";
    use SoftDeletes;

    protected $fillable = [
        'paket_travels_id', 'users_id', 'tambah_visa', 
        'total_transaksi', 'sukses_transaksi'
    ];

    protected $hidden = [
        
    ];

    public function details(){
        return $this->hasMany(TransaksiDetails::class, 'transaksis_id', 'id');
    }
    public function paket_travels(){
        return $this->belongsTo(PaketTravels::class, 'paket_travels_id', 'id');
    }
    public function user(){
        return $this->belongsTo(User::class, 'users_id', 'id');
    }
}
