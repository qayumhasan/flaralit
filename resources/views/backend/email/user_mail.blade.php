@component('mail::message')
{!! $template['email_body'] !!}

Thanks,<br>
{{ config('app.name') }}
@endcomponent
