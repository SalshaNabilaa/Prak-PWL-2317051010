<table class="table table-bordered text-center align-middle">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nama Mata Kuliah</th>
            <th>SKS</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($mks as $mk)
            <tr>
                <td>{{ $mk->id }}</td>
                <td>{{ $mk->nama_mk }}</td>
                <td>{{ $mk->sks }}</td>
                <td>
                    {{-- Tombol Edit --}}
                    <a href="{{ route('matakuliah.edit', $mk->id) }}" class="btn btn-edit btn-sm me-2">
                        Edit
                    </a>

                    {{-- Tombol Delete --}}
                    <form action="{{ route('matakuliah.destroy', $mk->id) }}" 
                          method="POST" style="display:inline;"
                          onsubmit="return confirm('Yakin ingin menghapus mata kuliah ini?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-delete btn-sm">
                            Delete
                        </button>
                    </form>
                </td>
            </tr>
        @endforeach
    </tbody>
</table>
