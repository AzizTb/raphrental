<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class driver extends Model
{
    use HasFactory;
    protected $fillable = [
        'nama_driver',
        'jenis_kelamin',
        'alamat_driver',
        'no_telpon'
    ];
    public $timestamps = true;

    public function sewas()
    {
        $this->hasMany('App\Models\sewa', 'driver_id');
    }

    public function transaksis()
    {
        $this->hasMany('App\Models\transaksi', 'driver_id');
    }
}
