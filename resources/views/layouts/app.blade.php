<!DOCTYPE html>
<html lang="en" class="h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <title>{{$title}}{{config('app.name')}}</title>




    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Maven+Pro&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Jockey+One&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/css/app.css')


    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body class="bg-[radial-gradient(ellipse_at_bottom,_var(--tw-gradient-stops))] from-sky-400 to-blue-800 bg-no-repeat bg-cover m-0 p-0 w-full h-full font-maven">
    <x-nav/>
    {{$slot}}
</body>
</html>