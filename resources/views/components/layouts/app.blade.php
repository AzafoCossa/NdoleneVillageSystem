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
            $metaseo ??
                "Descubra a Ndolene Village, a estância turística ideal para quem procura conforto, natureza e experiências inesquecíveis. Reserve quartos e refeições de forma simples e prática!"
        }}
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>{{ $title ?? "Ndolene Village | Home" }}</title>
        <script src="https://www.paypal.com/sdk/js?components=card-fields&client-id={{
                env('PAYPAL_CLIENT_ID')
            }}"></script>
        @if(! app()->isLocal())
        <!-- Google Tag Manager -->
        <script>
            (function (w, d, s, l, i) {
                w[l] = w[l] || [];
                w[l].push({
                    "gtm.start": new Date().getTime(),
                    event: "gtm.js",
                });
                var f = d.getElementsByTagName(s)[0],
                    j = d.createElement(s),
                    dl = l != "dataLayer" ? "&l=" + l : "";
                j.async = true;
                j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
                f.parentNode.insertBefore(j, f);
            })(window, document, "script", "dataLayer", "GTM-PBVK42LN");
        </script>
        <!-- End Google Tag Manager -->
        @endif
    </head>
    <body>
        @if(! app()->isLocal())
        <!-- Google Tag Manager (noscript) -->
        <noscript
            ><iframe
                src="https://www.googletagmanager.com/ns.html?id=GTM-PBVK42LN"
                height="0"
                width="0"
                style="display: none; visibility: hidden"
            ></iframe
        ></noscript>
        <!-- End Google Tag Manager (noscript) -->
        @endif
        {{ $slot }}
    </body>
</html>
