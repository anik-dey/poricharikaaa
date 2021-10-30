@extends('layouts.admin')

@section('title')
    Admin Panel | Admin Profile
@endsection

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin Register</div>

                    <div class="card-body">
                        <form method="post" action="{{ route('adminsaveregister') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="name" class="col-md-4 col-form-label text-md-right">Name</label>

                                <div class="col-md-6">
                                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                    @error('name')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="email" class="col-md-4 col-form-label text-md-right">E-Mail Address</label>

                                <div class="col-md-6">
                                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                        name="email" value="{{ old('email') }}" required autocomplete="email">

                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password" class="col-md-4 col-form-label text-md-right">Password</label>

                                <div class="col-md-6">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password">

                                    @error('password')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password-confirm" class="col-md-4 col-form-label text-md-right">Confirm
                                    Password</label>

                                <div class="col-md-6">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password">
                                </div>
                            </div>

                            {{-- <div class="form-group row mb-0">
                                <div class="col-md-6 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        Register
                                    </button>
                                </div>
                            </div> --}}
                            <div class="text-center">
                                <a href="" class="btn btn-primary btn-block" data-toggle="modal"
                                    data-target="#modalLoginAvatar">
                                    ADD ADMIN</a>
                            </div>
                            <div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog"
                                aria-labelledby="myModalLabel" aria-hidden="true">
                                <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
                                    <!--Content-->
                                    <div class="modal-content">

                                        <!--Header-->
                                        <div class="modal-header">
                                            <img src="{{ asset('/assets/images/aniikk.jpg') }}" width="200" height="200"
                                                alt="avatar" class="rounded-circle img-responsive">
                                        </div>
                                        <!--Body-->
                                        <div class="modal-body text-center mb-1">

                                            <h5 class="mt-1 mb-2">{{ Auth::user()->name }}</h5>

                                            <div class="md-form ml-0 mr-0">
                                                <input type="password" type="text" id="form29" name="mypass"
                                                    class="form-control form-control-sm validate ml-0" required
                                                    autocomplete="email">
                                                <label data-error="wrong" data-success="right" for="form29"
                                                    class="ml-0">Enter password</label>
                                            </div>

                                            <div class="text-center mt-4">
                                                <a href="#"> <button class="btn btn-cyan mt-1">ADD <i
                                                            class="fas fa-sign-in ml-1"></i></button></a>
                                            </div>
                                        </div>

                                    </div>
                                    <!--/.Content-->
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



@endsection
