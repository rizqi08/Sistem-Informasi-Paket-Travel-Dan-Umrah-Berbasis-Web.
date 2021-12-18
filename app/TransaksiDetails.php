<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class TransaksiDetails extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'transaksis_id', 'username', 'kebangsaan', 'is_visa', 'doe_passport'
    ];

    protected $hidden = [
        
    ];

    public function transaksis(){
        return $this->belongsTo(Transaksis::class, 'transaksis_id', 'id');
    }
}
