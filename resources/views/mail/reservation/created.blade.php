<x-mail::message>
# {{$data['username']}}, a sua reserva foi criada com sucesso!

Para visualizar a reserva queira entrar na nossa plataforma através do endereço: {{app.url}}!

Os dados de login foram-lhe enviadas pra o email: {{$data['email']}}

<x-mail::button :url="{{app.url}}">
Ir para plataforma
</x-mail::button>

Gratos pela preferência,<br>
{{ config('app.name') }}
</x-mail::message>
