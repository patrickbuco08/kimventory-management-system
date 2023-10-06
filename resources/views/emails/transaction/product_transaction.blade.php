@component('mail::message')
# Your item was bought by {{ $buyer->name }}

{{ $buyer->name }} bought your product

@component('mail::button', ['url' => ''])
    View transaction
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
