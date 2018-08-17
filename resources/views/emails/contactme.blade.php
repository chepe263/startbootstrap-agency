@component('mail::message')

# Nuevo mensaje de contacto

{{ $name }} <br />
{{ $phone }}<br />
{{ $email }}<br />


@component('mail::panel')
{{ $message }}
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
