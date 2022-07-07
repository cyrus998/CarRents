<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>View All Cars</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <x-app-layout>
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                {{ __('Car Selection') }}
            </h2>
        </x-slot>


        <p class="text-3xl text-center pt-5 text-black">Some of our Featured Cars</p>
        <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-3 lg:grid-cols-4">
            <div class="card1 px-4">
                <a href="" class="block p-4 rounded-lg shadow-sm shadow-indigo-100">
                    <img alt="1"
                        src="https://imgcdn.zigwheels.ph/medium/gallery/exterior/30/1943/toyota-vios-front-angle-low-view-663135.jpg"
                        class="object-cover w-full h-64 rounded-md" />
                    <div class="mt-2 px-5 py-2">
                        <dl>
                            <div>
                                <dd class="text-xl"> Toyota Vios </dd>
                            </div>
                            <div>
                                <dd class="text-xxl text-gray-500"> Starts @ 1,200 / Day </dd>
                            </div>
                        </dl>
                        <dl class="flex items-center mt-2 space-x-8 text-xs">
                            <div class="sm:inline-flex sm:items-center sm:shrink-0">
                                <img class="h-5"
                                    src="https://cdn-icons.flaticon.com/png/512/2881/premium/2881031.png?token=exp=1657026510~hmac=f0ea2c8d0c167781cac58166ad9541b8"
                                    alt="">
                                <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                    <dt class="text-gray-500"> Transmission </dt>
                                    <dd class="font-medium"> Automatic </dd>
                                </div>
                            </div>
                            <div class="sm:inline-flex sm:items-center sm:shrink-0">
                                <img src="https://cdn-icons-png.flaticon.com/512/6331/6331941.png" class="h-5"
                                    alt="">
                                <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                    <dt class="text-gray-500"> Seats </dt>
                                    <dd class="font-medium"> 4 Seats (Max 5) </dd>
                                </div>
                            </div>
                        </dl>
                    </div>
                </a>
            </div>

            {{-- card 2 --}}

            <div class="card1 px-4">
                <a href="" class="block p-4 rounded-lg shadow-sm shadow-indigo-100">
                    <img alt="1"
                        src="https://imgcdn.zigwheels.ph/medium/gallery/exterior/30/668/toyota-rush-84722.jpg"
                        class="object-cover w-full h-64 rounded-md" />
                    <div class="mt-2 px-5 py-2">
                        <dl>
                            <div>
                                <dd class="text-xl"> Toyota Rush </dd>
                            </div>
                            <div>
                                <dd class="text-xxl text-gray-500"> Starts @ 1,400 / Day </dd>
                            </div>
                        </dl>
                        <dl class="flex items-center mt-2 space-x-8 text-xs">
                            <div class="sm:inline-flex sm:items-center sm:shrink-0">
                                <img class="h-5"
                                    src="https://cdn-icons.flaticon.com/png/512/2881/premium/2881031.png?token=exp=1657026510~hmac=f0ea2c8d0c167781cac58166ad9541b8"
                                    alt="">
                                <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                    <dt class="text-gray-500"> Transmission </dt>
                                    <dd class="font-medium"> Manual </dd>
                                </div>
                            </div>
                            <div class="sm:inline-flex sm:items-center sm:shrink-0">
                                <img src="https://cdn-icons-png.flaticon.com/512/6331/6331941.png" class="h-5"
                                    alt="">
                                <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                    <dt class="text-gray-500"> Seats </dt>
                                    <dd class="font-medium"> 4 Seats (Max 6) </dd>
                                </div>
                            </div>
                        </dl>
                    </div>
                </a>
            </div>

            {{-- card 3 --}}

            <div class="card1 px-4">
                <a href="" class="block p-4 rounded-lg shadow-sm shadow-indigo-100">
                    <img alt="1"
                        src="https://imgcdn.zigwheels.ph/medium/gallery/exterior/30/1110/toyota-fortuner-front-angle-low-view-275442.jpg"
                        class="object-cover w-full h-64 rounded-md" />
                    <div class="mt-2 px-5 py-2">
                        <dl>
                            <div>
                                <dd class="text-xl"> Toyota Fortuner </dd>
                            </div>
                            <div>
                                <dd class="text-xxl text-gray-500"> Starts @ 1,599 / Day </dd>
                            </div>
                        </dl>
                        <dl class="flex items-center mt-2 space-x-8 text-xs">
                            <div class="sm:inline-flex sm:items-center sm:shrink-0">
                                <img class="h-5"
                                    src="https://cdn-icons.flaticon.com/png/512/2881/premium/2881031.png?token=exp=1657026510~hmac=f0ea2c8d0c167781cac58166ad9541b8"
                                    alt="">
                                <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                    <dt class="text-gray-500"> Transmission </dt>
                                    <dd class="font-medium"> Automatic </dd>
                                </div>
                            </div>
                            <div class="sm:inline-flex sm:items-center sm:shrink-0">
                                <img src="https://cdn-icons-png.flaticon.com/512/6331/6331941.png" class="h-5"
                                    alt="">
                                <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                    <dt class="text-gray-500"> Seats </dt>
                                    <dd class="font-medium"> 6 Seats (Max 8) </dd>
                                </div>
                            </div>
                        </dl>
                    </div>
                </a>
            </div>

            <div class="card1 px-4">
                <a href="" class="block p-4 rounded-lg shadow-sm shadow-indigo-100">
                    <img alt="1"
                        src="https://imgcdn.zigwheels.ph/medium/gallery/exterior/30/1943/toyota-vios-front-angle-low-view-663135.jpg"
                        class="object-cover w-full h-64 rounded-md" />
                    <div class="mt-2 px-5 py-2">
                        <dl>
                            <div>
                                <dd class="text-xl"> Toyota Vios </dd>
                            </div>
                            <div>
                                <dd class="text-xxl text-gray-500"> Starts @ 1,200 / Day </dd>
                            </div>
                        </dl>
                        <dl class="flex items-center mt-2 space-x-8 text-xs">
                            <div class="sm:inline-flex sm:items-center sm:shrink-0">
                                <img class="h-5"
                                    src="https://cdn-icons.flaticon.com/png/512/2881/premium/2881031.png?token=exp=1657026510~hmac=f0ea2c8d0c167781cac58166ad9541b8"
                                    alt="">
                                <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                    <dt class="text-gray-500"> Transmission </dt>
                                    <dd class="font-medium"> Automatic </dd>
                                </div>
                            </div>
                            <div class="sm:inline-flex sm:items-center sm:shrink-0">
                                <img src="https://cdn-icons-png.flaticon.com/512/6331/6331941.png" class="h-5"
                                    alt="">
                                <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                    <dt class="text-gray-500"> Seats </dt>
                                    <dd class="font-medium"> 4 Seats (Max 5) </dd>
                                </div>
                            </div>
                        </dl>
                    </div>
                </a>
            </div>

            {{-- card 2 --}}

            <div class="card1 px-4">
                <a href="" class="block p-4 rounded-lg shadow-sm shadow-indigo-100">
                    <img alt="1"
                        src="https://imgcdn.zigwheels.ph/medium/gallery/exterior/30/668/toyota-rush-84722.jpg"
                        class="object-cover w-full h-64 rounded-md" />
                    <div class="mt-2 px-5 py-2">
                        <dl>
                            <div>
                                <dd class="text-xl"> Toyota Rush </dd>
                            </div>
                            <div>
                                <dd class="text-xxl text-gray-500"> Starts @ 1,400 / Day </dd>
                            </div>
                        </dl>
                        <dl class="flex items-center mt-2 space-x-8 text-xs">
                            <div class="sm:inline-flex sm:items-center sm:shrink-0">
                                <img class="h-5"
                                    src="https://cdn-icons.flaticon.com/png/512/2881/premium/2881031.png?token=exp=1657026510~hmac=f0ea2c8d0c167781cac58166ad9541b8"
                                    alt="">
                                <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                    <dt class="text-gray-500"> Transmission </dt>
                                    <dd class="font-medium"> Manual </dd>
                                </div>
                            </div>
                            <div class="sm:inline-flex sm:items-center sm:shrink-0">
                                <img src="https://cdn-icons-png.flaticon.com/512/6331/6331941.png" class="h-5"
                                    alt="">
                                <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                    <dt class="text-gray-500"> Seats </dt>
                                    <dd class="font-medium"> 4 Seats (Max 6) </dd>
                                </div>
                            </div>
                        </dl>
                    </div>
                </a>
            </div>

            {{-- card 3 --}}

            <div class="card1 px-4">
                <a href="" class="block p-4 rounded-lg shadow-sm shadow-indigo-100">
                    <img alt="1"
                        src="https://imgcdn.zigwheels.ph/medium/gallery/exterior/30/1110/toyota-fortuner-front-angle-low-view-275442.jpg"
                        class="object-cover w-full h-64 rounded-md" />
                    <div class="mt-2 px-5 py-2">
                        <dl>
                            <div>
                                <dd class="text-xl"> Toyota Fortuner </dd>
                            </div>
                            <div>
                                <dd class="text-xxl text-gray-500"> Starts @ 1,599 / Day </dd>
                            </div>
                        </dl>
                        <dl class="flex items-center mt-2 space-x-8 text-xs">
                            <div class="sm:inline-flex sm:items-center sm:shrink-0">
                                <img class="h-5"
                                    src="https://cdn-icons.flaticon.com/png/512/2881/premium/2881031.png?token=exp=1657026510~hmac=f0ea2c8d0c167781cac58166ad9541b8"
                                    alt="">
                                <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                    <dt class="text-gray-500"> Transmission </dt>
                                    <dd class="font-medium"> Automatic </dd>
                                </div>
                            </div>
                            <div class="sm:inline-flex sm:items-center sm:shrink-0">
                                <img src="https://cdn-icons-png.flaticon.com/512/6331/6331941.png" class="h-5"
                                    alt="">
                                <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                    <dt class="text-gray-500"> Seats </dt>
                                    <dd class="font-medium"> 6 Seats (Max 8) </dd>
                                </div>
                            </div>
                        </dl>
                    </div>
                </a>
            </div>

            <div class="card1 px-4">
                <a href="" class="block p-4 rounded-lg shadow-sm shadow-indigo-100">
                    <img alt="1"
                        src="https://imgcdn.zigwheels.ph/medium/gallery/exterior/30/1943/toyota-vios-front-angle-low-view-663135.jpg"
                        class="object-cover w-full h-64 rounded-md" />
                    <div class="mt-2 px-5 py-2">
                        <dl>
                            <div>
                                <dd class="text-xl"> Toyota Vios </dd>
                            </div>
                            <div>
                                <dd class="text-xxl text-gray-500"> Starts @ 1,200 / Day </dd>
                            </div>
                        </dl>
                        <dl class="flex items-center mt-2 space-x-8 text-xs">
                            <div class="sm:inline-flex sm:items-center sm:shrink-0">
                                <img class="h-5"
                                    src="https://cdn-icons.flaticon.com/png/512/2881/premium/2881031.png?token=exp=1657026510~hmac=f0ea2c8d0c167781cac58166ad9541b8"
                                    alt="">
                                <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                    <dt class="text-gray-500"> Transmission </dt>
                                    <dd class="font-medium"> Automatic </dd>
                                </div>
                            </div>
                            <div class="sm:inline-flex sm:items-center sm:shrink-0">
                                <img src="https://cdn-icons-png.flaticon.com/512/6331/6331941.png" class="h-5"
                                    alt="">
                                <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                    <dt class="text-gray-500"> Seats </dt>
                                    <dd class="font-medium"> 4 Seats (Max 5) </dd>
                                </div>
                            </div>
                        </dl>
                    </div>
                </a>
            </div>

            {{-- card 2 --}}

            <div class="card1 px-4">
                <a href="" class="block p-4 rounded-lg shadow-sm shadow-indigo-100">
                    <img alt="1"
                        src="https://imgcdn.zigwheels.ph/medium/gallery/exterior/30/668/toyota-rush-84722.jpg"
                        class="object-cover w-full h-64 rounded-md" />
                    <div class="mt-2 px-5 py-2">
                        <dl>
                            <div>
                                <dd class="text-xl"> Toyota Rush </dd>
                            </div>
                            <div>
                                <dd class="text-xxl text-gray-500"> Starts @ 1,400 / Day </dd>
                            </div>
                        </dl>
                        <dl class="flex items-center mt-2 space-x-8 text-xs">
                            <div class="sm:inline-flex sm:items-center sm:shrink-0">
                                <img class="h-5"
                                    src="https://cdn-icons.flaticon.com/png/512/2881/premium/2881031.png?token=exp=1657026510~hmac=f0ea2c8d0c167781cac58166ad9541b8"
                                    alt="">
                                <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                    <dt class="text-gray-500"> Transmission </dt>
                                    <dd class="font-medium"> Manual </dd>
                                </div>
                            </div>
                            <div class="sm:inline-flex sm:items-center sm:shrink-0">
                                <img src="https://cdn-icons-png.flaticon.com/512/6331/6331941.png" class="h-5"
                                    alt="">
                                <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                    <dt class="text-gray-500"> Seats </dt>
                                    <dd class="font-medium"> 4 Seats (Max 6) </dd>
                                </div>
                            </div>
                        </dl>
                    </div>
                </a>
            </div>

            {{-- card 3 --}}

            <div class="card1 px-4">
                <a href="" class="block p-4 rounded-lg shadow-sm shadow-indigo-100">
                    <img alt="1"
                        src="https://imgcdn.zigwheels.ph/medium/gallery/exterior/30/1110/toyota-fortuner-front-angle-low-view-275442.jpg"
                        class="object-cover w-full h-64 rounded-md" />
                    <div class="mt-2 px-5 py-2">
                        <dl>
                            <div>
                                <dd class="text-xl"> Toyota Fortuner </dd>
                            </div>
                            <div>
                                <dd class="text-xxl text-gray-500"> Starts @ 1,599 / Day </dd>
                            </div>
                        </dl>
                        <dl class="flex items-center mt-2 space-x-8 text-xs">
                            <div class="sm:inline-flex sm:items-center sm:shrink-0">
                                <img class="h-5"
                                    src="https://cdn-icons.flaticon.com/png/512/2881/premium/2881031.png?token=exp=1657026510~hmac=f0ea2c8d0c167781cac58166ad9541b8"
                                    alt="">
                                <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                    <dt class="text-gray-500"> Transmission </dt>
                                    <dd class="font-medium"> Automatic </dd>
                                </div>
                            </div>
                            <div class="sm:inline-flex sm:items-center sm:shrink-0">
                                <img src="https://cdn-icons-png.flaticon.com/512/6331/6331941.png" class="h-5"
                                    alt="">
                                <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                    <dt class="text-gray-500"> Seats </dt>
                                    <dd class="font-medium"> 6 Seats (Max 8) </dd>
                                </div>
                            </div>
                        </dl>
                    </div>
                </a>
            </div>
        </div>



    </x-app-layout>
</body>

</html>
