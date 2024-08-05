@extends('dashboard.layout.main')

@section('container')
<div class="col-lg-12">

<div class="mb-3 ">
    <h2>
        <p>Laporan</p>
    </h2>
        <div class="mb-3">
            <label for="form-label">Tanggal Masuk</label>
            <br>
            <input type="date" name="tang" id="tang" class="form-control">
        </div>
        <div class="mb-3">
            <label for="form-label">Tanggal Keluar</label>
            <br>
            <input type="date" name="tangg" id="tangg" class="form-control">
        </div>
        
<div>
    <a href="" onclick="this.href='/cetak/'+ document.getElementById('tang').value + '/' + document.getElementById('tangg').value" class="btn btn-primary">Cetak</a>
</div>
</div>
</div>


@endsection