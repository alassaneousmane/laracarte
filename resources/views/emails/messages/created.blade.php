@component('mail::message')
#&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hey Admin,

- {{ $msg->name }}
- {{ $msg->email }}

@component('mail::panel')
- {{ $msg->message }}
@endcomponent



Thanks,<br>
{{ config('app.name') }}
@endcomponent
