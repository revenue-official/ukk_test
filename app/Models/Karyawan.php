<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Karyawan extends Model
{
    use HasFactory;

    protected $table = 'karyawan';

    protected $primaryKey = 'id';

    protected $fillable = [
        'nik',
        'nama',
        'tanggal_lahir',
        'id_golongan',
        'id_jabatan',
        'jenis_kelamin'
    ];
}
