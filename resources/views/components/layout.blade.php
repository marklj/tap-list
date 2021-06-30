<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
</head>
<body class="bg-gray-800 text-blue-100 font-sans subpixel-antialiased">
    <h1 class="text-3xl font-bold mx-5 my-10 text-center mt-16">{{ env('APP_NAME') }}</h1>

    {{ $slot }}

    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
