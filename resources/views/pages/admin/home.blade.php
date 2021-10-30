@extends('layouts.admin')

@section('title')
    Admin Panel
@endsection

@section('content')
    <div class="container">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                      <div class="card-header card-header-warning card-header-icon">
                        <div class="card-icon">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <p class="card-category">Used Space</p>
                        <h3 class="card-title">49/50
                          <small>GB</small>
                        </h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                      <div class="card-header card-header-success card-header-icon">
                        <div class="card-icon">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <p class="card-category">Revenue</p>
                        <h3 class="card-title">$34,245</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                      <div class="card-header card-header-danger card-header-icon">
                        <div class="card-icon">
                            <i class="fa fa-twitter"></i>
                        </div>
                        <p class="card-category">Fixed Issues</p>
                        <h3 class="card-title">75</h3>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="card card-stats">
                      <div class="card-header card-header-info card-header-icon">
                        <div class="card-icon">
                          <i class="fa fa-twitter"></i>
                        </div>
                        <p class="card-category">Followers</p>
                        <h3 class="card-title">+245</h3>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="card card-stats">
                        <div class="card-header card-header-warning card-header-icon">
                          <div class="card-icon">
                              <i class="fa fa-twitter"></i>
                          </div>
                          <p class="card-category">Used Space</p>
                          <h3 class="card-title">49/50
                            <small>GB</small>
                          </h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="card card-stats">
                        <div class="card-header card-header-success card-header-icon">
                          <div class="card-icon">
                              <i class="fa fa-twitter"></i>
                          </div>
                          <p class="card-category">Revenue</p>
                          <h3 class="card-title">$34,245</h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="card card-stats">
                        <div class="card-header card-header-danger card-header-icon">
                          <div class="card-icon">
                              <i class="fa fa-twitter"></i>
                          </div>
                          <p class="card-category">Fixed Issues</p>
                          <h3 class="card-title">75</h3>
                        </div>
                      </div>
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                      <div class="card card-stats">
                        <div class="card-header card-header-info card-header-icon">
                          <div class="card-icon">
                            <i class="fa fa-twitter"></i>
                          </div>
                          <p class="card-category">Followers</p>
                          <h3 class="card-title">+245</h3>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header default-bg">{{ __('Profile') }}</div>

                            <div class="card-body">
                                @if (session('status'))
                                    <div class="alert alert-success" role="alert">
                                        {{ session('status') }}
                                    </div>
                                @endif
                                You are logged in!
                                <div class="" aria-labelledby="">
                                    <a class="" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
