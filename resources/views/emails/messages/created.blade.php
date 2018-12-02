@component('mail::message')
#&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hey Admin,

- {{ $name }}
- {{ $email }}

@component('mail::panel')
- {{ $msg }}
@endcomponent



Thanks,<br>
{{ config('app.name') }}
@endcomponent
