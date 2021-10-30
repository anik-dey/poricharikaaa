{{-- @component('mail::message')
# Introduction

The body of your message.

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent --}}
{{-- @component('mail::message')
    # Thank You For Your Message
    <strong>Name</strong>{{ $data['name'] }}
    <strong>Phone</strong>{{ $data['phone'] }}
    <strong>Email</strong>{{ $data['email'] }}
    <strong>Message</strong>{{ $data['message'] }}
@endcomponent --}}

@component('mail::message')
    # Thank You For Your Message
    Name : {{ $data['contact_name'] }}
    Phone : {{ $data['contact_phone'] }}
    {{ $data['contact_email'] }}
    Message :{{ $data['contact_message'] }}
@endcomponent
