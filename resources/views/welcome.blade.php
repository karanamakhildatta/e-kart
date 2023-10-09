<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{config('app.name')}}</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link rel="stylesheet" href="{{asset('css/index.css')}}">
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
        <div class="flex items-center justify-center">
            <div class="banner-carousel px-2 mt-4">
                <a href="#">
                    <img src="{{asset('images/banner1.jpg')}}" alt="banner1.jpg">
                </a>
                <a href="#">
                    <img  src="{{asset('images/banner2.jpg')}}" alt="banner2.jpg">
                </a>
                <a href="#">
                    <img  src="{{asset('images/banner2.jpg')}}" alt="banner2.jpg">
                </a>
            </div>
        </div>
        
        <section class="px-20 mt-6">
            <h3 clss='text-gray-800 font-medium'>Flash Sale</h3>
        </section>
        <script src="{{asset('js/jquery.js')}}"></script>
        <script>
            let elements = $('.banner-carousel a').css('display', 'none');
            elements.eq(0).css('display', 'block');
            let i = 0;
            let time = 2000;
            function changeImage() {
                elements.eq(i).css('display', 'none');
                i = (i + 1) % elements.length;
                elements.eq(i).css('display', 'block');
            }
            setInterval(changeImage, time);
        </script> 
    </body>
</html>
