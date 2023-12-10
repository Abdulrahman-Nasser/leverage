@extends('admin-board.layouts.admin-layout')
@section('title', 'Admin | Add Codes')
@section('content')


    @include('admin-board.header.header')

    <main class="main">
        <!-- Sidebar Nav -->
        @include('admin-board.asside.asside')
        <!-- End Sidebar Nav -->

        <div class="content">

            <div class=" px-md-4">
                <div class="card mb-3 mb-md-4">

                    <div class="card-body">
                        <!-- Breadcrumb -->
                        <nav class="d-none d-md-block" aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="#">Codes</a>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Create New Code</li>
                            </ol>
                        </nav>
                        <!-- End Breadcrumb -->

                        <div class="mb-3 mb-md-4 d-flex justify-content-between">
                            <div class="h3 mb-0">Create New Code</div>
                        </div>

                        @if (Session::has('Done'))
                            <div class="alert alert-success mx-auto text-center">{{ Session::get('Done') }}</div>
                        @elseif (Session::has('error'))
                            <div class="alert alert-danger mx-auto text-center">{{ Session::get('error') }}</div>
                        @endif


                        <!-- Form -->
                        <div>
                            <form action="{{ route('admin.addCode') }}" method="POST">
                                @csrf
                                <div class="form-row">
                                    <div class="form-group col-12 col-md-6">
                                        <label for="name">Instructor Name</label>
                                        <input type="text" class="form-control @error('name') is-invalid @enderror"
                                            value="{{ old('name') }}" id="name" name="name" placeholder="name">
                                    </div>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

                                    <div class="form-group col-12 col-md-6">
                                        <label for="code">Code</label>
                                        <input type="text" class="form-control @error('code') is-invalid @enderror"
                                            value="{{ old('code') }}" id="code" name="code" placeholder="Code">
                                    </div>

                                    @error('code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror

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



