@component('mail::message')

<h3>New Message from {{$contact_form_data['email']}}<h3>

<p>Name: {{$contact_form_data['name']}}</p>

<p>Phone: {{$contact_form_data['phone']}}</p>

<p>Email: {{$contact_form_data['email']}}</p>

<p>Message: {{$contact_form_data['message']}}</p>

@endcomponent
