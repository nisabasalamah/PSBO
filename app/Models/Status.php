<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;
    public function barang()
    {
        return $this->hasMany(Barang::class, 'no_status', 'status');
    }
}
