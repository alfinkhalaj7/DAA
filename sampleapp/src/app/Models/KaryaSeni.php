<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KaryaSeni extends Model
{
    use HasFactory;

    protected $fillable = [
        'judul', 'tanggal_upload', 'id_pengguna', 'kategori', 'file_karya',
    ];

    public function pengguna()
    {
        return $this->belongsTo(User::class, 'id_pengguna');
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class);
    }
}
