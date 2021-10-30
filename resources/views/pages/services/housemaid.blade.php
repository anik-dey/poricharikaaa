@extends('layouts.app')

@section('title')
    Poricharika.com | House Maid
@endsection


@section('content')

    <section class="top-sec">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-4 col-sm-5">
                    <a class="link-text" href="#">
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
                <div class="col-xl-9 col-lg-9 col-md-8 col-sm-7">
                    <div class="top-text">
                        <p>{{ __( 'The women of the house often have to struggle to cope with hundreds of household chores. Many times, they do not even have time to give children or others in the house; and those who are a working woman, there is no question. So, to reduce the pressure on women and save their time, we have brought ‘housemaid’ service. We will deliver a reliable helper to your home, ensuring all kinds of protection. The contract work is of course be completed and you will get the golden opportunity to the necessary work be done with negotiation.' ) }}</p>
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
                                    <h3>{{ ('Dr. Tania Rahman') }}n</h3>
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

    <section class="price-box">
        <div class="container">
            <h4 class="sec-head">{{ __('Salary Structure') }} <i class="fas fa-chevron-down"></i></h4>
            <div class="price-table">
                <div class="row">
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="task-list">
                            <ul>
                                <li>{{ __('Clothes Washing') }}</li>
                                <li>
                                    <hr>
                                </li>
                                <li>{{ __('Dish Washing') }}</li>
                                <li>
                                    <hr>
                                </li>
                                <li>{{ __('Floor & Furnitures Cleaning') }} </li>
                                <li>
                                    <hr>
                                </li>
                                <li>{{ __('Vegetables/Fish-Meat Cutting') }}</li>
                                <li>
                                    <hr>
                                </li>
                                <li>{{ __('Cooking') }}</li>
                                <li>
                                    <hr>
                                </li>
                                <li>{{ __('Toilet Cleaning') }}</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12">
                        <div class="single-price">
                            <div class="min-price">
                                <div class="price-text">
                                    <p>{{ __('Starts From') }}<br>
                                        @php

                                            if (app()->getLocale() == 'en') {
                                                $num = '399';
                                            } else {
                                                $num = '৩৯৯';
                                            }
                                        @endphp
                                        <span>{{ __($num) }} </span> {{ __('Taka') }}
                                    </p>
                                    <h2>{{ __('Per Month') }} ...</h2>
                                </div>
                            </div>
                            <div class="btn-div">
                                <a href="{{ route('housemaidform', app()->getLocale()) }}">
                                    <div class="book-btn">
                                        <p>{{ __('Book Now !') }}</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

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
