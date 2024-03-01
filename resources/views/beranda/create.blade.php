<x-layouts.navbar></x-layouts.navbar>
@extends('layouts.global')
@section('title')
    Tambah Data
@endsection
@section('content')
    <section class="add-data py-5 mt-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 margin-tb">
                    <div class="pull-left">
                        <h2>Add New Product</h2>
                    </div>
                    <div class="pull-right">
                        <a class="btn btn-primary" href="{{ route('dashboard.index') }}"> Back</a>
                    </div>
                </div>
            </div>
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <form action="{{ route('dashboard.products.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Name:</strong>
                                    <input type="text" name="name" class="form-control @error('name') is-invalid @enderror"
                                        placeholder="Name">
                                    <x-validate>
                                        {{ $errors->first('name') }}
                                    </x-validate>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Deskripsi:</strong>
                                    <textarea class="form-control @error('deskripsi') is-invalid @enderror" name="deskripsi"
                                        placeholder="Deskripsi"></textarea>
                                    <x-validate>
                                        {{ $errors->first('deskripsi') }}
                                    </x-validate>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12">
                                <div class="form-group">
                                    <strong>Image:</strong>
                                    <input type="file" name="image"
                                        class="form-control @error('image') is-invalid @enderror" placeholder="Image">
                                    <x-validate>
                                        {{ $errors->first('image') }}
                                    </x-validate>
                                </div>
                            </div>
                            <div class="form-group">
                                <strong>Price:</strong>
                                <input type="number" class="form-control @error('price') is-invalid @enderror" name="price"
                                    placeholder="Price"></input>
                                <x-validate>
                                    {{ $errors->first('price') }}
                                </x-validate>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-12 text-center mt-4">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
