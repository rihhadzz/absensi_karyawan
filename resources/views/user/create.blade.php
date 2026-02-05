@extends('layouts.master')

@section('content')

<div class="card">
  <div class="card-body">
    <h4 class="card-title">Tambah User</h4>

    <form action="{{ route('user.store') }}" method="POST">
      @csrf

      <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="name" class="form-control" required>
      </div>

      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" required>
      </div>

      <div class="mb-3">
        <label>Password</label>
        <input type="password" name="password" class="form-control" required>
      </div>

      <div class="mb-3">
        <label>Role</label>
        <select name="role" class="form-control">
          <option value="admin">Admin</option>
          <option value="user">User</option>
        </select>
      </div>

      <button class="btn btn-success">Simpan</button>
      <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</div>

@endsection
