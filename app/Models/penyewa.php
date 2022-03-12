<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class penyewa extends Model
{
    use HasFactory;

    protected $fillable =
    [
        'nama_lengkap',
        'foto',
        'jk',
        'pekerjaan',
        'alamat'
    ];
    public $timestamps = true;

    public function image()
    {
        if ($this->foto && file_exists(public_path('images/ktp/' . $this->foto))) {
            return asset('images/ktp/' . $this->foto);
        } else {
            return asset('images/no_image.png');
        }
    }

    public function deleteImage()
    {
        if ($this->foto && file_exists(public_path('images/ktp/' . $this->foto))) {
            return unlink(public_path('images/ktp/' . $this->foto));
        }

    }

    public function sewas()
    {
        $this->hasMany('App\Models\sewa', 'penyewa_id');
    }
    public function transaksis()
    {
        $this->hasMany('App\Models\'transaksi', 'penyewa_id');
    }
}
