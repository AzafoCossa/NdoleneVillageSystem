<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <title>{{ $title ?? "Page Title" }}</title>

        <script src="https://www.paypal.com/sdk/js?components=card-fields&client-id={{
                env('PAYPAL_CLIENT_ID')
            }}"></script>
    </head>
    <body>
        {{ $slot }}
    </body>
</html>
