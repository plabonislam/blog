@component('mail::message')
# Introduction

welcome dude..cool.....

@component('mail::button', ['url' => ''])
Button Text
@endcomponent




@component('mail::panel', ['url' => ''])
loram ipsom test
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
