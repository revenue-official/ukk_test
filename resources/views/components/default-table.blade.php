<div class="container-fluid">
    <div class="container">
        <span>
            <h3 class="font-poppins text-center my-3">KARYAWAN</h3>
        </span>
        <div class="container">
            <div class="m-5">
                <svg width="500" height="300">
                    <line x1="50" y1="250" x2="450" y2="250" stroke="gray" />
                    <line x1="50" y1="250" x2="50" y2="50" stroke="gray" />

                    @for ($i = 0; $i <= 10; $i++)
                        <text x="40" y="{{ 250 - $i * 20 }}" text-anchor="end" fill="gray">{{ $i * 10 }}</text>
                    @endfor

                    @foreach ($relationGolongan as $label => $count)
                        <text x="{{ $loop->index * 80 + 100 }}" y="270" text-anchor="middle"
                            fill="gray">{{ $count === 0 ? null : $label }}</text>
                        <rect x="{{ $loop->index * 80 + 70 }}" y="{{ 250 - $count * 5 }}" width="60"
                            height="{{ $count * 5 }}" fill="rgba(0, 0, 255, 0.3)" stroke="blue" />
                    @endforeach

                    <text x="20" y="150" text-anchor="middle" transform="rotate(-90,10,150)"
                        fill="gray">Karyaawan</text>

                </svg>
            </div>
            <table class="table table-sm table-hover">
                <tr class="table-primary">
                    <th>NO</th>
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>TANGGAL LAHIR</th>
                    <th>JENIS KELAMIN</th>
                    <th>GOLONGAN</th>
                    <th>JABATAN</th>
                    <th class="text-center">
                        <a href="{{ route('karyawan.create') }}" class="btn btn-sm btn-primary">Create</a>
                    </th>
                </tr>
                </thead>
                <tbody>
                    @foreach ($karyawan as $data)
                        <tr>
                            <td>{{ $loop->iteration }}</td>
                            <td>{{ $data->nik }}</td>
                            <td>{{ $data->nama }}</td>
                            <td>{{ $data->tanggal_lahir }}</td>
                            <td>{{ $data->jenis_kelamin }}</td>
                            <td>
                                @foreach ($golongan as $item)
                                    {{ $item->id === $data->id_golongan ? $item->golongan : null }}
                                @endforeach
                            </td>
                            <td>
                                @foreach ($jabatan as $item)
                                    {{ $item->id === $data->id_jabatan ? $item->jabatan : null }}
                                @endforeach
                            </td>
                            <td class="d-flex gap-3">
                                <a href="{{ route('karyawan.edit', $data->nik) }}"
                                    class="btn btn-sm btn-warning">Edit</a>
                                <form action="{{ route('karyawan.destroy', $data->nik) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger"
                                        onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
