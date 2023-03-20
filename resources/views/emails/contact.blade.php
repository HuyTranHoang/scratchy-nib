<x-mail::message>
# You have a new mail from contact page

- From: {{$contactInfo['email']}}
- Name: {{$contactInfo['name']}}
- Subject: {{$contactInfo['subject']}}

Message: {{$contactInfo['message']}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

