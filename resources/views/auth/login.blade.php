@extends('layouts.app')

@section('content')
    @include('loading.loader')

    {{-- start login --}}
    <section class="login-page p-70" id="particles-js">
        <div class="overlay-login"></div>
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        <div class="card-header">{{ __('Login') }}</div>

                        <div class="card-body">
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row mb-3">


                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input id="email" type="email"
                                                class="form-control @error('email') is-invalid @enderror" name="email"
                                                value="{{ old('email') }}" required autocomplete="email"
                                                placeholder="Email">

                                            @error('email')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-3">
                                        <div class="form-group">
                                            <input id="password" type="password"
                                                class="form-control @error('password') is-invalid @enderror" name="password"
                                                required autocomplete="current-password" placeholder="Password">

                                            @error('password')
                                                <span class="invalid-feedback" role="alert">
                                                    <strong>{{ $message }}</strong>
                                                </span>
                                            @enderror
                                        </div>
                                    </div>





                                    <div class="col-md-12 mt-3">
                                        <button type="submit" class="btn btn-login btn-login2">
                                            {{ __('Login') }}
                                        </button>

                                        <div class="new-email mt-2">
                                            <a href="{{ route('register') }}" class="btn btn-login btn-login2 w-100">
                                                Create Email
                                            </a>
                                        </div>



                                        @if (Route::has('password.request'))
                                            <br>
                                            <a class="" href="{{ route('password.request') }}"
                                                style="list-style: none; padding: 0 10px ; margin: 0px 0;text-decoration: none;">
                                                Forget your Password ?
                                            </a>
                                            <p class="text-center m-0">OR</p>
                                        @endif
                                    </div>

                                    <div class="col-md-12">

                                        <a href="/" style="list-style: none; padding: 0 10px ; text-decoration: none;">
                                            Go back to Home Page ?
                                        </a>


                                    </div>

                                </div>
                            </form>


                        </div>
                    </div>
                </div>

                <div class="col-lg-6 col-md-6 login-text text-center">
                    <h1>Welcome To Leverage </h1>
                    <p>We are Happy to join us</p>
                </div>
            </div>
        </div>
    </section>
    {{-- end login --}}

    @include('practlise_js.main')
@endsection
