@extends('layouts.admin')

@section('title')
    Admin Panel | Admin Change Password
@endsection

@section('content')
    <form method="POST" action="{{ route('adminsavepassword') }}" enctype="multipart/form-data">
        @csrf
        <div class="container rounded bg-white mt-5 mb-5">
            <div id="container">

                <div id="header">
                    {{-- <center>
                        <h1>Change</h1>
                    </center> --}}
                </div>
                <div id="form">
                    <input type="password" placeholder="New Password" name="password" id="passOne" />
                    @if ($errors->first('password'))
                        <div class="alert-danger">{{ $errors->first('password') }}
                        </div>
                    @endif
                    <input type="password" placeholder="Confirm Password" name="password_confirmation" id="passTwo" />
                </div>
                <div id="footer" class="incorrect">
                    <center>
                        <h1 id="footerText">Filler text</h1>
                    </center>
                </div>
                <div>
                    <a href="" class="btn btn-primary1 btn-block" data-toggle="modal" data-target="#modalLoginAvatar">
                        Update Password</a>

                </div>
                <div class="modal fade" id="modalLoginAvatar" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog cascading-modal modal-avatar modal-sm" role="document">
                        <!--Content-->
                        <div class="modal-content">

                            <!--Header-->
                            <div class="modal-header">
                                <img src="{{ URL::to(Auth::user()->image) }}" width="200" height="200" alt="avatar"
                                    class="rounded-circle img-responsive">
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

    </form>
    <style>
        body {
            background: url("http://myminispot.com/images/prox.png");
            background-size: cover;
        }

        #container {
            position: absolute;
            background: #fff;
            height: 350px;
            width: 300px;
            top: 500%;
            left: 50%;
            margin-left: -150px;
            margin-top: -175px;

            box-shadow: 0px 30px 150px;
            -webkit-box-shadow: 0px 30px 150px;
            -moz-box-shadow: 0px 30px 150px;

            border-radius: 15px;
            -webkit-border-radius: 15px;
            -moz-border-radius: 15px;
        }

        #header {
            background-color: #F26B6B;
            font-family: 'Francois One', sans-serif;
            height: 50px;
            width: 300px;
            position: absolute;
            top: 0;
            color: white;
            margin-top: -2px;

            border-radius: 15px 15px 0px 0px;
            -webkit-border-radius: 15px 15px 0px 0px;
            -moz-border-radius: 15px 15px 0px 0px;
        }

        #footer.incorrect {
            background-color: #F26B6B;
            font-family: 'Francois One', sans-serif;
            height: 75px;
            width: 300px;
            position: absolute;
            bottom: 0;
            color: white;
            margin-bottom: -2px;

            border-radius: 0px 0px 15px 15px;
            -webkit-border-radius: 0px 0px 15px 15px;
            -moz-border-radius: 0px 0px 15px 15px;
        }

        #footer.correct {
            background-color: #84F075;
            font-family: 'Francois One', sans-serif;
            height: 75px;
            width: 300px;
            position: absolute;
            bottom: 0;
            color: rgb(255, 255, 255);
            cursor: pointer;
            margin-bottom: -2px;

            border-radius: 0px 0px 15px 15px;
            -webkit-border-radius: 0px 0px 15px 15px;
            -moz-border-radius: 0px 0px 15px 15px;
        }

        #form {
            height: 100px;
            position: absolute;
            top: 50%;
            margin-top: -50px;
            width: 75%;
            left: 50%;
            margin-left: -37.5%;
        }

        input {
            width: 215px;
            margin: 0;
            border: 0;
            border-left: 1px solid;
            border-right: 1px solid;
            outline: none;
            height: 50px;
            font-size: 20px;
            padding-left: 10px;
        }

        input#passOne {
            border-top: 1px solid;
            border-radius: 15px 15px 0px 0px;
            -webkit-border-radius: 15px 15px 0px 0px;
            -moz-border-radius: 15px 15px 0px 0px;
        }

        input#passTwo {
            border-bottom: 1px solid;
            border-top: 1px solid;

            border-radius: 0px 0px 15px 15px;
            -webkit-border-radius: 0px 0px 15px 15px;
            -moz-border-radius: 0px 0px 15px 15px;
        }

        .btn-primary1 {
            background-color: #F26B6B;
            font-family: 'Francois One', sans-serif;
            height: 50px;
            width: 300px;
            position: absolute;
            top: 0;
            color: white;
            margin-top: -2px;

            border-radius: 15px 15px 0px 0px;
            -webkit-border-radius: 15px 15px 0px 0px;
            -moz-border-radius: 15px 15px 0px 0px;
        }

    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            var passOne = $("#passOne").val();
            var passTwo = $("#passTwo").val();

            $("#footerText").html("Don't match");

            var checkAndChange = function() {
                if (passOne.length < 1) {
                    if ($("#footer").hasClass("correct")) {
                        $("#footer").removeClass("correct").addClass("incorrect");
                        $("#footerText").html("Don't match");
                    } else {
                        $("#footerText").html("Don't match");
                    }
                } else if ($("#footer").hasClass("incorrect")) {
                    if (passOne == passTwo) {
                        $("#footer").removeClass("incorrect").addClass("correct");
                        $("#footerText").html("Continue");
                    }
                } else {
                    if (passOne != passTwo) {
                        $("#footer").removeClass("correct").addClass("incorrect");
                        $("#footerText").html("Don't match");
                    }
                }
            }



            $("input").keyup(function() {
                var newPassOne = $("#passOne").val();
                var newPassTwo = $("#passTwo").val();

                passOne = newPassOne;
                passTwo = newPassTwo;

                checkAndChange();
            });
        });

    </script>
@endsection
