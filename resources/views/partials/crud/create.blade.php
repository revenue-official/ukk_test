<div class="d-flex gap-3 justify-content-center">
    <div class="form-control">
        <form action="{{ route('karyawan.store') }}" method="post">
            @csrf
            @method('POST')
            <x-default-input :forId="'nik'" :placeholder="'NIK'" :autocomplete="'off'" :type="'number'"></x-default-input>
            <x-default-input :forId="'nama'" :placeholder="'NAMA'" :autocomplete="'off'" :type="'text'"></x-default-input>
            <x-default-input :forId="'tanggal_lahir'" :placeholder="'TANGGAL LAHIR'" :autocomplete="'off'"
                :type="'date'"></x-default-input>
            <div class="my-4">
                <select class="form-select" name="jenis_kelamin" id="jenis_kelamin">
                    <option selected disabled>Jenis Kelamin</option>
                    <option value="laki-laki">Laki-laki</option>
                    <option value="perempuan">Perempuan</option>
                </select>
            </div>
            <div class="my-4">
                <select class="form-select" name="id_golongan" id="golongan">
                    <option selected disabled>Golongan</option>
                    @foreach ($golongan as $item)
                        <option value="{{ $item->id }}">{{ $item->golongan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="my-4">
                <select class="form-select" name="id_jabatan" id="jabatan">
                    <option selected disabled>Jabatan</option>
                    @foreach ($jabatan as $item)
                        <option value="{{ $item->id }}">{{ $item->jabatan }}</option>
                    @endforeach
                </select>
            </div>
            <div class="d-flex gap-3 justify-content-end my-4">
                <a href="{{ route('karyawan.index') }}" class="btn btn-danger">Exit</a>
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>
    </div>
</div>
