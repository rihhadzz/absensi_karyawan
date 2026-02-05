@extends('layouts.master')

@section('content')

<div class="card">
  <div class="card-body">
    <h4 class="card-title">Edit User</h4>

    <form action="{{ route('user.update', $user->id) }}" method="POST">
      @csrf
      @method('PUT')

      <div class="mb-3">
        <label>Nama</label>
        <input type="text" name="name" class="form-control" value="{{ $user->name }}">
      </div>

      <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control" value="{{ $user->email }}">
      </div>

      <div class="mb-3">
        <label>Role</label>
        <select name="role" class="form-control">
          <option value="admin" {{ $user->role == 'admin' ? 'selected' : '' }}>Admin</option>
          <option value="user" {{ $user->role == 'user' ? 'selected' : '' }}>User</option>
        </select>
      </div>

      <button class="btn btn-primary">Update</button>
      <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
  </div>
</div>

@endsection
