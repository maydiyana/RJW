@extends('dashboard.layout.main')

@section('container')
<h2>Data Barang Keluar</h2>
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
        <th scope="col">Jenis Layanan</th>
        <th scope="col">Pengirim</th>
        <th scope="col">Penerima</th>
        <th scope="col">Berat</th>
        <th scope="col">Tanggal Masuk</th>
        <th scope="col">Tanggal Keluar</th>
        <th scope="col">Infromasi</th>
        <th scope="col">Update</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($posts as $post)
            <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->catagory->name }}</td>
        <td>{{ $post->pengirim }}</td>
        <td>{{ $post->penerima }}</td>
        <td>{{ $post->berat }}</td>
        <td>{{ $post->tanggal }}</td>
        <td>{{ $post->tanggalkeluar }}</td>
        <td>{{ $post->informasi }}</td>
        <td>
          <center>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
          </center>
          </td>
      </tr>
        @endforeach
      
    </tbody>
  </table>
</div>
@endsection