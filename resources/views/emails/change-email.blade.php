@component('mail::message')

An email reset was requested from this account. Please follow the below link if you initiated the request to complete the email reset or kindly ignore this email if it wasn't or is an error.

Do not send this link to anyone.

@component('mail::button', ['url' => $link])
Change Email Now
@endcomponent

NB: If you've problem changing your email copy this link into your browser's url bar on your device: {{$link}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
