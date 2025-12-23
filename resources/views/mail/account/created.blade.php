<x-mail::message>
# {{ $data['username'] }}, sua conta foi criada!

Gostariamos de dar-lhe boas vindas à nossa plataforma.
Abaixo estão os detalhes da sua conta:
- <strong>Email:</strong> {{ $data['email'] }}
- <strong>Senha:</strong> {{ $data['password'] }}

<x-mail::button :url="route('login')">
Acessar Conta
</x-mail::button>

Com os melhores cumprimetos,<br>
{{ config('app.name') }}
</x-mail::message>
