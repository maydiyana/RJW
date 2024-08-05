@extends('dashboard.layout.main')

@section('container')
<h2>Data Paket Masuk</h2>
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
  <a href="/dashboard/posts/create" class="btn btn-primary mb-2">Buat Data Paket Masuk</a>
<table class="table table-striped table-sm">
    <thead>
      <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Paket</th>
        <th scope="col">Jenis Layanan</th>
        <th scope="col">Pengirim</th>
        <th scope="col">Penerima</th>
        <th scope="col">Berat/KG</th>
        <th scope="col">Tanggal</th>
        <th scope="col">Keterangan</th>
        <th scope="col">Informasi</th>
        <th scope="col">Action</th>
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
        <td><center>{{ $post->berat }}</center></td>
        <td>{{ $post->tanggal }}</td>
        <td>{{ $post->body }}</td>
        <td>{{ $post->informasi }}</td>
        <td>
          <center>
            <a href="/dashboard/posts/{{ $post->slug }}/edit" class="badge bg-warning"><i class="bi bi-pencil-square"></i></a>
            <form action="/dashboard/posts/{{ $post->slug }}" method="POST" class="d-inline">
            @method('delete')
            @csrf
            <button class="badge bg-danger border-0" onclick="return confirm('Are you sure for delete this post?') "><span class="bi bi-x-octagon"></span> </button>
            </form>
          </center>
        </td>
      </tr>
        @endforeach
      
    </tbody>
  </table>
</div>
@endsection