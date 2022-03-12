<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class mobil extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_mobil',
        'tahun_pembuatan',
        'no_mobil',
        'jenis_mobil',
        'harga_sewa',
        'kapasitas_penumpang',
        'fasilitas_mobil',
        'gambar'
    ];
    public $timestamps = true;

    public function image()
    {
        if ($this->gambar && file_exists(public_path('images/mobil/' . $this->gambar))) {
            return asset('images/mobil/' . $this->gambar);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->gambar && file_exists(public_path('images/mobil/' . $this->gambar))) {
            return unlink(public_path('images/mobil/' . $this->gambar));
        }

    }

    public function sewas()
    {
        $this->hasMany('App\Models\sewa', 'mobil_id');
    }
    public function transaksis()
    {
        $this->hasMany('App\Models\transaksi', 'mobil_id');
    }
}
