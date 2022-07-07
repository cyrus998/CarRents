<script src="https://cdn.tailwindcss.com"></script>
<link rel="stylesheet" href="https://unpkg.com/flowbite@1.4.7/dist/flowbite.min.css" />
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <body class="bg-gray-800">
        

    <div class="container mt-3">
        <div class="sm:items-center sm:flex">
            <div class="text-center sm:text-left pb-4">
                <h1 class="text-2xl ml-11 font-bold text-gray-900 sm:text-2xl">
                    Welcome to the Admin Dashboard, <span class="text-cyan-700 font-bold">{{ auth()->user()->name }} </span> !
                </h1>
            </div>
        </div>
    </div>

    <section class="text-white bg-[url('https://images.unsplash.com/photo-1617653695386-1d78957d33f8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80')]">
        <div class="max-w-screen-xl px-4 py-16 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-lg mx-auto text-center">
                <h2 class="text-3xl font-bold sm:text-4xl">You are an Admin.</h2>

                <p class="mt-4 text-gray-300">
                    Here are some tools that you can use:
                </p>
            </div>

            <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2 lg:grid-cols-3">
                <a class="block p-8 transition border border-gray-800 shadow-xl rounded-xl hover:shadow-pink-500/10 hover:border-pink-500/10" href="">
                    <img style="width:42" src="https://media.discordapp.net/attachments/971130306751000636/981174821494849556/unknown.png" alt="">

                    <h3 class="mt-4 text-4xl font-bold text-white">Manage Profiles.</h3>

                    <p class="mt-1 text-sm text-gray-300">
                        Manage your customer Profiles.
                    </p>
                </a>


                <a class="block p-8 transition border border-gray-800 shadow-xl rounded-xl hover:shadow-pink-500/10 hover:border-pink-500/10" href="">
                    <img style="width:42" src="https://media.discordapp.net/attachments/971130306751000636/981174821494849556/unknown.png" alt="">

                    <h3 class="mt-4 text-4xl font-bold text-white">Manage Orders</h3>

                    <p class="mt-1 text-sm text-gray-300">
                        Change your customer's status.
                    </p>
                </a>

                <a class="block p-8 transition border border-gray-800 shadow-xl rounded-xl hover:shadow-pink-500/10 hover:border-pink-500/10" href="">
                    <img style="width:42" src="https://media.discordapp.net/attachments/971130306751000636/981174821494849556/unknown.png" alt="">

                    <h3 class="mt-4 text-4xl font-bold text-white">Track Rents</h3>

                    <p class="mt-1 text-sm text-gray-300">
                        Track All Rentals.
                    </p>
                </a>

            </div>
    </section>

</body>

</x-app-layout>
