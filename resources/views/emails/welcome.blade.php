@component('mail::message')
# Welcome to my lab of laravel

This is just a learning lab

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
