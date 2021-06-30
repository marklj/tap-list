<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
</head>
<body class="bg-gray-800 text-blue-100 subpixel-antialiased">
    <h1 class="text-2xl font-bold mx-5 my-4">{{ env('APP_NAME') }}</h1>

    {{ $slot }}

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
