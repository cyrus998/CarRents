<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Car Rental</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body>

    <section class="h-screen">

        <div class="hidden sm:block "></div>

        <div class="relative max-w-screen-xl px-4 py-32 mx-auto lg:h-screen lg:items-center lg:flex">
            <div class="max-w-xl text-center sm:text-left">
                <h1 class="text-5xl font-extrabold sm:text-8xl text-white">
                    Car Rentals
                    <strong
                        class="font-extrabold text-transparent bg-clip-text bg-gradient-to-t from-blue-200 via-cyan-400 to-blue-50 sm:block">
                        Made Accessible.
                    </strong>
                </h1>

                <p class="max-w-lg mt-4 sm:leading-relaxed sm:text-xl text-white">
                    Bringing you the best cars for rent at affortable prices! Browse our wide variety selection of cars
                    now!
                </p>

                @if (Route::has('login'))
                    <div class="flex flex-wrap gap-4 mt-8 text-center">

                        @auth
                            <a href="{{ url('/dashboard') }}"
                                class="block w-full px-12 py-3 text-sm font-medium text-white rounded shadow bg-cyan-600 sm:w-auto active:bg-gray-700 hover:bg-gray-700 focus:outline-none focus:ring">
                                Dashboard
                            </a>
                        @else
                            <a href="{{ route('login') }}"
                                class="block w-full px-12 py-3 text-sm font-medium text-white rounded shadow bg-cyan-600 sm:w-auto active:bg-gray-700 hover:bg-gray-700 focus:outline-none focus:ring">
                                Login
                            </a>
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}"
                                    class="block w-full px-12 py-3 text-sm font-medium bg-gray-900 rounded shadow text-white sm:w-auto hover:bg-gray-700 active:text-rose-500 focus:outline-none focus:ring">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
        </div>
    </section>
    <footer class="bg-gray-900">
        <div class="max-w-screen-xl px-2 py-4 mx-auto sm:px-4 lg:px-7">
            <div class="sm:flex sm:items-center sm:justify-between">
                <div class="flex justify-center text-white sm:justify-start">
                    <img src="https://media.discordapp.net/attachments/971130306751000636/990134124721340436/unknown.png"
                        class="h-8" alt="">
                    <p class="ml-3 mt-1">Car Rental Services</p>
                </div>
    
                <p class="mt-4 text-sm text-center text-gray-400 lg:text-right lg:mt-0">
                    Copyright &copy; <span> <a href="https://www.facebook.com/cyrus998/"> Cyrus Francisco </a> </span>2022.
                    All rights reserved.
                </p>
            </div>
        </div>
    </footer>
</body>



</html>

<style>
    html {
        background-image: url('https://images.unsplash.com/photo-1653227158553-ddaa680cdd65?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80');
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
