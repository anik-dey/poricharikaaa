@extends('layouts.app')

@section('title')
    Poricharika.com | Baby Care
@endsection


@section('content')

    <section class="top-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
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
                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-7">
                    <div class="top-text">
                        <p>{{ __("Childhood is a very crucial time for all. During this time, a baby needs much more care and affection to make sure that there is no deficiency in its mental amplification. So, we have brought well-trained and experienced caretakers so that mothers, especially the corporate mothers don't get tensed about their children's growth." ) }}</p>
                        <p>{{ __("PORICHARIKA vows to take care of your child with upmost devotion and reliance.") }}</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">

                </div>
                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-7">
                    <div class="row">
                        <div class="col-xl-4 col-lg-4 col-mid-4 col-sm-12">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                    <div class="serv-img">
                                        <img src="{{ asset('/assets/images/served/served.png') }}" alt="">
                                    </div>
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                                    <div class="serv-text">
                                        <h2>{{ __('60+') }}</h2>
                                        <p>{{ __('Experienced and Skilled House Maids') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-mid-4 col-sm-12">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                    <img src="{{ asset('/assets/images/served/maids.png') }}" alt="">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                                    <div class="serv-text">
                                        <h2>{{ __('100+') }}</h2>
                                        <p>{{ __('Services Served') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-mid-4 col-sm-12">
                            <div class="row">
                                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12">
                                    <img src="{{ asset('/assets/images/served/fast.png') }}" alt="">
                                </div>
                                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                                    <div class="serv-text">
                                        @php

                                            if (app()->getLocale() == 'en') {
                                                $num = '24';
                                            } else {
                                                $num = '২৪';
                                            }
                                        @endphp
                                        <h2>{{ __($num) }}</h2>
                                        <p>{{ __('Hours Service') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Review Section Start --}}

    <section class="review-sec">
        <div class="container">
            <h4 class="sec-head">{{ __('Client Reviews') }} <i class="fas fa-chevron-down"></i></h4>
            <div class="carousel" data-flickity='{ "wrapAround": true, "autoPlay": true }'>
                <div class="carousel-cell">
                    <div class="single-review">
                        <div class="row">
                            <div class="col-6">
                                <div class="client-text">
                                    <h3>{{ __('Mrs. Jahanara') }}</h3>
                                    <p>{{ __('Banker, Gulshan') }}</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="client-img">
                                    <img src="{{ asset('/assets/images/clients/jahanara.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <p class="text-right">
                                    <i class="fas fa-quote-left pink-quote"></i>
                                </p>
                            </div>
                            <div class="col-11">
                                <div class="review-text">
                                    <p>{{ __("একজন চাকুরীজীবী মা হিসেবে চাকুরি এবং সংসার দুদিক সামলাতে
                                        যখন, আমার নাভিঃশ্বাস অবস্থা তখনই খোঁজ পাই পরিচারিকার, এখন
                                        আর আগের মতো আমাকে বাচ্চার যত্ন নিয়ে ভাবতে হয় না।
                                        ধন্যবাদ পরিচারিকা এবং এর সকল সদস্যকে।") }} <i class="fas fa-quote-right pink-quote"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="single-review">
                        <div class="row">
                            <div class="col-6">
                                <div class="client-text">
                                    <h3>{{ __('Mrs. Jahanara') }}</h3>
                                    <p>{{ __('Banker, Gulshan') }}</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="client-img">
                                    <img src="{{ asset('/assets/images/clients/jahanara.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <p class="text-right">
                                    <i class="fas fa-quote-left pink-quote"></i>
                                </p>
                            </div>
                            <div class="col-11">
                                <div class="review-text">
                                    <p>একজন চাকুরীজীবী মা হিসেবে চাকুরি এবং সংসার দুদিক সামলাতে
                                        যখন, আমার নাভিঃশ্বাস অবস্থা তখনই খোঁজ পাই পরিচারিকার, এখন
                                        আর আগের মতো আমাকে বাচ্চার যত্ন নিয়ে ভাবতে হয় না।
                                        ধন্যবাদ পরিচারিকা এবং এর সকল সদস্যকে। <i class="fas fa-quote-right pink-quote"></i>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-cell">
                    <div class="single-review">
                        <div class="row">
                            <div class="col-6">
                                <div class="client-text">
                                    <h3>{{ __('Dr. Tania Rahman') }}</h3>
                                    <p>{{ __('Civil Sergeon, Dhanmondi') }}</p>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="client-img">
                                    <img src="{{ asset('/assets/images/clients/tania.jpg') }}" alt="">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-1">
                                <p class="text-right">
                                    <i class="fas fa-quote-left pink-quote"></i>
                                </p>
                            </div>
                            <div class="col-11">
                                <div class="review-text">

                                    <p>একজন চাকুরীজীবী মা হিসেবে চাকুরি এবং সংসার দুদিক সামলাতে
                                        যখন, আমার নাভিঃশ্বাস অবস্থা তখনই খোঁজ পাই পরিচারিকার, এখন
                                        আর আগের মতো আমাকে বাচ্চার যত্ন নিয়ে ভাবতে হয় না।
                                        ধন্যবাদ পরিচারিকা এবং এর সকল সদস্যকে। <i class="fas fa-quote-right pink-quote"></i>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    {{-- Review Section End --}}

    {{-- Price Table Starts --}}

    <section class="price-box">
        <div class="container">
            <h4 class="sec-head">{{ __('Salary Structure') }} <i class="fas fa-chevron-down"></i></h4>
            <div class="price-head">
                <div class="row">
                    <div class="col-4">
                        <div class="toggle-salary">
                            <div class="toggle-daily">
                                <p>{{ __('Daily') }}</p>
                            </div>
                            <div class="toggle-button">
                                <label class="switch">
                                    <input type="checkbox" name="salary-type" id="checkbox" onclick="check()">
                                    <span class="slider round"></span>
                                </label>
                            </div>
                            <div class="toggle-monthly">
                                <p>{{ __('Monthly') }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="w9">
                            <div class="row">
                                <div class="col-4">
                                    <div class="price-head-text">
                                        <p>{{ __('Smart Package') }}</p>
                                        <h4 class="text1" id="text1">{{ __('60 TK') }}</h4>
                                        <h4 class="text2">{{ __('300 TK') }}</h4>
                                    </div>
                                </div>
                                <div class="col-4 p-0">
                                    <div class="price-active price-head-text">
                                        <p>{{ __('Popular Package') }}</p>
                                        <h4 class="text1">{{ __('80 TK') }}</h4>
                                        <h4 class="text2">{{ __('450 TK') }}</h4>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="price-head-text">
                                        <p>{{ __('Premium Package') }}</p>
                                        <h4 class="text1">{{ __('100 TK') }}</h4>
                                        <h4 class="text2">{{ __('650 TK') }}</h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="price-table">
                <div class="row">
                    <div class="col-4">
                        <div class="task-list">
                            <ul>
                                <li>{{ __('Skilled in Child Care') }}</li>
                                <li>
                                    <hr>
                                </li>
                                <li>{{ __('18 - 25 years of Age') }}</li>
                                <li>
                                    <hr>
                                </li>
                                <li>{{ __('10 - 15 years Experienced') }} </li>
                                <li>
                                    <hr>
                                </li>
                                <li>{{ __('Class 8 - SSC Passed') }}</li>
                                <li>
                                    <hr>
                                </li>
                                <li>{{ __('Pre-schooling Care') }}</li>
                                <li>
                                    <hr>
                                </li>
                                <li>{{ __('Extracurricular Activities Care') }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="prices3">
                            <div class="row">
                                <div class="col-4">
                                    <div class="checks task-list">
                                        <ul>
                                            <li><i class="fas fa-check-circle"></i></li>
                                            <li>
                                                <hr>
                                            </li>
                                            <li><i class="fas fa-check-circle"></i></li>
                                            <li>
                                                <hr>
                                            </li>
                                            <li><i class="fas fa-check-circle"></i></li>
                                            <li>
                                                <hr>
                                            </li>
                                            <li><i class="fas fa-times-circle"></i></li>
                                            <li>
                                                <hr>
                                            </li>
                                            <li><i class="fas fa-times-circle"></i></li>
                                            <li>
                                                <hr>
                                            </li>
                                            <li><i class="fas fa-times-circle"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-4 p-0">
                                    <div class="active-check checks task-list">
                                        <ul>
                                            <li><i class="fas fa-check-circle"></i></li>
                                            <li>
                                                <hr>
                                            </li>
                                            <li><i class="fas fa-check-circle"></i></li>
                                            <li>
                                                <hr>
                                            </li>
                                            <li><i class="fas fa-check-circle"></i></li>
                                            <li>
                                                <hr>
                                            </li>
                                            <li><i class="fas fa-check-circle"></i></li>
                                            <li>
                                                <hr>
                                            </li>
                                            <li><i class="fas fa-times-circle"></i></li>
                                            <li>
                                                <hr>
                                            </li>
                                            <li><i class="fas fa-times-circle"></i></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-4">
                                    <div class="checks task-list">
                                        <ul>
                                            <li><i class="fas fa-check-circle"></i></li>
                                            <li>
                                                <hr>
                                            </li>
                                            <li><i class="fas fa-check-circle"></i></li>
                                            <li>
                                                <hr>
                                            </li>
                                            <li><i class="fas fa-check-circle"></i></li>
                                            <li>
                                                <hr>
                                            </li>
                                            <li><i class="fas fa-check-circle"></i></li>
                                            <li>
                                                <hr>
                                            </li>
                                            <li><i class="fas fa-check-circle"></i></li>
                                            <li>
                                                <hr>
                                            </li>
                                            <li><i class="fas fa-check-circle"></i></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="btn-div btn-ex">
                <a href="{{ route('babycareform', app()->getLocale()) }}">
                    <div class="book-btn2">
                        <p>{{ __('Book Now !') }}</p>
                    </div>
                </a>
            </div>
        </div>
    </section>

    {{-- Price Table Ends --}}

    <section class="notes-sec">
        <div class="container">
            <div class="notes-div">
                <p>
                    <i class="fas fa-star"></i>
                    {{ __('Salary is fixed at 8 hours per day and 25 days per month, except that the salary may change.') }}
                    <br>

                    <i class="fas fa-star"></i>
                    {{ __('All packages in our pay structure apply to full time childcare providers.') }}
                    <br>

                    <i class="fas fa-star"></i>
                    {{ __('Part-time (per hour) on the staff salary structure is negotiable subject to change.') }}
                    <br>

                </p>
            </div>
        </div>
    </section>

@endsection
