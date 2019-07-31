@component('mail::message')

<h3>Information</h3>
<br>
<strong>Name:</strong> {{ $data['name'] }}
<br>
<strong>Birthdate:</strong> {{ $data['birthdate'] }}
<br>
<strong>Hourly Rate:</strong> {{ $data['rate'] }}
<br>
<strong>Phone Number:</strong> {{ $data['phone'] }}
<br>
<strong>E-mail Address:</strong> {{ $data['email'] }}

<h3>Availability</h3>

<strong>Sunday Start:</strong> {{ $data['sundaystart'] }}
<br>
<strong>Sunday Start:</strong> {{ $data['sundayend'] }}
<br>
<strong>Monday Start:</strong> {{ $data['mondaystart'] }}
<br>
<strong>Monday End:</strong> {{ $data['mondayend'] }}
<br>
<strong>Tuesday Start:</strong> {{ $data['tuesdaystart'] }}
<br>
<strong>Tuesday End:</strong> {{ $data['tuesdayend'] }}
<br>
<strong>Wednesday Start:</strong> {{ $data['wednesdaystart'] }}
<br>
<strong>Wednesday End:</strong> {{ $data['wednesdayend'] }}
<br>
<strong>Thursday Start:</strong> {{ $data['thursdaystart'] }}
<br>
<strong>Thursday End:</strong> {{ $data['thursdayend'] }}
<br>
<strong>Friday Start:</strong> {{ $data['fridaystart'] }}
<br>
<strong>Friday End:</strong> {{ $data['fridayend'] }}
<br>
<strong>Saturday Start:</strong> {{ $data['saturdaystart'] }}
<br>
<strong>Saturday End:</strong> {{ $data['saturdayend'] }}


@endcomponent
