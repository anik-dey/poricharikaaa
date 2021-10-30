@extends('layouts.app')

@section('title')
    Poricharika.com | Form | House Maid
@endsection


@section('content')

    <section>
        <div class="container">
            <div class="form-page-div">
                <div class="row">
                    <div class="col-7">
                        <div class="form-div">
                            <h3>{{ __('Application Form') }}</h3>
                            <div class="form-main-container pt-5">
                                {{-- @if (Session::has('message_sent'))

                                    <div class="alert alert-success" role="alert">
                                        {{ Session::get('message_sent') }}
                                    </div>
                                @endif --}}


                                <form class="form-control" method="POST"
                                    action="{{ route('savehousemaidform', app()->getLocale()) }}">
                                    @csrf
                                    <!-- < Form Input Start >-->
                                    <div id="form-container1" class="">
                                        <div class="single-field">
                                            <legend>{{ __('Full Name') }}</legend>
                                            <input class="form-control" type="text" name="client_name" placeholder=""
                                                id="client_name" value="{{ old('client_name') }}">
                                            @if ($errors->first('client_name'))
                                                <div class="alert-danger">{{ $errors->first('client_name') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="single-field">
                                            <legend>{{ __('Your Designation') }}</legend>
                                            <input class="form-control" type="text" name="designation" placeholder=""
                                                id="designation" value="{{ old('designation') }}">
                                            @if ($errors->first('designation'))
                                                <div class="alert-danger">{{ $errors->first('designation') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="single-field">
                                            <legend>{{ __('Office Full Name') }}</legend>
                                            <input class="form-control" type="text" name="office_name" placeholder=""
                                                id="office_name" value="{{ old('office_name') }}">
                                            @if ($errors->first('office_name'))
                                                <div class="alert-danger">{{ $errors->first('office_name') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="single-field">
                                            <legend>{{ __('Office Full Address') }}</legend>
                                            <input class="form-control" type="text" name="office_address" placeholder=""
                                                id="" value="{{ old('office_address') }}">
                                            @if ($errors->first('office_address'))
                                                <div class="alert-danger">{{ $errors->first('office_address') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="single-field">
                                            <legend>{{ __('Email Address') }}</legend>
                                            <input class="form-control" type="email" name="client_email" placeholder=""
                                                id="" value="{{ old('client_email') }}">
                                                 @if ($errors->first('client_email'))
                                                <div class="alert-danger">{{ $errors->first('client_email') }}
                                                </div>
                                            @endif
                                        </div>
                                        <div class="single-field">
                                            <legend>{{ __('Your Mobile Number') }}</legend>
                                            <div>
                                                <input type="phone" name="client_phone" class="form-control"
                                                    id="inputPassword4"
                                                    value="{{ old('client_phone') }}" placeholder="Contact Number"
                                                    pattern="[0]{1}[1]{1}[3-9]{1}[0-9]{8}" required>
                                                @if ($errors->first('client_phone'))
                                                    <div class="alert-danger">{{ $errors->first('client_phone') }}
                                                    </div>
                                                @endif
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-6">

                                            </div>
                                            <div class="col-6">
                                                <div class="form-btn pt-5 text-right next-btn">
                                                    <button class="form-button2"
                                                        id="form-btn1">{{ __('Next') }}</button>

                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- </ Form Input Start >-->

                                    <!-- < Form input Second -->
                                    <div id="form-container2" class="second-form">

                                        <div class="row">
                                            <div class="col-lg-7 col-md-8 col-sm-12">
                                                <div class="form-text">
                                                    <label>{{ __('Number of Employee') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-4 col-sm-12">
                                                <div class="form-text">
                                                    <select class="form-control" name="client_members" id=""
                                                        value="{{ old('client_members') }}">
                                                        <option value="20"> {{ __('10 - 20') }}</option>
                                                        <option value="40"> {{ __('21 - 40') }}</option>
                                                        <option value="60"> {{ __('41 - 60') }}</option>
                                                        <option value="61+"> {{ __('61 - More') }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-7 col-md-6 col-sm-12">
                                                <div class="form-text">
                                                    <label>{{ __('Office Type') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6 col-sm-12">
                                                <div class="form-text">
                                                    <select class="form-control" name="client_home" id=""
                                                        value="{{ old('client_home') }}">
                                                        <option value="Flat"> {{ __('Flat') }}</option>
                                                        <option value="Duplex"> {{ __('Duplex') }}</option>
                                                        <option value="Building"> {{ __('Building') }}</option>
                                                        <option value="Resort"> {{ __('Resort') }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-7 col-md-6 col-sm-12">
                                                <div class="form-text">
                                                    <label>{{ __('Office Size') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6 col-sm-12">
                                                <div class="form-text">
                                                <input class="form-control" style="margin: 0%" type="text" name="office-size" placeholder="square-feet"
                                                    id="office-size" value="{{ old('office-size') }}">
                                                @if ($errors->first('office-size'))
                                                    <div class="alert-danger">{{ $errors->first('office-size') }}
                                                    </div>
                                                @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-7 col-md-6 col-sm-12">
                                                <div class="form-text">
                                                    <label>{{ __('Numbers of Toilets') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6 col-sm-12">
                                                <div class="form-text">
                                                    <select class="form-control" name="office_toilet" id=""
                                                        value="{{ old('office_toilet') }}">
                                                        <option value="3"> {{ __('3') }}</option>
                                                        <option value="5"> {{ __('5') }}</option>
                                                        <option value="8"> {{ __('8') }}</option>
                                                        <option value="8+"> {{ __('More') }}</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-text">
                                                    <label>{{ __('Required Tasks:') }}</label> <br>

                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-lg-6 col-md-4 col-sm-4">
                                                        <div class="form-text2 check">
                                                            <label>
                                                                <input type="checkbox" name="task[]" value="Cloth Washing">
                                                                <span>{{ __('Cooking') }}</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm-4">
                                                        <div class="form-text2 check">
                                                            <label>
                                                                <input type="checkbox" name="task[]" value="Dish Washing">
                                                                <span>{{ __('Dish Washing') }}</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm-4">
                                                        <div class="form-text2 check">
                                                            <label>
                                                                <input type="checkbox" name="task[]"
                                                                    value="Vegetable Chopping">
                                                                <span>{{ __('Furniture Cleaning') }}</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm-4">
                                                        <div class="form-text2 check">
                                                            <label>
                                                                <input type="checkbox" name="task[]" value="Floor Cleaning">
                                                                <span>{{ __('Floor Cleaning') }}</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm-4">
                                                        <div class="form-text2 check">
                                                            <label>
                                                                <input type="checkbox" name="task[]" value="Toilet cooking">
                                                                <span>{{ __('Toilet Cleaning') }}</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm-4">
                                                        <div class="form-text2 check">
                                                            <label>
                                                                <input type="checkbox" name="task[]"
                                                                    value="Toilet Cleaning">
                                                                <span>{{ __('Stairs Cleaning') }}</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            @if ($errors->first('task'))
                                                <div class="alert-danger">{{ $errors->first('task') }}
                                                </div>
                                            @endif
                                        </div>
                                        {{-- <div class="py-4">

                                          Home Applients  <a href="#" class='form-button2'>Flat</a> <a href="#" class='form-button2'>Duplex</a> <a href="#" class='form-button2'>More Duplex</a> <a href="#" class='form-button2'>Resort</a>

                                        </div> --}}
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-btn text-right b-btn">
                                                    <div class="back-button" id="back-btn1"><i
                                                            class="fal fa-long-arrow-left"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-btn pt-5 text-right next-btn">
                                                    <button class="form-button2"
                                                        id="form-btn2">{{ __('Next') }}</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- < third form> -->
                                    <div id="form-container3" class="second-form">

                                        <div class="form-text py-3">
                                            <label>{{ __('Anything Else If You Want to Add for the Maid:') }}</label>
                                            <textarea name="client_txt" id="" cols="80" rows="5">{{ old('client_txt') }}</textarea>

                                        </div>
                                        <div class="terms-agree">
                                            <input class="agree" type="checkbox" name="agree" required>
                                            <label>{{ __('I agree to all the terms and conditions of Poricharika') }}</label>

                                        </div>
                                        <div class="row">
                                            <div class="col-6">
                                                <div class="form-btn text-right b-btn">
                                                    <div class="back-button" id="back-btn2"><i
                                                            class="fal fa-long-arrow-left"></i></div>
                                                </div>
                                            </div>
                                            <div class="col-6">
                                                <div class="form-btn pt-5 text-right next-btn">
                                                        <button type="submit" class="form-button2"
                                                            id="form-btn3" data-bs-toggle="modal" href="#succ-mod">
                                                            {{ __('Submit') }}
                                                        </button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- < Form Button > -->

                                    <!-- </ Form Button > -->
                                </form>
                            </div>


                        </div>
                    </div>
                    <div class="col-5">
                        <div class="all-services">
                            <div class="service-current">
                                <a class="link-text" href="{{ route('housemaid', app()->getLocale()) }}">
                                    <div class="ex-service single-service-items text-center service-big">
                                        <div class="services-main-div">
                                            <img src="{{ asset('/assets/images/services/maid.png') }}" alt="">
                                            <div class="services-single-items-content service-names">
                                                <p>{{ __('House Maid') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="other-services">
                                <h4>{{ __('Our Other Services') }}</h4>
                                <div class="row box-service">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <a class="link-text" href="{{ route('babycare', app()->getLocale()) }}">
                                            <div class="service-small ex-service single-service-items text-center">
                                                <div class="services-main-div pt-0">
                                                    <img src="{{ asset('/assets/images/services/mother.png') }}" alt="">
                                                    <div class="services-single-items-content service-names">
                                                        <p>{{ __('Baby Care') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <a class="link-text" href="{{ route('nurse', app()->getLocale()) }}">
                                            <div class="service-small ex-service single-service-items text-center">
                                                <div class="services-main-div pt-0">
                                                    <img src="{{ asset('/assets/images/services/nurse.png') }}" alt="">
                                                    <div class="services-single-items-content service-names">
                                                        <p>{{ __('Nurse') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <a class="link-text" href="{{ route('officeassistant', app()->getLocale()) }}">
                                            <div class="service-small ex-service single-service-items text-center">
                                                <div class="services-main-div pt-0">
                                                    <img src="{{ asset('/assets/images/services/office_assistant.png') }}"
                                                        alt="">
                                                    <div class="services-single-items-content service-names">
                                                        <p>{{ __('Office Assistant') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <a class="link-text" href="{{ route('beautician', app()->getLocale()) }}">
                                            <div class="service-small ex-service single-service-items text-center">
                                                <div class="services-main-div pt-0">
                                                    <img src="{{ asset('/assets/images/services/beautician.png') }}"
                                                        alt="">
                                                    <div class="services-single-items-content service-names">
                                                        <p>{{ __('Beautician') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <a class="link-text" href="{{ route('tailor', app()->getLocale()) }}">
                                            <div class="service-small ex-service single-service-items text-center">
                                                <div class="services-main-div pt-0">
                                                    <img src="{{ asset('/assets/images/services/tailor.png') }}" alt="">
                                                    <div class="services-single-items-content service-names">
                                                        <p>{{ __('Tailor') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <a class="link-text" href="{{ route('officemaid', app()->getLocale()) }}">
                                            <div class="service-small ex-service single-service-items text-center">
                                                <div class="services-main-div pt-0">
                                                    <img src="{{ asset('/assets/images/services/office_maid.png') }}"
                                                        alt="">
                                                    <div class="services-single-items-content service-names">
                                                        <p>{{ __('Office Maid') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>

                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <a class="link-text" href="{{ route('rapidservice', app()->getLocale()) }}">
                                            <div class="service-small ex-service single-service-items text-center">
                                                <div class="services-main-div pt-0">
                                                    <div class="medal-small">
                                                        <img src="{{ asset('/assets/images/others/medal.png') }}" alt="">
                                                    </div>
                                                    <img src="{{ asset('/assets/images/services/rapid_service.png') }}"
                                                        alt="">
                                                    <div class="services-single-items-content service-names">
                                                        <p>{{ __('Rapid Service') }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="modal fade" id="modal-house-maid" aria-hidden="true" aria-labelledby="..." tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="container">
                    <div class="modal-container">
                        @if (Session::has('message_sent'))

                            <div class="alert alert-success" role="alert">
                                {{-- {{ Session::get('message_sent') }} --}}
                                Thank You
                                Your application has been completed successfully.
                                Our People will contact you soon!
                            </div>
                        @endif
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="default-button3" data-bs-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
@endsection
