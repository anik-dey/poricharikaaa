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
                                            <legend>{{ __('Your Full Address') }}</legend>
                                            <input class="form-control" type="text" name="client_address" placeholder=""
                                                id="" value="{{ old('client_address') }}">
                                            @if ($errors->first('client_address'))
                                                <div class="alert-danger">{{ $errors->first('client_address') }}
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
                                            <div style="display: inline-flex">
                                                <input type="text" class="form-control" style="width: 20%" id="inputPassword4" value="+88" readonly>
                                                <input type="phone" name="contact_phone" class="form-control"
                                                    style="width: 80%" id="inputPassword4"
                                                    value="{{ old('contact_phone') }}" placeholder="Contact Number"
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
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="form-text">
                                                    <label>{{ __('Are You A Working Woman?') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-12">
                                                <div class="form-text check">
                                                    <div class="btn-group">
                                                        <input type="radio" class="btn-check" name="sex" value="Male"
                                                            id="option1" autocomplete="off" checked />
                                                        <label class="btn btn-secondary" value="Male"
                                                            for="option1">{{ __('No') }}</label>

                                                        <input type="radio" class="btn-check" name="sex" value="Female"
                                                            id="option2" autocomplete="off" />
                                                        <label class="btn btn-secondary" for="option2">{{ __('Yes') }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-7 col-md-8 col-sm-12">
                                                <div class="form-text">
                                                    <label>{{ __('Number of Family Members') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-4 col-sm-12">
                                                <div class="form-text">
                                                    <select class="form-control" name="client_members" id=""
                                                        value="{{ old('client_members') }}">
                                                        <option value="4"> {{ __('1 - 4') }}</option>
                                                        <option value="8"> {{ __('5 - 8') }}</option>
                                                        <option value="12"> {{ __('9 - 12') }}</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-6 col-sm-12">
                                                <div class="form-text">
                                                    <label>{{ __('Package') }}</label> <br>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-6 col-sm-12">
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-3 col-sm-3">
                                                        <div class="form-text2 check-radio">
                                                            <label class="btn-secondery">
                                                            <input type="radio" class="btn-check" name="options-outlined" id="smart-pack" autocomplete="off">
                                                            <span>{{ __('Smart') }}</span>
                                                        </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-3 col-sm-3">
                                                        <div class="form-text2 check-radio">
                                                            <label class="btn-secondery">
                                                            <input type="radio" class="btn-check" name="options-outlined" id="popular-pack" autocomplete="off">
                                                            <span>{{ __('Popular') }}</span>
                                                        </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-4 col-md-3 col-sm-3">
                                                        <div class="form-text2 check-radio">
                                                            <label class="btn-secondery">
                                                            <input type="radio" class="btn-check" name="options-outlined" id="danger-outlined" autocomplete="off">
                                                            <span>{{ __('Premium') }}</span>
                                                        </label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-7 col-md-6 col-sm-12">
                                                <div class="form-text">
                                                    <label>{{ __('Age of Baby') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6 col-sm-12">
                                                <div class="form-text">
                                                <input class="form-control" style="margin: 0%" type="number" name="baby-age" min="1" max="18" placeholder=""
                                                    id="office-size" value="{{ old('baby-age') }}">
                                                @if ($errors->first('baby-age'))
                                                    <div class="alert-danger">{{ $errors->first('baby-age') }}
                                                    </div>
                                                @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-7 col-md-6 col-sm-12">
                                                <div class="form-text">
                                                    <label>{{ __('Number of Baby') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-6 col-sm-12">
                                                <div class="form-text">
                                                <input class="form-control" style="margin: 0%" type="number" name="baby-count" min="1" max="5" placeholder=""
                                                    id="office-size" value="{{ old('baby-count') }}">
                                                @if ($errors->first('baby-count'))
                                                    <div class="alert-danger">{{ $errors->first('baby-count') }}
                                                    </div>
                                                @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-7 col-md-7 col-sm-12">
                                                <div class="form-text">
                                                    <label>{{ __('Special Need or Challenged?') }}</label>
                                                </div>
                                            </div>
                                            <div class="col-lg-5 col-md-5 col-sm-12">
                                                <div class="form-text check">
                                                    <div class="btn-group">
                                                        <input type="radio" class="btn-check" name="sex" value="Male"
                                                            id="option1" autocomplete="off" checked />
                                                        <label class="btn btn-secondary" value="Male"
                                                            for="option1">{{ __('No') }}</label>

                                                        <input type="radio" class="btn-check" name="sex" value="Female"
                                                            id="option2" autocomplete="off" />
                                                        <label class="btn btn-secondary" for="option2">{{ __('Yes') }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-text py-3">
                                            <label>{{ __("If 'Yes' than please mention the needs : ") }}</label>
                                            <textarea name="client_txt" id="" cols="80" rows="3">{{ old('client_txt') }}</textarea>

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
                                                                <span>{{ __('Take Care') }}</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm-4">
                                                        <div class="form-text2 check">
                                                            <label>
                                                                <input type="checkbox" name="task[]" value="Dish Washing">
                                                                <span>{{ __('Baby Feeding') }}</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm-4">
                                                        <div class="form-text2 check">
                                                            <label>
                                                                <input type="checkbox" name="task[]"
                                                                    value="Vegetable Chopping">
                                                                <span>{{ __('Help in Study') }}</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm-4">
                                                        <div class="form-text2 check">
                                                            <label>
                                                                <input type="checkbox" name="task[]" value="House Cleaning">
                                                                <span>{{ __('Cooking') }}</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-4 col-sm-4">
                                                        <div class="form-text2 check">
                                                            <label>
                                                                <input type="checkbox" name="task[]" value="Cooking">
                                                                <span>{{ __('Playing') }}</span>
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
                                <a class="link-text" href="{{ route('babycare', app()->getLocale()) }}">
                                    <div class="ex-service single-service-items text-center service-big">
                                        <div class="services-main-div">
                                            <img src="{{ asset('/assets/images/services/mother.png') }}" alt="">
                                            <div class="services-single-items-content service-names">
                                                <p>{{ __('Baby Care') }}</p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>

                            <div class="other-services">
                                <h4>{{ __('Our Other Services') }}</h4>
                                <div class="row box-service">
                                    <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6">
                                        <a class="link-text" href="{{ route('housemaid', app()->getLocale()) }}">
                                            <div class="service-small ex-service single-service-items text-center">
                                                <div class="services-main-div pt-0">
                                                    <img src="{{ asset('/assets/images/services/mother.png') }}" alt="">
                                                    <div class="services-single-items-content service-names">
                                                        <p>{{ __('House Msid') }}</p>
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
