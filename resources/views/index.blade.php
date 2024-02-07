@extends('layouts.app')

@section('content')
    @if ($view === 'table')
        <x-default-table :karyawan="$karyawan" :golongan="$golongan" :jabatan="$jabatan" :relationGolongan="$relationGolongan"></x-default-table>
    @endif
    @if ($view === 'create')
        @include('partials.crud.create')
    @endif
    @if ($view === 'update')
        @include('partials.crud.update')
    @endif
@endsection
