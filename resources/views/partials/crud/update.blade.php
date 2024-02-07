<div class="d-flex gap-3 justify-content-center">
    <div class="form-control">
        <form action="{{ route('karyawan.update', $data->nik) }}" method="post">
            @csrf
            @method('PUT')
            <x-default-input :forId="'nik'" :placeholder="'NIK'" :autocomplete="'off'" :type="'number'"
                :value="$data->nik"></x-default-input>
            <x-default-input :forId="'nama'" :placeholder="'NAMA'" :autocomplete="'off'" :type="'text'"
                :value="$data->nama"></x-default-input>
            <x-default-input :forId="'tanggal_lahir'" :placeholder="'TANGGAL LAHIR'" :autocomplete="'off'" :type="'date'"
                :value="$data->tanggal_lahir"></x-default-input>
            <div class="my-4">
                <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="my-4">
                <select class="form-select" name="id_golongan" id="id_golongan">
                    @foreach ($golongan as $item)
                        <option {{ $data->id_golongan === $item->id ? 'selected' : null }} value="{{ $item->id }}">
                            {{ $item->golongan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="my-4">
                <select class="form-select" name="id_jabatan" id="id_jabatan">
                    @foreach ($jabatan as $item)
                        <option {{ $data->id_jabatan === $item->id ? 'selected' : null }} value="{{ $item->id }}">
                            {{ $item->jabatan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="d-flex gap-3 justify-content-end my-4">
                <a href="{{ route('karyawan.index') }}" class="btn btn-danger">Exit</a>
                <button type="submit" class="btn btn-warning">Update</button>
            </div>
        </form>
    </div>
</div>
<script>
    document.getElementById("jenis_kelamin").value = "{{ $data->jenis_kelamin }}";
</script>
