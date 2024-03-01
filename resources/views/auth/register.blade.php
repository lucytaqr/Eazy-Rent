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
                                    <h3 class="mb-4">Register</h3>
                                </div>
                            </div>
                            <form action="{{ route('send.register') }}" class="signin-form"
                                enctype="multipart/form-data" method="POST">
                                @csrf
                                <div class="form-group mb-3">
                                    <label class="label" for="username">Username</label>
                                    <input type="text"
                                        class="form-control error {{ $errors->first('username') ? 'is-invalid' : '' }}"
                                        placeholder="Username" name="username" value="{{ old('email') }}" required>
                                    <div class="invalid-feedback">
                                        {{ $errors->first('username') }}
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="email">Email</label>
                                    <input type="text"
                                        class="form-control error {{ $errors->first('email') ? 'is-invalid' : '' }}"
                                        placeholder="email" name="email" required>
                                    <div class="invalid-feedback">
                                        {{ $errors->first('email') }}
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label class="label" for="password">Password</label>
                                    <input type="password"
                                        class="form-control  error {{ $errors->first('password') ? 'is-invalid' : '' }}"
                                        placeholder="Password" name="password" required>
                                </div>
                                <div class="invalid-feedback">
                                    {{ $errors->first('password') }}
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="form-control btn btn-primary rounded submit px-3">Sign
                                        Up</button>
                                </div>
                                <p class="text-center mt-4">do you have account? <a data-toggle="tab"
                                        href="{{ route('login') }}">Sign
                                        in</a>
                                </p>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
