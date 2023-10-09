<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        @vite('resources/css/app.css')

    </head>
    <body class="bg-[#FBFBFB]">
        <div class="flex justify-between items-center px-20 mt-5 bg-white shadow py-2">
            <img src="{{asset('images/logo.png')}}" class="w-[70px] h-[75px]" alt="E-kart Logo">
            <div class="text-2xl relative" >
                <i class='bx bx-heart'></i>
                <i class='bx bx-user' ></i>
                <i class='bx bx-cart' ></i>
                <span class="bg-indigo-600 rounded-full absolute top-0 -right-2 w-5 h-4 text-center text-xs text-white">9+</span>
            </div>
        </div>
    </body>
</html>
