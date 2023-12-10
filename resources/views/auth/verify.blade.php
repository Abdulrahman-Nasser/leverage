@extends('layouts.app')

@section('content')
    {{-- lodaing  --}}
    @include('loading.loader')
    {{-- End loading --}}


    {{-- start section verify login --}}
    <section class="login-page p-70 verify" id="particles-js">
        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-lg-7 col-md-10">
                    <div class="card">
                        <div class="card-header">{{ __('Verify Your Email Address') }}</div>

                        <div class="card-body">
                            @if (session('resent'))
                                <div class="alert alert-success" role="alert">
                                    {{ __('A fresh verification link has been sent to your email address.') }}
                                </div>
                            @endif

                            <h4> {{ __('Before proceeding, please check your email for a verification link.') }}
                                {{ __('If you did not receive the email') }},</h4>
                            <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                                @csrf
                                <div class="form-group mt-4">
                                    <button type="submit"
                                        class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

    </section>


    @include('practlise_js.main')
@endsection
