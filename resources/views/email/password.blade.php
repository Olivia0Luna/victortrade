@component('mail::message')
Hi! {{$user['name']}}

A password reset process has just taken place on your account. If that was not you, Please contact our support team via <a href="mailto:support@victortrade.com">Support@victortrade.com</a><br><br>

Your security is our priority.

Thanks,<br>
{{ config('app.name') }}
@endcomponent
