@extends('dashboard.layout.main')

@section('container')
<h2>Hasil Laporan</h2>
<div class="btn-toolbar mb-2 mb-md-0">
</div>
</div>
@if (session()->has('succes'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{ session('succes') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif

<div class="table-responsive col-lg-12">
<table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Paket</th>
        <th scope="col">Pengirim</th>
        <th scope="col">Penerima</th>
        <th scope="col">Tanggal Masuk</th>
        <th scope="col">Tanggal Keluar</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Informasi</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($cetak as $post)
            <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->pengirim }}</td>
        <td>{{ $post->penerima }}</td>
        <td>{{ $post->tanggal }}</td>
        <td>{{ $post->tanggalkeluar }}</td>
        <td>{{ $post->body }}</td>
        <td>{{ $post->informasi }}</td>
      </tr>
        @endforeach
      
    </tbody>
  </table>
Total Paket : {{ $jumlah }}
</div>
@endsection