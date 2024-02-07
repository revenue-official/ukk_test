<?php

namespace App\Http\Controllers;

use App\Models\Golongan;
use App\Models\Karyawan;
use Illuminate\Http\Request;
use App\Services\KaryawanService;

class KaryawanController extends Controller
{

    public $karyawanServices;

    public function __construct(KaryawanService $karyawanService)
    {
        $this->karyawanServices = $karyawanService;
    }

    public function index()
    {
        $karyawan = Karyawan::all();
        $relationGolongan = $this->relationGolongan();
        $golongan = $this->karyawanServices->golongan();
        $jabatan = $this->karyawanServices->jabatan();

        // dd($relationGolongan);
        return view('index', [
            'view' => 'table',
            'karyawan' => $karyawan,
            'golongan' => $golongan,
            'jabatan' => $jabatan,
            'relationGolongan' => $relationGolongan
        ]);
    }

    private function relationGolongan()
    {
        return Golongan::withCount('karyawan')
            ->pluck('karyawan_count', 'golongan')
            ->toArray();
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(
            'index',
            [
                'view' => 'create',
                'golongan' => $this->karyawanServices->golongan(),
                'jabatan' => $this->karyawanServices->jabatan()
            ]
        );
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $karyawan = new Karyawan();
        $karyawan->nik = $request->nik;
        $karyawan->nama = $request->nama;
        $karyawan->tanggal_lahir = $request->tanggal_lahir;
        $karyawan->jenis_kelamin = $request->jenis_kelamin;
        $karyawan->id_golongan = $request->id_golongan;
        $karyawan->id_jabatan = $request->id_jabatan;
        $karyawan->save();

        return redirect()->route('karyawan.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Karyawan $karyawan)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($karyawan)
    {
        $data = Karyawan::where('nik', $karyawan)->first();
        return view('index', [
            'view' => 'update',
            'data' => $data,
            'golongan' => $this->karyawanServices->golongan(),
            'jabatan' => $this->karyawanServices->jabatan()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $karyawan)
    {
        $data = Karyawan::where('nik', $karyawan)->first();
        $data->nik = $request->nik;
        $data->nama = $request->nama;
        $data->tanggal_lahir = $request->tanggal_lahir;
        $data->jenis_kelamin = $request->jenis_kelamin;
        $data->id_golongan = $request->id_golongan;
        $data->id_jabatan = $request->id_jabatan;
        $data->save();
        return redirect()->route('karyawan.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($karyawan)
    {
        $data = Karyawan::where('nik', $karyawan)->first();
        $data->delete();
        return redirect()->route('karyawan.index');
    }
}
