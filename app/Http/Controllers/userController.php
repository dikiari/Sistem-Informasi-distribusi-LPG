<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        $data = User::all();
        return view('user', compact('data'));
    }

    public function userInput()
    {
        return view('user-input');
    }

    public function userCreate(Request $request)
    {
        // Validasi data input
        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed',
        ]);

        try {
            // Membuat pengguna baru
            $user = User::create([
                'name' => $validatedData['name'],
                'email' => $validatedData['email'],
                'level' => 'admin',
                'password' => Hash::make($validatedData['password']),
            ]);

            // Redirect atau berikan respons sesuai kebutuhan aplikasi Anda
            return redirect()->route('userIndex')->with('success', 'User berhasil ditambahkan');
        } catch (\Exception $e) {
            // Tangkap error jika terjadi, dan kembalikan ke halaman sebelumnya dengan pesan kesalahan
            return redirect()->back()->withErrors(['error' => 'Terjadi kesalahan: ' . $e->getMessage()]);
        }
    }
    public function userDelete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('userIndex')->with('success', 'Data User Berhasil Dihapus');
    }

    public function userUpdate($id)
    {
        $user = User::findOrFail($id);
        return view('user-update', compact('user'));
    }

    public function userUpdateStore(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email,' . $id,
        ]);

        $user->update($validatedData);

        return redirect()->route('userIndex')->with('success', 'Data User Berhasil Diperbarui');
    }
}
