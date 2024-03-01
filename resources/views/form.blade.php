@extends('layouts.global')
@extends('layouts.navbar')

@section('content')

{{-- <div class="row" id="rent">
    @foreach($rent as $r)
    <div class="col-lg-4 " style="text-align: center">
        <div class="container border" id="image-product">
            <img src="{{ asset('image/rent/'.$r->image)}}" alt="{{ $r->name }}" style="width: 275px">
        </div>
      </div>
        <div class="col-lg-8" style="text-align:start">
            <div class="container" style="color:rgb(235, 147, 162)">
                <h3>{{ $r->name }}</h3>
                <h5>{{ $r->price }}</h5>
            </div>
          </br>
            <div class="container" style="text-align: start">
              <p style="font-size: 18px">{{ $r->deskripsi }}</p>
          </div>
        </div>
</div> --}}

<form action="{{ route('form.store') }}" method="POST" enctype="multipart/form-data">
    @csrf
    
     <div class="row mt-5 pt-3 container">
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Tanggal Lahir:</strong>
                <textarea class="form-control" style="height:100px" name="tgllhr" placeholder="Detail"></textarea>
            </div>
        </div>

        
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Email:</strong>
                <textarea class="form-control" style="height:100px" name="email" placeholder="Email"></textarea>
            </div>
        </div>
        
        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Whatsapp:</strong>
                <textarea class="form-control" style="height:100px" name="wa" placeholder="No Whatsapp"></textarea>
            </div>
        </div>
        
        <div class="col-xs-10 col-sm-10 col-md-10">
            <strong>Keberangkatan</strong>
            <select class="form-control form-control-sm" name="berangkat">
                <option>Malang</option>
                <option>Surabaya</option>
                <option>Jakarta</option>
              </select>
        </div>

        <div class="col-xs-10 col-sm-10 col-md-10">
            <strong>Kedatangan</strong>
            <select class="form-control form-control-sm" name="datang">
                <option>Malang</option>
                <option>Surabaya</option>
                <option>Jakarta</option>
              </select>
        </div>

        <div class="col-xs-10 col-sm-10 col-md-10">
            <div class="form-group">
                <strong>Bukti Pembayaran:</strong>
                <input type="file" name="image" class="form-control" placeholder="image">
            </div>
        </div>
        <div class="col-xs-10 col-sm-10 col-md-10 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
                <a type="button" class="btn btn-primary" href="{{ url('/')}}">Back</a>
            </div>
    </div>
     
</form>

@endsection 
