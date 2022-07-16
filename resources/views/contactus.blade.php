<x-app-layout>

    <title>Contact Us</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Contact Us') }}
        </h2>
    </x-slot>


    <header class="bg-white bg-[url('https://images.unsplash.com/photo-1617653695386-1d78957d33f8?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80')]">


        <div class="container px-6 py-16 mx-auto">
            <div class="items-center lg:flex">
                <div class="w-full lg:w-1/2">
                    <div class="lg:max-w-lg ml-10">
                        <h1 class="text-5xl font-semibold text-gray-800 dark:text-white md:text-5xl lg:text-5xl">
                            Contact Us </h1>


                        <p class="text-3xl mt-5 text-white">You may reach us through the following:</p><br>
                        <div class="info ml-5">
                            <p class="text-white">
                                Phone Number: <span class="text-cyan-800">+639 177013</span><br>
                                Email Address: <span class="text-cyan-800">carsforhire@gmail.com</span> <br>
                                Facebook Page: <a href="https://www.facebook.com/"><span class="text-cyan-800">Our
                                        Facebook Page Link.</span></a> <br>
                            </p>
                        </div>
                        <button class="mt-5 w-24 px-4 py-2 text-sm font-medium tracking-wide text-white capitalize transition-colors duration-200 transform bg-blue-500 rounded-lg lg:w-auto lg:mx-4 hover:bg-blue-400 focus:outline-none focus:bg-blue-400">
                            Thanks!
                        </button>

                    </div>

                </div>

                <div class="flex items-center justify-center w-full mt-6 lg:mt-0 lg:w-1/2">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12617.498102353007!2d120.9839874311304!3d14.59204986925457!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397c9f618e826d3%3A0xeb7fcfb4bf255def!2sTechnological%20Institute%20of%20the%20Philippines!5e0!3m2!1sen!2sph!4v1657036472128!5m2!1sen!2sph" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </header>
</x-app-layout>