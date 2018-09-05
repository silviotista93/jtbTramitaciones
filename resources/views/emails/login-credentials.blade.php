@component('mail::message')
# Tus credenciales para acceder a {{config('app.name')}}

Utiliza estas credenciales para acceder al sistema.

@component('mail::table')

    | Usuario | Contraseña |
    |:---------|:------------|
    |{{$user->email}} | {{$password}}|


@endcomponent
@component('mail::button', ['url' => route('login')])
    Login
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent