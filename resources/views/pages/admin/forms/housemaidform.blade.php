@extends('layouts.admin')

@section('title')
    Admin Panel | House Maid Regestration
@endsection

@section('content')
<section class="tables-sec">
    <div class="list-page">
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header default-bg card-header-primary">
                                <h4 class="card-title ">Registration Form (House Maid)</h4>
                            </div>
                            <div class="card-body">
                                <form class="admin-form" action="" method="post">
                                    <div class="row">
                                        <div class="col-12">
                                            <label for="">Full Name</label>
                                            <input type="text" class="form-control fname text-alpha" id="fname" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="">Father's Name</label>
                                            <input type="text" class="form-control father text-alpha" id="father" required>
                                        </div>
                                        <div class="col-12">
                                            <label for="">Mother's Name</label>
                                            <input type="text" class="form-control mother text-alpha" id="mother">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label for="">NID No.</label>
                                            <input type="text" class="form-control nid" id="nid">
                                            <span id="errmsg"></span>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label for="">Date of Birth</label>
                                            <input type="date" placeholder="dd-mm-yyyy" value="" min="1970-01-01" max="2010-01-01" class="form-control dob" id="dob">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label for="">Personal Contact No.</label>
                                            <input type="tel" class="form-control contactp" id="contactp">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label for="">Home Contact No.</label>
                                            <input type="tel" class="form-control contacth" id="contacth">
                                        </div>
                                        <div class="col-12">
                                            <label for="">Present Address</label>
                                            <input type="text" class="form-control presenta" id="presenta">
                                        </div>
                                        <div class="col-12">
                                            <label for="">Permanent Address</label>
                                            <input type="text" class="form-control permanenta" id="permanenta">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label for="religion">Religion</label>
                                            <select class="form-control" id="religion" placeholder="choose" style="font-style: italic">
                                                <option disabled selected>Choose</option>
                                                <option label="Islam" value="islam">Islam</option>
                                                <option label="Hindu" value="hindu">Hindu</option>
                                                <option label="Buddho" value="buddho">Buddho</option>
                                                <option label="Christian" value="christian">Christian</option>
                                                <option label="Other" value="other">Other</option>
                                              </select>
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label for="">Marrital Status :</label>
                                            &nbsp; &nbsp; &nbsp; &nbsp;
                                            <input type="radio" class="marrital" id="married" name="marrital" value="married">
                                            <label for="married"> Married &nbsp; &nbsp;</label>
                                            <input type="radio" class="marrital" id="unmarried" name="marrital" value="unmarried">
                                            <label for="Unmarried"> Unmarried</label>
                                        </div>
                                        <div class="col-12 husband-info">
                                            <label for="">HUSBAND'S  NAME</label>
                                            <input type="text" class="form-control marrital" id="marrital">
                                        </div>
                                        <div class="col-md-6 col-sm-12 husband-info">
                                            <label for="">HUSBAND'S CONTACT</label>
                                            <input type="tel" class="form-control marrital" id="marrital">
                                        </div>
                                        <div class="col-md-6 col-sm-12 husband-info">
                                            <label for="">HUSBAND'S OCCUPATION</label>
                                            <input type="text" class="form-control marrital" id="marrital">
                                        </div>
                                        <div class="col-12">
                                            <label for="">EDUCATIONAL QUALIFICATION</label>
                                            <input type="text" class="form-control" id="marrital">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label for="">WORK EXPERIENCE</label>
                                            <input type="text" class="form-control" id="marrital">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label for="">CURRENT WORKPLACE</label>
                                            <input type="text" class="form-control" id="marrital">
                                        </div>
                                        <div class="col-12">
                                            <label class="check-label">TASK LIST : </label>
                                            <input type="checkbox" class="btn-check" name="options" id="option1" autocomplete="off">
                                            <label class="btn btn-tasks btn-primary" for="option1">Cloth Wash</label>
                                            <input type="checkbox" class="btn-check" name="options" id="option2" autocomplete="off">
                                            <label class="btn btn-tasks btn-primary" for="option2">Dish Washing</label>
                                            <input type="checkbox" class="btn-check" name="options" id="option3" autocomplete="off">
                                            <label class="btn btn-tasks btn-primary" for="option3">Cooking</label>
                                            <input type="checkbox" class="btn-check" name="options" id="option4" autocomplete="off">
                                            <label class="btn btn-tasks btn-primary" for="option4">House Cleaning</label>
                                            <input type="checkbox" class="btn-check" name="options" id="option5" autocomplete="off">
                                            <label class="btn btn-tasks btn-primary" for="option5">Toilet Cleaning</label>
                                            <input type="checkbox" class="btn-check" name="options" id="option6" autocomplete="off">
                                            <label class="btn btn-tasks btn-primary" for="option6">Vegetable Chopping</label>
                                        </div>
                                        <div class="col-12">
                                            <label for="">PREFERRED AREA/LOCATION</label>
                                            <input type="text" class="form-control" id="marrital">
                                        </div>
                                       
                                        <div class="col-12 ref">
                                            <p> <i> <u>'REFERENCE PERSON INFO'</u> </i> </p>
                                        </div>
                                        <div class="col-12">
                                            <label for="">FULL NAME</label>
                                            <input type="text" class="form-control" id="marrital">
                                        </div>
                                        <div class="col-12">
                                            <label for="">FULL ADDRESS</label>
                                            <input type="text" class="form-control" id="marrital">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label for="">RELATION</label>
                                            <input type="text" class="form-control" id="marrital">
                                        </div>
                                        <div class="col-md-6 col-sm-12">
                                            <label for="">NID NO.</label>
                                            <input type="text" class="form-control" id="marrital">
                                        </div>
                                        <div class="col-12">
                                            <label for="">PROFESSION</label>
                                            <input type="text" class="form-control" id="marrital">
                                        </div>
                                        <div class="col-12">
                                            <label for=""> <i> <u>CONTACT NO.</u> </i> </label>
                                            <div class="row">
                                                <div class="col-md-6 col-sm-12">
                                                    <label for="">PERSONAL</label>
                                                    <input type="tel" class="form-control" id="marrital">
                                                </div>
                                                <div class="col-md-6 col-sm-12">
                                                    <label for="">HOME</label>
                                                    <input type="tel" class="form-control" id="marrital">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                {{-- <label for="">SUBMIT</label> --}} <br> <br>
                                                <input type="submit" class="db2 float-right" id="submit-btn" value="Submit">
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
