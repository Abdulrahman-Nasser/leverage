@extends('admin-board.layouts.admin-layout')
@section('title', 'Admin | Add User')

@section('content')

    @include('admin-board.header.header')

    <main class="main">
        <!-- Sidebar Nav -->
        @include('admin-board.asside.asside')
        <!-- End Sidebar Nav -->

        <div class="content">

            <div class="py-4 px-3 px-md-4">
                <div class="card mb-3 mb-md-4">

                    <div class="card-body">
                        <!-- Breadcrumb -->
                        <nav class="d-none d-md-block" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Users</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Create New User</li>
                            </ol>
                        </nav>
                        <!-- End Breadcrumb -->

                        <div class="mb-3 mb-md-4 d-flex justify-content-between">
                            <div class="h3 mb-0">Create New User</div>
                        </div>

                        @if (Session::has('Done'))
                            <div class="alert alert-success mx-auto text-center">{{ Session::get('Done') }}</div>
                        @endif


                        <!-- Form -->
                        <div>
                            <form action="{{ route('admin.add-user') }}"  method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-12 col-md-6">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}" id="name" name="name" placeholder="name">
                                    </div>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <div class="form-group col-12 col-md-6">
                                        <label for="email">Email</label>
                                        <input type="email" class="form-control @error('email') is-invalid @enderror"
                                            value="{{ old('email') }}" id="email" name="email" placeholder="email">
                                    </div>

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="form-row">
                                    <div class="form-group col-lg-12 col-md-12">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control @error('password') is-invalid @enderror"
                                            value="" id="password" name="password" placeholder="password">
                                    </div>

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                </div>
                                <div class="custom-control custom-switch mb-2">
                                    <input type="checkbox" class="custom-control-input" id="randomPassword">
                                    <label class="custom-control-label" for="randomPassword">Set Random Password</label>
                                </div>

                                <button class="btn btn-primary float-right">Create</button>
                            </form>
                        </div>
                        <!-- End Form -->
                    </div>
                </div>


            </div>

            <!-- Footer -->
            @include('admin-board.footer.footer')
            <!-- End Footer -->
        </div>
    </main>

@endsection
