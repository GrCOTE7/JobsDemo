<x-mail::message>
# Introduction

Bienvenue dans votre espace Membre.

<x-mail::button :url="'/localhost:8000'">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
