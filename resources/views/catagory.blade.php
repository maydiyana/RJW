@extends('dashboard.layout.main')

@section('container')
    <div class="col-lg-8">
        <form action="/catagory" method="POST">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Jenis Layanan</label>
            <input type="text" class="form-control @error('catagory') is-invalid @enderror" name="name" id="name">
            @error('name')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
          </div>
          <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control @error('catagory') is-invalid @enderror" name="slug" id="slug">
            @error('slug')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
          </div>
          <div class="mb-3">
            <label for="keterangan" class="form-label">Keterangan</label>
            <input type="text" class="form-control @error('catagory') is-invalid @enderror" name="keterangan" id="keterangan">
            @error('keterangan')
          <div class="invalid-feedback">
            {{ $message }}
          </div>
          @enderror
          </div>
          <button type="submit" class="btn btn-primary">Buat Jenis Layanan</button>
        </form>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">Jenis Layanan</th>
              <th scope="col">Keterangan</th>
            </tr>
            <br>
          </thead>
          <tbody>
              @foreach ($catagories as $post)
            <tr>
              <td>{{ $post->name }}</td>
              <td>{{ $post->keterangan }}</td>
            </tr>
              @endforeach
            
          </tbody>
        </table>
    </div>

    
@endsection
