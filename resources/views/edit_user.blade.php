@extends('layouts.app')

@section('content')
    <div class="card form-card mx-auto">
        <div class="card-header text-center">
            <h3 class="mb-0">Edit Pengguna</h3>
        </div>

        <div class="card-body">
            <form action="{{ route('user.update', $user->id) }}" method="POST">
                @csrf
                @method('PUT')

                <div class="mb-3">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" id="nama" name="nama" class="form-control" 
                           value="{{ old('nama', $user->nama) }}" required>
                </div>

                <div class="mb-3">
                    <label for="nim" class="form-label">NPM</label>
                    <input type="text" id="nim" name="nim" class="form-control"
                           value="{{ old('nim', $user->nim) }}" required>
                </div>

                <div class="mb-3">
                    <label for="kelas_id" class="form-label">Kelas</label>
                    <select name="kelas_id" id="kelas_id" class="form-select" required>
                        <option value="" disabled>-- Pilih Kelas --</option>
                        @foreach ($kelas as $kelasItem)
                            <option value="{{ $kelasItem->id }}" 
                                {{ $user->kelas_id == $kelasItem->id ? 'selected' : '' }}>
                                {{ $kelasItem->nama_kelas }}
                            </option>
                        @endforeach
                    </select>
                </div>

                <div class="text-center">
                    <button type="submit" class="btn btn-pink">Perbarui</button>
                </div>
            </form>
        </div>
    </div>
@endsection