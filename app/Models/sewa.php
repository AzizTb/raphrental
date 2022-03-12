<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sewa extends Model
{
    use HasFactory;
    protected $fillable = [
        'tgl_sekarang',
        'nama_lengkap',
        'alamat_sewa',
        'tgl_mulai_sewa',
        'tgl_selesai_sewa',
        'nama_mobil',
        'nama_driver'
    ];
    public $timestamps = true;

    public function mobils()
    {
        return $this->belongsTo('App\Models\mobil', 'mobil_id');
    }

    public function drivers()
    {
        return $this->belongsTo('App\Models\driver', 'driver_id');
    }

    public function penyewas()
    {
        return $this->belongsTo('App\Models\penyewa', 'penyewa_id');
    }

}
