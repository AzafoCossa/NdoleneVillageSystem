<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta
            name="keywords"
            content="NdoleneVillage, Ndolene Village, Resort Chidenguele, Hotel Chidenguele, Passar a noite, Estância turística, Turismo em Moçambique, Reservas de quartos, Pedidos de refeições, Hospedagem, Viagem, Lazer, Natureza, Descanso, Conforto, Experiências únicas"
        />

        {{
            $metaseo ?? ""
        }}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>{{ $title ?? "Ndolene Village | Home" }}</title>
        <script
            async
            src="https://www.googletagmanager.com/gtag/js?id=G-VWT4W2Q6N0"
        ></script>
        <script src="https://www.paypal.com/sdk/js?components=card-fields&client-id={{
                env('PAYPAL_CLIENT_ID')
            }}"></script>
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
