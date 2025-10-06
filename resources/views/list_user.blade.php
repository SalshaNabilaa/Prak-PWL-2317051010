@extends('layouts.app')

@section('content')
    <div class="card shadow">
        <div class="card-header d-flex justify-content-between align-items-center">
            <h3 class="mb-0">Daftar Pengguna</h3>
            <a href="{{ route('user.create') }}" class="btn btn-pink">+ Tambah User</a>
        </div>
        <div class="card-body">
            @include('components.user_table')
        </div>
    </div>
@endsection
