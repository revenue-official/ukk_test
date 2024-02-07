<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Golongan extends Model
{
    use HasFactory;

    protected $table = 'golongan';

    public function karyawan()
    {
        return $this->hasMany(Karyawan::class, 'id_golongan');
    }
}
