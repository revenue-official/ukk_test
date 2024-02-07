<?php

namespace App\Services;

use Illuminate\Support\Facades\DB;

class KaryawanService
{
    public function karyawan()
    {
        return DB::table('karyawan')->get();
    }
    public function golongan()
    {
        return DB::table('golongan')->get();
    }
    public function jabatan()
    {
        return DB::table('jabatan')->get();
    }
}
