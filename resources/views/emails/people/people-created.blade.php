@component('mail::message')

# Hello {{$people->name}}

This is to inform you that your data has been captured:

Name: {{$people->name}}<br/>
Surname: {{$people->surname}}<br/>
ID Number: {{$people->id_number}}<br/>

Thanks,<br>
Team {{ config('app.name') }}
@endcomponent