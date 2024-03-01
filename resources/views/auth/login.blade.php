@extends('layouts.global')


@section('content')
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10">
                    <div class="wrap d-md-flex">
                        <div class="wrap d-md-flex">
                            <div class="img w-100" style="background-image: url(img/Alchra.jpg);">
                            </div>
                        </div>
                        <div class="login-wrap p-4 p-md-5">
                            <div class="d-flex">
                                <div class="w-100">
                                    <h3 class="mb-4">Sign In</h3>
                                    @if (session('status'))
                                        <div class="alert alert-success alert-dismissible" role="alert">
                                            <button type="button" class="btn-close" data-dismiss="alert"></button>
                                            {{ session('status') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                            <form action="{{ route('send.login') }}" class="signin-form" method="POST"
                                enctype="multipart/form-data">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="email">Email</label>
                                    <input type="text"
                                        class="form-control  error {{ $errors->first('email') ? 'is-invalid' : '' }}"
                                        value="{{ old('email') }}" placeholder="email" name="email" required>
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password"
                                        class="form-control error {{ $errors->first('password') ? 'is-invalid' : '' }}"
                                        placeholder="Password" required name="password">
                                    <div class="invalid-feedback">
                                        {{ $errors->first('password') }}
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
                                        In</button>
                                </div>
                            </form>
                            <p class="text-center mt-4">Not a member? <a data-toggle="tab"
                                    href="{{ route('register') }}">Sign Up</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
