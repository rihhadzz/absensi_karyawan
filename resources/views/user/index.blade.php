@extends('layouts.master')

@section('content')

<div class="row mb-3">
  <div class="col-md-6">
    <h4>Data User</h4>
  </div>
  <div class="col-md-6 text-end">
    <a href="{{ route('user.create') }}" class="btn btn-primary">
      + Tambah User
    </a>
  </div>
</div>

<div class="card">
  <div class="card-body">
    <table class="table table-bordered table-striped">
      <thead>
        <tr>
          <th>No</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Role</th>
          <th width="150">Aksi</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($users as $user)
        <tr>
          <td>{{ $loop->iteration }}</td>
          <td>{{ $user->name }}</td>
          <td>{{ $user->email }}</td>
          <td>{{ $user->role }}</td>
          <td>
            <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>

            <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">
                Hapus
              </button>
            </form>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>

@endsection

