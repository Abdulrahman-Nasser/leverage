@extends('layouts.app')

@section('content')
    @include('loading.loader')

    <section class="login-page register p-70 " id="particles-js">
        <div class="overlay-login"></div>
        <div class="container ">
            <div class="row justify-content-between">
                <div class="col-lg-5 col-md-12">
                    <div class="card">
                        <div class="card-header">{{ __('Register') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="row mb-3">

                                    <div class="col-md-12">
                                        <input id="name" type="text"
                                            class="form-control @error('name') is-invalid @enderror" name="name"
                                            value="{{ old('name') }}" required autocomplete="name" placeholder="Name">

                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <input id="email" type="email"
                                            class="form-control @error('email') is-invalid @enderror" name="email"
                                            value="{{ old('email') }}" required autocomplete="email" placeholder="Email">

                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>


                                    <div class="col-md-12 mt-3">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password" placeholder="Pasddword">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password"
                                            placeholder="Confirm Password">
                                    </div>


                                    <div class="col-md-12 mt-3">
                                        <button type="submit" class="btn btn-login btn-login2">
                                            {{ __('Register') }}
                                        </button>
                                    </div>



                                    <div class="col-md-12 mt-3">

                                        <a href="{{ route('login') }}" style="list-style: none; padding: 0 10px;">
                                            Already Have an Account ?
                                        </a>
                                        <br>
                                        <a href="{{ route('home') }}"
                                            style="list-style: none; padding: 0 10px; margin-top: 5px">
                                            Go back to Home Page
                                        </a>


                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5 col-md-12 login-text text-center">
                    <h1>Welcome To Leverage </h1>
                    <p>We are Happy to join us</p>
                </div>
            </div>
        </div>
    </section>

    @include('practlise_js.main')
@endsection
