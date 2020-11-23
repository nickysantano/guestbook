@component('mail::message')
# Activate

Activate your Account, just click on the button down below! :D

@component('mail::button', ['url' => route('activate', ['token' => $user->activation_token, 'email' => $user->email])])
Verify Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
