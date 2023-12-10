@extends('admin-board.layouts.login-admin')
@section('title', 'Levreage | Admin-login ')
@section('content')

    {{-- start content --}}
    <div class="content">

        <div class="container-fluid pb-5">

            <div class="row justify-content-md-center">
                <div class="card-wrapper col-12 col-md-4 mt-5">
                    <div class="brand text-center mb-3">
                        <a href="{{ route('admin.login') }}"><img src="{{ asset('assets/img/logo.jpg') }}" width="60"></a>
                        <span class="span-login">LEVERAGE</span>
                    </div>
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title text-center">Login</h4>

                            @if (Session::has('error'))
                                <div class="error alert alert-danger bg-danger border-danger text-center text-light">
                                    {{ Session::get('error') }}
                                </div>
                            @endif

                            @if (Session::has('success'))
                                <div class="error alert alert-success bg-transparent border-danger text-center text-light">
                                    {{ Session::get('success') }}
                                </div>
                            @endif

                            <form method="POST" action="{{ route('loginAdmin') }}" >

                                @csrf

                                <div class="form-group">
                                    <label for="email">E-Mail Address</label>
                                    <input  type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" >

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>

                                <div class="form-group">
                                    <label for="password">Password </label>
                                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror " name="password" >

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>



                                <div class="form-group no-margin">
                                    <button class="btn btn-primary btn-block">
                                        Sign In
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                    <footer class="footer mt-3">
                        <div class="container-fluid">
                            <div class="footer-content text-center small">
                                <span class="text-muted">&copy; 2019 Graindashboard. All Rights Reserved.</span>
                            </div>
                        </div>
                    </footer>
                </div>
            </div>



        </div>

    </div>
    {{-- end content --}}


@endsection
