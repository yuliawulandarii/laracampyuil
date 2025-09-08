@component('mail::message')
# Your Payment Has Been Confirmed

Hi {{$checkout->User->name}},
<br>
Thank you! Your payment has been confirmed.
<br>
You can now enjoy full access to the <strong>{{$checkout->Camp->title}} Camp</strong>.

@component('mail::button', ['url' => route('user.dashboard')])
My Dashboard
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
