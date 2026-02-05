@extends('layouts.master')

@section('content')

{{-- STATISTIK ATAS --}}
<div class="row">
  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <h4>Hadir</h4>
        <h2>120</h2>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <h4>Izin</h4>
        <h2>10</h2>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <h4>Sakit</h4>
        <h2>5</h2>
      </div>
    </div>
  </div>

  <div class="col-lg-3 col-md-6">
    <div class="card">
      <div class="card-body">
        <h4>Alpha</h4>
        <h2>3</h2>
      </div>
    </div>
  </div>
</div>

{{-- TABEL ABSENSI --}}
<div class="row mt-4">
  <div class="col-md-12">
    <div class="card">
      <div class="card-body">
        <h4 class="card-title">Data Absensi Karyawan</h4>
        <table class="table table-bordered">
          <thead>
            <tr>
              <th>Nama</th>
              <th>Tanggal</th>
              <th>Status</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Budi</td>
              <td>05-02-2026</td>
              <td>Hadir</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>

@endsection
