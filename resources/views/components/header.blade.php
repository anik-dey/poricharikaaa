<header>
    <!-- < 01 Navbar-Started > -->
    <div class="fixed-top">
        <nav class="navbar navbar-expand-lg navbar-light navbar-bg-color ">
            <div class="container">
                <div class="navbar-logo">
                    <a class="default-color"
                        href="{{ route('home', app()->getLocale()) }}">
                        <img src="{{ asset('assets/images/logo2.png') }}" alt="">
                    </a>
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse pt-2" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 pt-1 mb-lg-0 default-color2">
                        <li class="nav-item">
                            <a class="default-color2" aria-current="page" href="{{ route('aboutus', app()->getLocale()) }}">{{ __('About us') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="default-color2 " href="{{ route('services', app()->getLocale()) }}">{{ __('Our Services') }}</a>
                        </li>

                        <li class="nav-item">
                            <a class="default-color2  " href="{{ route('policies', app()->getLocale()) }}">{{ __('Our Policies') }}</a>
                        </li>
                        <li class="nav-item">
                            <a class="default-color2 " href="{{ route('contact', app()->getLocale()) }}">{{ __('Contract us') }}</a>
                        </li>
                    </ul>

                    <div class="d-flex justify-content-around">
                        <div class="navbar-language pt-1">
                            <a href="{{ route(Route::currentRouteName(), 'bn') }}">বাংলা</a>|
                            <a href="{{ route(Route::currentRouteName(), 'en') }}">ENG</a>
                        </div>
                        <a data-bs-toggle="modal" href="#modal">
                            <button class="default-button3" type="submit">
                                {{ __('Looking for Job?') }}
                            </button>
                        </a>
                        {{-- <div class="navbar-search-icon pt-1">
                            <a href="#"><i class="fas fa-search" id="search-btn"></i></a>
                        </div>
                        <div class="navbar-search-input">
                            <input type="text" placeholder="Search.." name="search" class="search-box">
                        </div> --}}
                    </div>

                </div>
            </div>
        </nav>
    </div>
    <!-- </ 01 Navbar-Ends > -->
</header>

{{-- <div class="modal fade" id="modal" aria-hidden="true" aria-labelledby="..." tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="container">
                <div class="modal-container">
                    SUCCEESS!! <br>
                    SUCCEESS!! <br>
                    SUCCEESS!! <br>
                </div>
            </div>
            <div class="modal-footer">
                <button class="default-button3" data-bs-dismiss="modal">OK</button>
            </div>
        </div>
    </div>
</div> --}}
