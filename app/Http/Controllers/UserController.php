<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserController extends Controller
{
    protected $userModel;
    protected $kelasModel;

    public function __construct(){
        $this->userModel = new UserModel();
        $this->kelasModel = new Kelas();
    }

    // Tampilkan daftar user
    public function index(){
        $data = [
            'title' => 'List User',
            'users' => $this->userModel->getUser(),
        ];
        return view('list_user', $data);
    }

    // Tampilkan form tambah user
    public function create(){
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Tambah User',
            'kelas' => $kelas,
        ];

        return view('create_user', $data);
    }

    // Simpan user baru
    public function store(Request $request){
        $request->validate([
            'nama' => 'required|string|max:255',
            'nim' => 'required|string|max:50',
            'kelas_id' => 'required|exists:kelas,id',
        ]);

        $this->userModel->create([
            'nama' => $request->input('nama'),
            'nim' => $request->input('nim'),
            'kelas_id' => $request->input('kelas_id'),
        ]);

        return redirect()->to('/user')->with('success', 'Data user berhasil ditambahkan!');
    }

    // Tampilkan form edit user
    public function edit($id){
        $user = $this->userModel->findOrFail($id);
        $kelas = $this->kelasModel->getKelas();

        $data = [
            'title' => 'Edit User',
            'user' => $user,
            'kelas' => $kelas,
        ];

        return view('edit_user', $data);
    }

    // Update user ke database
public function update(Request $request, $id)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'nim' => 'required|string|max:50',
        'kelas_id' => 'required|exists:kelas,id',
    ]);

    $user = $this->userModel->findOrFail($id);

    $user->update([
        'nama' => $request->input('nama'),
        'nim' => $request->input('nim'),
        'kelas_id' => $request->input('kelas_id'),
    ]);

    return redirect()->route('user.index')->with('success', 'Data user berhasil diperbarui!');
}

    // Hapus user
    public function destroy($id){
        $user = $this->userModel->findOrFail($id);
        $user->delete();

        return redirect()->route('user.index')->with('success', 'Data user berhasil dihapus!');
    }
}
