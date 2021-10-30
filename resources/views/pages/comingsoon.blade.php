@extends('layouts.soon')

@section('title')
    Poricharika.com
@endsection


@section('content')

<section>
    <div class="container">
        <h1 class="text-center">
            আমরা আসছি শীঘ্রই আপনার কাছে।<br>
            আপনার নিত্য প্রয়োজনীয় সকল সেবা নিয়ে।
        </h1>
    </div>
    <div class="back-to-home">
        <a href="{{ route('main')}}">
            <button class="db2">{{ __('Back to Home') }}</button>
        </a>
    </div>
</section>

@endsection
