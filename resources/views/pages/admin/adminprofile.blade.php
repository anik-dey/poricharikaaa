@extends('layouts.admin')

@section('title')
    Admin Panel | Admin Profile
@endsection

@section('content')
    <div class="container rounded bg-white mt-5 mb-5">
        <form method="post" action="{{ route('adminsaveprofile') }}" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center mt-2"><img class="rounded-circle mt-5"
                            src="{{ URL::to(Auth::user()->image) }}" width="200" height="200"><a href="#"><input
                                type="file" name="image" class="btn btn-primary btn-block"></a><span
                            class="font-weight-bold">{{ Auth::user()->name }}</span><span
                            class="text-black-50">{{ Auth::user()->email }}</span><span>
                        </span></div>
                </div>

                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>

                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Name</label><input type="text" class="form-control"
                                    placeholder="" name="name" value="{{ Auth::user()->name }}"></div>
                            @if ($errors->first('name'))
                                <div class="alert-danger">{{ $errors->first('name') }}
                                </div>
                            @endif
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Email</label><input type="email"
                                    class="form-control" placeholder="" name="email" value="{{ Auth::user()->email }}">
                                @if ($errors->first('email'))
                                    <div class="alert-danger">{{ $errors->first('email') }}
                                    </div>
                                @endif
                            </div>
                            <div class="col-md-12"><label class="labels">Role</label><input type="text" class="form-control"
                                    placeholder="" value="{{ Auth::user()->role_as }}" readonly></div>

                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Password</label><input type="password"
                                    class="form-control" placeholder="" value="{{ Auth::user()->password }}" readonly>
                            </div>


                        </div>
                        <div class="row mt-3">
                        </div>
                        <div class="row mt-3">
                        </div>
                        {{-- <div class="row mt-3">
                            <div class="col-md-6"><label class="labels">Update Pssword</label><input type="text"
                                    class="form-control @error('password') is-invalid @enderror" placeholder=""
                                    name="password" value="">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-md-6"><label class="labels">Confirm Password</label><input type="password"
                                    class="form-control" name="password_confirmation" value="" placeholder=""></div>
                        </div> --}}
                        {{-- <a href="#">
                            <div class="btn btn-default btn-rounded"><button class="btn btn-primary btn-block" type="button">Update
                                    Profile</button></div>
                          </a> --}}
                        <div class="text-center">
                            <a href="" class="btn btn-primary btn-block" data-toggle="modal"
                                data-target="#modalLoginAvatar">
                                Update Profile</a>
                        </div>
                        <div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog"
                            aria-labelledby="myModalLabel" aria-hidden="true">
                            <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
                                <!--Content-->
                                <div class="modal-content">

                                    <!--Header-->
                                    <div class="modal-header">
                                        <img src="{{ URL::to(Auth::user()->image) }}" width="200" height="200"
                                            alt="avatar" class="rounded-circle img-responsive">
                                    </div>
                                    <!--Body-->
                                    <div class="modal-body text-center mb-1">

                                        <h5 class="mt-1 mb-2">{{ Auth::user()->name }}</h5>

                                        <div class="md-form ml-0 mr-0">
                                            <input type="password" type="text" id="form29"
                                                class="form-control form-control-sm validate ml-0" name="mypass" required
                                                autocomplete="email">
                                            <label data-error="wrong" data-success="right" for="form29" class="ml-0">Enter
                                                password</label>
                                        </div>

                                        <div class="text-center mt-4">
                                            <a href="#"> <button class="btn btn-cyan mt-1" required>Update <i
                                                        class="fas fa-sign-in ml-1"></i></button></a>
                                        </div>
                                    </div>

                                </div>
                                <!--/.Content-->
                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <a href="{{ route('admin-home') }}">
                            <div class="mt-5 text-center"><button class="btn btn-primary btn-block" type="button">Back
                                    To Home</button></div>
                        </a>
                        <a href="{{ route('adminchangepass') }}">
                            <div class="mt-5 text-center"><button class="btn btn-primary btn-block" type="button">Change
                                    Password
                                </button></div>
                        </a>
                        {{-- <div class="d-flex justify-content-between align-items-center experience"><span>Edit
                                Experience</span><span class="border px-3 p-1 add-experience"><i
                                    class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                        <div class="col-md-12"><label class="labels">Experience in Designing</label><input type="text"
                                class="form-control" placeholder="experience" value=""></div> <br>
                        <div class="col-md-12"><label class="labels">Additional Details</label><input type="text"
                                class="form-control" placeholder="additional details" value=""></div>
                    </div> --}}
                    </div>
                </div>
            </div>
        </form>

    </div>
    </div>

@endsection
