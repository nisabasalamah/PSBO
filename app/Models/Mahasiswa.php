<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->hasOne(User::class, 'id', 'nim');
    }
    public function barang()
    {
        return $this->hasMany(Barang::class, 'nim', 'nim');
    }
}
