<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'email', 'password', 'level',
    ];

    public function karyaSeni()
    {
        return $this->hasMany(KaryaSeni::class);
    }

    public function komentar()
    {
        return $this->hasMany(Komentar::class);
    }
}
