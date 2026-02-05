<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    // ================= INDEX =================
    public function index()
    {
        $users = User::all();
        return view('user.index', compact('users'));
    }

    // ================= CREATE =================
    public function create()
    {
        return view('user.create');
    }

    // ================= STORE =================
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'role' => 'required|in:admin,user', // ✅ tambahkan role
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role, // ✅ simpan role
        ]);

        return redirect()->route('user.index')
                         ->with('success', 'User berhasil ditambahkan');
    }

    // ================= EDIT =================
    public function edit(User $user)
    {
        return view('user.edit', compact('user'));
    }

    // ================= UPDATE =================
    public function update(Request $request, User $user)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users,email,'.$user->id,
            'role' => 'required|in:admin,user', // ✅ tambahkan role
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
        ]);

        return redirect()->route('user.index')
                         ->with('success', 'User berhasil diupdate');
    }

    // ================= DELETE =================
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')
                         ->with('success', 'User berhasil dihapus');
    }
}
