@extends('layouts.app')

@section('content')
    <div class="card form-card mx-auto">
        <div class="card-header text-center">
            <h3 class="mb-0">Buat Pengguna Baru</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('user.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="nim" class="form-label">NPM</label>
                    <input type="text" id="nim" name="nim" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="kelas_id" class="form-label">Kelas</label>
                    <select name="kelas_id" id="kelas_id" class="form-select" required>
                        <option value="">-- Pilih Kelas --</option>
                        @foreach ($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-pink">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection
