@component('mail::message')
# Thanks for booking {{ $data['name'] }}

<br>
Info about your booking <br>
City : {{ $data['city'] }} <br>
Room's : {{ $data['rooms'] }} <br> 
Check In : {{ $data['checkIn'] }} <br>
Check Out : {{ $data['checkOut'] }} <br>
<br>
<br>
<br><br>
<br><br>
 Please respond if you would want to make any changes to your reservation.


@component('mail::button', ['url' => '/'])
Retun to the page
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
