<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class DataPelanggans extends Model
{
    protected $table = "datapelanggans";
    use SoftDeletes;

    protected $fillable = [
        'transaksi_details_id', 'namalengkap', 'jenis_kelamin', 'tempat_lahir', 'tgl_lahir',
         'ktp', 'telp', 'alamat', 'no_passport'
    ];

    protected $hidden = [
        
    ];

    public function details(){
        return $this->belongsTo(Transaksis::class, 'transaksi_details_id', 'id');
    }

}
