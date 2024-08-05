@extends('dashboard.layout.main')

@section('container')
<h2>Welcome back, {{ auth()->user()->name }}</h2>
@if (session()->has('succes'))
        <div class="alert alert-success alert-dismissible fade show col-lg-8" role="alert">
            {{ session('succes') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
        
<div class="btn-toolbar mb-2 mb-md-0">

    
</div>
</div>


<div class="">

    {!! $chart->container() !!}
</div>


<div class="d-flex mt-2">


<div class="border col-md-6" style="background-color:rgb(85, 165, 244); border-radius: 5px;">
    <div>
        <center>
    
            <p class="text-sm mb-2 text-capitalize  ">Total Paket</p>
            <h5 class="font-weight-bolder mb-2">
                {{ $jumlah }}
            </h5>
        </center>
    </div>
</div>
<div class="border col-md-6" style="background-color:rgb(85, 165, 244); border-radius: 5px;">
    <div>
        <center>
    
            <p class="text-sm mb-2 text-capitalize  ">Total Layanan</p>
            <h5 class="font-weight-bolder mb-2">
                {{ $layanan }}
            </h5>
        </center>
    </div>
</div>
</div>

<div class="border col-md-12 mt-4 " style="background-color:rgb(85, 165, 244); border-radius: 5px;">
    <div class=""> 
        
    
            <p class="font-weight-bolder mb-2 fw-bold pb-5 px-2">Pengunguman</p>
            
        
    </div>
    
</div>


<script src="{{ $chart->cdn() }}"></script>

{{ $chart->script() }}
@endsection