<x-layouts.navbar></x-layouts.navbar>
@extends('layouts.global')
@section('title')
    Booking
@endsection
@section('content')
    <section class="booking my-4 py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 pt-4 col-md-8 my-4">
                    <h5 class="mt-5 mb-3 text-center">Bukti Booking</h5>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>No Whatsapp</th>
                                <th>Tanggal Lahir</th>
                                <th>Keberangkatan</th>
                                <th>Kedatangan</th>
                                <th>Bukti Pembayaran</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($forms as $form)
                                <tr>
                                    <td>{{ $form->name }}</td>
                                    <td>{{ $form->email }}</td>
                                    <td>{{ $form->wa}}</td>
                                    <td>{{ $form->tgllhr }}</td>
                                    <td>{{ $form->berangkat }}</td>
                                    <td>{{ $form->datang }}</td>
                                    <td><img src="{{ asset('image/booking/' . $form->image) }}" width="100px"></td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </br>
            </div>
        </div>
    </section>
@endsection
