@extends('layouts.app')

@section('title')
    Poricharika.com
@endsection


@section('content')
    <!-- < 02 Header-Started > -->
    <section id="#head-sec">
        <div class="header-content">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="header-single-content text-center">
                            <h3>{{ __('Are you looking for the reliable &') }}</h3>
                            <h1>{{ __('Skilled Houseworker?') }}</h1>
                            <p>{{ __('We deliver the most Reliable and Skilled houseworkers for your house-hold needs') }}
                            </p>
                        </div>
                        <div class="header-button text-center pt-5">
                            <a href="{{ route('services', app()->getLocale()) }}"><button
                                    class="default-button btn-p">{{ __('Book Now') }}</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="">
            <div class="header-banner">

            </div>
        </div>
    </section>
    <!-- </ 02 Header-Ends > -->



    <!-- < 03 AboutUs-Started > -->

    <section id="aboutus-sec">
        <div class="container">
            <div class="about-content">
                <h2 class="text-center default-color default-weight p-5">{{ __('About Us') }}</h2>
                <p>{{ __('‘Poricharika’ is a virtual platform which has originated as a solution for the growing need of house worker/housemaid/domestic worker and related services in home and other business and non-business organizations. This is a digital service providing enterprise which follows/maintains some particular rules and policies to provide contractual house worker, kid-nursing service, beautician, nurse, tailor and handicraftsman, office-assistant and emergency-service-staff.') }}
                </p>
                <p>{{ __("As a social business model, we are glad to name our platform as ‘Poricharika’ to show veneration towards the services of house workers. We have designed our services/roads considering busy urban lifestyle. You are just one click away to get our services through our website or installing our mobile application. We hope our small endeavor will enhance the successful participation and partnership of woman in socio-economic development. Moreover, we emphasize on the collaboration of clients' demand with our authenticity and credibility as well as reduction of unemployment and social decadence.") }}
                </p>
                <p>{{ __('Together we are promised to / will build a better Bangladesh……') }}</p>
            </div>
        </div>
    </section>

    <!-- </ 03 AboutUs-Ends > -->



    <!-- < 04 Services-Started > -->

    <section id="services-sec">
        <div class="container">
            <div class="services-content">
                <h2 class="text-center default-color default-weight p-5">{{ __('Our Services') }}</h2>
                <div class="services-item">
                    <div class="row">
                        <!-- Services items -->
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 pt-4">
                            <a class="link-text" href="{{ route('babycare', app()->getLocale()) }}">
                                <div class="single-service-items text-center">
                                    <div class="services-main-div">
                                        <img src="{{ asset('/assets/images/services/mother.png') }}" alt="">
                                        <div class="services-single-items-content p-3">
                                            <p>{{ __('Baby Care') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Services items -->
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 pt-4">
                            <a class="link-text" href="{{ route('nurse', app()->getLocale()) }}">
                                <div class="single-service-items text-center">
                                    <div class="services-main-div">
                                        <img src="{{ asset('/assets/images/services/nurse.png') }}" alt="">
                                        <div class="services-single-items-content p-3">
                                            <p>{{ __('Nurse') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Services items -->
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 pt-4">
                            <a class="link-text" href="{{ route('officeassistant', app()->getLocale()) }}">
                                <div class="single-service-items text-center">
                                    <div class="services-main-div">
                                        <img src="{{ asset('/assets/images/services/office_assistant.png') }}" alt="">
                                        <div class="services-single-items-content p-3">
                                            <p>{{ __('Office Assistant') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Services items -->
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 pt-4">
                            <a class="link-text" href="{{ route('housemaid', app()->getLocale()) }}">
                                <div class="single-service-items text-center">
                                    <div class="services-main-div">
                                        <img src="{{ asset('/assets/images/services/maid.png') }}" alt="">
                                        <div class="services-single-items-content p-3">
                                            <p>{{ __('House Maid') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Services items -->
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 pt-4">
                            <a class="link-text" href="{{ route('beautician', app()->getLocale()) }}">
                                <div class="single-service-items text-center">
                                    <div class="services-main-div">
                                        <img src="{{ asset('/assets/images/services/beautician.png') }}" alt="">
                                        <div class="services-single-items-content p-3">
                                            <p>{{ __('Beautician') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Services items -->
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 pt-4">
                            <a class="link-text" href="{{ route('tailor', app()->getLocale()) }}">
                                <div class="single-service-items text-center">
                                    <div class="services-main-div">
                                        <img src="{{ asset('/assets/images/services/tailor.png') }}" alt="">
                                        <div class="services-single-items-content p-3">
                                            <p>{{ __('Tailor') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Services items -->
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 pt-4">
                            <a class="link-text" href="{{ route('officemaid', app()->getLocale()) }}">
                                <div class="single-service-items text-center">
                                    <div class="services-main-div">
                                        <img src="{{ asset('/assets/images/services/office_maid.png') }}" alt="">
                                        <div class="services-single-items-content p-3">
                                            <p>{{ __('Office Maid') }}</p>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <!-- Services items -->
                        <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 pt-4">
                            <a class="link-text" href="{{ route('rapidservice', app()->getLocale()) }}">
                                <div class="single-service-items text-center">

                                    <div class="services-main-div">
                                        <div class="medal">
                                            <img src="{{ asset('/assets/images/others/medal.png') }}" alt="">
                                        </div>
                                        <img src="{{ asset('/assets/images/services/rapid_service.png') }}" alt="">
                                        <div class="services-single-items-content p-3">
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
    </section>

    <!-- </ 04 Services-Ends > -->




    <!-- < 06 Our-Policies-Started > -->
    <section id="policies-sec">
        <div class="our-policies">
            <div class="container">
                <h2 class="text-center default-color default-weight p-5">{{ __('Our Policies & Conditions') }}<h2>
                        <div class="term-condition-list">
                            <ul class="term-container">
                                <li class="pt-2">
                                    <p>{{ __('1.    “Poricharika” is a virtual platform that maintains respective rules and laws of “The Bangladesh Labor Act-2006” and “Grihokormi Shurokkhabo o Kollaian Nitimala 2015” to provide contractual housemaid and related services.') }}
                                    </p>
                                </li>
                                <li class="pt-2">
                                    <p>{{ __("2.    “Poricharika” provides on demand service staff and We clarify the fact that this platform doesn't provide profile or personal information any of the staff of “Poricharika” directly.") }}
                                    </p>
                                </li>
                                <li class="pt-2">
                                    <p>{{ __('3.    If any individual or organization wants to get the services of this platform, he/she/they have to/has to fill certain form and maintain particular procedure.') }}
                                    </p>
                                </li>
                                <li class="pt-2">
                                    <p>{{ __('4.    The authority of this platform clearly states that any kind of mental or physical abuse towards any of the recruited staff of “Poricharika” is a violation. “Poricharika” doesn’t promote or inspire any of this activity. Albeit, the authority will possess the full right to take any necessary action to ensure the justice.') }}
                                    </p>
                                </li>
                                <li class="pt-2 pb-2">
                                    <p>{{ __('5.    Moreover, if any recruited staff engages himself or herself in any kind of mischief, the client will have the privilege to take necessary steps against that. It is to be understood that any kind of clients’ action against the accused will be a matter of discussion with the team “Poricharika”. “Poricharika” will work as an intermediary to neutralize any unwanted situation.') }}
                                    </p>
                                </li>
                                <li class="pt-2">
                                    <p>{{ __('6.    This social endeavor pledged to ensure social and financial security for all of the concerning parties. However, we encourage our clients and employees to settle any dispute through a cordial environment.') }}
                                    </p>
                                </li>
                                <li class="pt-2">
                                    <p>{{ __('7.    We provide service staff within three working days. We will be glad to be informed of any kind of irrelevance of our services and staffs. If there emerges any kind of dissatisfaction for the services of the staff, clients will be able to exempt him/her by paying off his/her dues.') }}
                                    </p>
                                </li>
                                <li class="pt-2">
                                    <p>{{ __('8.    “Poricharika” sternly discourages any kind of Forced labor. The service takers are being informed to remain very careful on this regard. For any work outside of the contract, the client must have a prior discussion with the service staff.') }}
                                    </p>
                                </li>
                                <li class="pt-2">
                                    <p>{{ __('9.    We need to maintain a variety of payment policies for our different kinds of services. For any form of financial dealings, things will be limited between the authority and the services takers.') }}
                                    </p>
                                </li>
                                <li class="pt-2">
                                    <p>{{ __('10.    Under any circumstances and to settle any kind of dispute, We will possess full right to change, include, enhance, enlarge, include, reform, detach, any policies of this platform (without any prior notice).') }}
                                    </p>
                                </li>
                            </ul>
                        </div>
            </div>
        </div>
    </section>
    <!-- </ 06 Our-Policies-Ends > -->





    <!-- < 07 ContactUs-Started > -->

    <section id="contact-sec">
        <div class="contact-area pt-5">
            <div class="contact-started">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xd-6 col-md-12 col-lg-5 col-sm-12 pt-5">
                            <div class="contact-contents">
                                <div class="contact-upper-content">
                                    <h2>{{ __('Contact Us') }}</h2>
                                    <p>{{ __('We have a team to assist you 24/7') }}</p>
                                </div>
                                <div class="contact-down-content">
                                    <div class="row">
                                        <div class="col-xl-6 col-lg-8 col-md-6">
                                            <div class="button-border m-2">
                                                <button class="default-button trans-border">{{ __('Get Direction') }}</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-md-3">                                                                                                                                                                                                                                                                                                                                                                                                                                         </div> -->
                        <div class="col-xd-6 col-lg-7 col-md-12 col-sm-12">
                            <div class="contact-form-div">
                                <div class="form-container pt-5 pb-5">
                                    <div class="form-contents">
                                        <h3>{{ __('Get in touch') }}</h3>
                                        <p>{{ __('Have an inquiry or some feedback for us?') }}</p>
                                        <p>{{ __('Fill out the form below to contact our team.') }}</p>
                                    </div>
                                    {{-- @if (Session::has('message_sent'))

                                        <div class="alert alert-success" role="alert">
                                            {{ Session::get('message_sent') }}
                                        </div>
                                    @endif --}}
                                    <form class="form-container-inner" method="POST"
                                        action="{{ route('contact-us', app()->getLocale()) }}">
                                        @csrf

                                        <div class="form-row row d-flex">
                                            <div class="form-group col-xl-6 col-lg-12 col-md-12">
                                                <label for="inputName" class="pb-2">{{ __('Full Name') }}</label>
                                                <input type="text" name="contact_name" class="form-control" id="inputEmail4"
                                                    value="{{ old('contact_name') }}" placeholder="Full Name" required>
                                                @if ($errors->first('contact_name'))
                                                    <div class="alert-danger">{{ $errors->first('contact_name') }}
                                                    </div>
                                                @endif
                                            </div>
                                            <div class="form-group col-xl-6 col-lg-12 col-md-12">
                                                <label for="phone" class="pb-2">{{ __('Contact Number') }}</label>
                                                <div class="form-row row">
                                                    <input type="text" class="form-control" id="country_code" value="+88" readonly>

                                                    <input type="tel" name="contact_phone" class="form-control" id="phone"
                                                        value="{{ old('contact_phone') }}" placeholder="Contact Number"
                                                        pattern="[0]{1}[1]{1}[3-9]{1}[0-9]{8}" required>
                                                    @if ($errors->first('contact_phone'))
                                                        <div class="alert-danger">
                                                            {{ $errors->first('contact_phone') }}</div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputEmail4" class="pb-2">{{ __('Email') }}</label>
                                            <input type="email" name="contact_email" class="form-control" id="inputEmail4"
                                                value=" {{ old('contact_email') }}" placeholder="Email" required>
                                            @if ($errors->first('contact_email'))
                                                <div class="alert-danger">{{ $errors->first('contact_email') }}</div>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <label for="exampleFormControlTextarea1"
                                                class="pb-2">{{ __('Message') }}</label>
                                            <textarea class="form-control" name="contact_message"
                                                id="exampleFormControlTextarea1" placeholder="Write Something" rows="3"
                                                required> {{ old('contact_message') }}</textarea>
                                            @if ($errors->first('contact_message'))
                                                <div class="alert-danger">{{ $errors->first('contact_message') }}
                                                </div>
                                            @endif

                                        </div>
                                        <div class="row">
                                            <div class="col-xl-5 col-lg-6 col-md-6">
                                                <div class="form-button pt-3">
                                                    <button type="submit" class="default-button m-2">
                                                        {{ __('Get in Touch') }}
                                                    </button>
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



    <!-- </ 07 ContactUs-Ends > -->

@endsection
