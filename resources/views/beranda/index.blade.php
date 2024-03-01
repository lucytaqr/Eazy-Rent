<x-layouts.navbar>
</x-layouts.navbar>
@extends('layouts.global')
@section('title')
    Dashboard
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-lg-9 mt-3 container my-4">
                <!-- <h1>welcome,{{ Auth::user()->username }}</h1> -->
            </div>
            <div class="row">
                <div class="col-lg-12 margin-tb col-md-8 my-4">
                    <div class="pull-left">
                        <h2>Easy Rent Dashboard</h2>
                    </div>
                </div>
            </div>
            </br>
            <div class="pull-right my-4">
                <a class="btn btn-success" href="{{ route('dashboard.products.create') }}"> Create New Product</a>
            </div>

            </br>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table table-bordered container">
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>image</th>
                    <th>Deskripsi</th>
                    <th>Price</th>
                    <th width="280px">Action</th>
                </tr>
                @foreach ($rent as $rents)
                    <tr>
                        <td>{{ $rents->id }}</td>
                        <td>{{ $rents->name }}</td>
                        <td><img src="{{ asset('image/rent/' . $rents->image) }}" width="100px"></td>
                        <td>{{ $rents->deskripsi }}</td>
                        <td>{{ $rents->price }}</td>
                        <td>
                            <div class="d-flex ms-2">
                                <form action="{{ route('dashboard.products.destroy', $rents->id) }}" method="POST"
                                    class="d-inline">
                                    <a href="{{ route('dashboard.products.edit', $rents->id) }}"
                                        class="btn btn-success btn-sm">Edit</a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </table>
            </br>
        </div>
    </div>
@endsection
