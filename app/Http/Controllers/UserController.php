<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('query');

        if ($query) {
            $data_user = User::where('name', 'like', '%' . $query . '%')
                ->orWhere('email', 'like', '%' . $query . '%')
                ->orderBy('id', 'desc')
                ->paginate(5);
        } else {
            $data_user = User::orderBy('id', 'desc')->paginate(5);
        }

        // Mendapatkan nomor awal untuk setiap halaman
        $no = ($data_user->currentPage() - 1) * $data_user->perPage();

        return view('dashboard.user.index', compact('data_user', 'no', 'query'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ], [
            'name.required' => 'Nama harus diisi',
            'email.required' => 'Email harus diisi',
            'email.email' => 'Email tidak valid',
            'email.unique' => 'Email sudah digunakan',
            'password.required' => 'Password harus diisi',
            'password.min' => 'Password minimal harus 6 karakter',
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);

        return redirect()->route('user.index')->with('success', 'Data user berhasil ditambahkan');
    }

    public function destroy($id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'Data user berhasil dihapus');
    }

    public function edit($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('user.index')->with('error', 'User tidak ditemukan');
        }
        return view('dashboard.user.edit', compact('user'));
    }

    public function update(Request $request, $id)
    {
        $user = User::find($id);
        if ($user) {
            $request->validate([
                'name' => 'required',
                'email' => 'required|email|unique:users,email,' . $user->id,
                'password' => 'nullable|min:6',
            ], [
                'name.required' => 'Nama harus diisi',
                'email.required' => 'Email harus diisi',
                'email.email' => 'Email tidak valid',
                'email.unique' => 'Email sudah digunakan',
                'password.min' => 'Password minimal harus 6 karakter',
            ]);

            $user->name = $request->name;
            $user->email = $request->email;
            if ($request->filled('password')) {
                $user->password = bcrypt($request->password);
            }
            $user->save();

            return redirect()->route('user.index')->with('success', 'User berhasil diperbaruhi');
        } else {
            return redirect()->route('user.index')->with('success', 'User tidak ditemukan');
        }
    }
}
