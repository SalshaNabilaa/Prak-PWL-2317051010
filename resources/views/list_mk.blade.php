@extends('layouts.app')

@section('content')
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Daftar Mata Kuliah</h3>
            <a href="{{ route('matakuliah.create') }}" class="btn btn-pink">+ Tambah Mata Kuliah Baru</a>
        </div>
        <div class="card-body">
            @include('components.matakuliah_table')
        </div>
    </div>
@endsection