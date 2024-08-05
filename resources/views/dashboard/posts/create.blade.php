@extends('dashboard.layout.main')

@section('container')
<div class="col-lg-8">
    <form action="/dashboard/posts" method="POST" enctype="multipart/form-data">
      @csrf
        <div class="mb-3">
          <label for="title" class="form-label">Nama Paket</label>
          <input type="text" class="form-control @error('title') is-invalid @enderror" name="title" id="title">
          @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
        </div>
          <div class="mb-3">
            <label for="catagory_id" class="form-label">Jenis Layanan</label>
            <select class="form-select" name="catagory_id" id="catagory_id">
              @foreach ($catagories as $catagory)
              <option value="{{ $catagory->id }}">{{ $catagory->name }}</option>
              @endforeach
            </select>           
          </div>
         <div class="mb-3">
            <label for="slug" class="form-label">Slug</label>
            <input type="text" class="form-control" name="slug" id="slug">
           </div>
           <div class="mb-3">
            <label for="pengirim" class="form-label">Pengirim</label>
            <input type="text" class="form-control" name="pengirim" id="pengirim">
           </div>
           <div class="mb-3">
            <label for="penerima" class="form-label">Penerima</label>
            <input type="text" class="form-control" name="penerima" id="penerima">
           </div>
           <div class="mb-3">
            <label for="berat" class="form-label">Berat</label>
            <input type="text" class="form-control" name="berat" id="berat" placeholder="Satuan (KG)">
           </div>
           <div class="mb-3">
            <label for="tanggal" class="form-label">Tanggal Masuk</label>
            <input type="datetime-local" class="form-control" name="tanggal" id="tanggal">
           </div>
           <div class="mb-3">
           <div class="mb-3">
            <label for="image" class="form-label">Gambar</label>
            <input class="form-control" type="file" id="image" name="image" @error('image') is-invalid @enderror>
            @error('title')
        <div class="invalid-feedback">
          {{ $message }}
        </div>
        @enderror
          </div>
          <div class="mb-3">
            <label for="body" class="form-label">Keterangan</label>
            <br>
            <input id="body" type="hidden" name="body" id="body">
            <textarea id="body" name="body" rows="4" cols="90"> </textarea>
          </div>
          <label for="informasi">Infromasi Barang</label>
           <br>
              <select name="informasi" id="informasi" class="form-select">
                <option value="IN">IN</option>
                <option value="OUT">OUT</option>
              </select>
           </div>
        <button type="submit" class="btn btn-primary">Buat Data</button>
      </form>
</div>
<script>
  const title = document.querySelector("#title");
  const slug = document.querySelector("#slug");

  title.addEventListener("keyup", function() {
      let preslug = title.value;
      preslug = preslug.replace(/ /g,"-");
      slug.value = preslug.toLowerCase();
  });
</script>

@endsection