<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
  </head>
  <body>
    <x-app-layout>
      <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
          {{ __('Dashboard') }}
        </h2>
      </x-slot>
      <div class="py-2">
        <aside class="relative overflow-hidden text-white">
          <div class="relative z-10 max-w-screen-xl px-4 py-24 mx-auto sm:px-6 lg:px-8">
            <div class="max-w-xl space-y-8 text-center sm:text-right sm:ml-auto">
              <h2 class="text-4xl font-bold sm:text-5xl"> Welcome to Car Rentals! <span class="hidden sm:block"> Best Cars At Affortable Prices! </span>
              </h2>
              <p class="hidden sm:block sm:max-w-lg sm:ml-auto sm:text-lg"> Pick from a wide range of cars, from sedans, to suvs, to compact vehicles! Prices starts at 1300 / 24 Hours. </p>
              <a class="inline-flex items-center px-6 py-3 font-medium bg-black rounded-full hover:opacity-75" href=""> Get Started! <img src="https://media.discordapp.net/attachments/971130306751000636/981174821494849556/unknown.png" class="h-5 ml-3" alt="">
              </a>
            </div>
          </div>
          <div class="absolute inset-0 w-full h-full mix-blend-multiply">
            <img src="https://images.unsplash.com/photo-1492144534655-ae79c964c9d7?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1883&q=80" alt="New robot toy" class="absolute inset-0 object-cover object-top w-full h-full" />
          </div>
        </aside>
      </div>
 {{-- Start of cards --}}

 <p class="text-3xl text-center pt-5 text-black">Some of our Featured Cars</p>
      <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-3 lg:grid-cols-4">
        <div class="card1 px-4">
          <a href="" class="block p-4 rounded-lg shadow-sm shadow-indigo-100">
            <img alt="1" src="https://imgcdn.zigwheels.ph/medium/gallery/exterior/30/1943/toyota-vios-front-angle-low-view-663135.jpg" class="object-cover w-full h-64 rounded-md" />
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
                  <img class="h-5" src="https://cdn-icons.flaticon.com/png/512/2881/premium/2881031.png?token=exp=1657026510~hmac=f0ea2c8d0c167781cac58166ad9541b8" alt="">
                  <div class="sm:ml-3 mt-1.5 sm:mt-0">
                    <dt class="text-gray-500"> Transmission </dt>
                    <dd class="font-medium"> Automatic </dd>
                  </div>
                </div>
                <div class="sm:inline-flex sm:items-center sm:shrink-0">
                  <img src="https://cdn-icons-png.flaticon.com/512/6331/6331941.png" class="h-5" alt="">
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
              <img alt="1" src="https://imgcdn.zigwheels.ph/medium/gallery/exterior/30/668/toyota-rush-84722.jpg" class="object-cover w-full h-64 rounded-md" />
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
                    <img class="h-5" src="https://cdn-icons.flaticon.com/png/512/2881/premium/2881031.png?token=exp=1657026510~hmac=f0ea2c8d0c167781cac58166ad9541b8" alt="">
                    <div class="sm:ml-3 mt-1.5 sm:mt-0">
                      <dt class="text-gray-500"> Transmission </dt>
                      <dd class="font-medium"> Manual </dd>
                    </div>
                  </div>
                  <div class="sm:inline-flex sm:items-center sm:shrink-0">
                    <img src="https://cdn-icons-png.flaticon.com/512/6331/6331941.png" class="h-5" alt="">
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
              <img alt="1" src="https://imgcdn.zigwheels.ph/medium/gallery/exterior/30/1110/toyota-fortuner-front-angle-low-view-275442.jpg" class="object-cover w-full h-64 rounded-md" />
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
                    <img class="h-5" src="https://cdn-icons.flaticon.com/png/512/2881/premium/2881031.png?token=exp=1657026510~hmac=f0ea2c8d0c167781cac58166ad9541b8" alt="">
                    <div class="sm:ml-3 mt-1.5 sm:mt-0">
                      <dt class="text-gray-500"> Transmission </dt>
                      <dd class="font-medium"> Automatic </dd>
                    </div>
                  </div>
                  <div class="sm:inline-flex sm:items-center sm:shrink-0">
                    <img src="https://cdn-icons-png.flaticon.com/512/6331/6331941.png" class="h-5" alt="">
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

         {{-- End of cards --}}

         
   
      <div class="container max-w-4xl px-6 py-10 mx-auto">
        <h1 class="text-4xl font-semibold text-center text-black">Frequently asked questions</h1>
        <div class="p-3">
          <div class="space-y-4">
            <details class="group">
              <summary class="flex items-center justify-between p-4 rounded-lg cursor-pointer bg-slate-800">
                <h5 class="font-medium text-white"> Where is your office located? Do i need to pick up the car itself? </h5>
                <img src="https://media.discordapp.net/attachments/971130306751000636/981174821494849556/unknown.png" class="h-5 ml-3" alt="">
              </summary>
              <p class="px-4 mt-4 mb-4 leading-relaxed text-gray-700"> Our office is located at 80 Milky Way Galaxy. Clients who wish to rent a car shall go and pick up the vehicle on our office warehouse. As requirements would also be surrendered in exchange for the whole duration of the car rental service. <br>
                <br> You can also reach us through the following links: <br>
                <span class="ml-5">Facebook: <span class="text-cyan-900">
                    <a href="https://www.facebook.com/"> Our Facebook Page </a>
                  </span>
                </span>
                <br>
                <span class="ml-5">Telephone: <span class="text-cyan-900"> +69 177013 </span>
                  <br>
                  <span class="ml-5">Phone Number: <span class="text-cyan-900"> +63969 5177 013</span>
                    <br>
                    <span class="ml-5">Email: <span class="text-cyan-900"> carrentalsmanila@gmail.com </span>
                      <br>
              </p>
            </details>
            <details class="group">
              <summary class="flex items-center justify-between p-4 rounded-lg cursor-pointer bg-slate-800">
                <h5 class="font-medium text-white"> In case of emergency or vehicle damage, what shall I do? </h5>
                <img src="https://media.discordapp.net/attachments/971130306751000636/981174821494849556/unknown.png" class="h-5 ml-3" alt="">
              </summary>
              <p class="px-4 mt-4 leading-relaxed text-gray-700"> The customer shall immediately report at our Phone Number: <span class="text-cyan-900"> +63969 5177 013</span>
                <br> All our vehicles are insured and are prepared for these kinds of accidents.
              </p>
            </details>
            <details class="group">
              <summary class="flex items-center justify-between p-4 rounded-lg cursor-pointer bg-slate-800">
                <h5 class="font-medium text-white"> What is your supported mode of payment? </h5>
                <img src="https://media.discordapp.net/attachments/971130306751000636/981174821494849556/unknown.png" class="h-5 ml-3" alt="">
              </summary>
              <p class="px-4 mt-4 leading-relaxed text-gray-700"> As of now we are only accepting cash as our payment option. This would be improved later on, so stay updated for future announcements at <span>
                  <span class="text-cyan-900">
                    <a href="https://www.facebook.com/"> our Facebook Page. </a>
                  </span>
                </span>
                <br>
              </p>
            </details>
            <details class="group">
              <summary class="flex items-center justify-between p-4 rounded-lg cursor-pointer bg-slate-800">
                <h5 class="font-medium text-white"> What are the requirements for renting a car? </h5>
                <img src="https://media.discordapp.net/attachments/971130306751000636/981174821494849556/unknown.png" class="h-5 ml-3" alt="">
              </summary>
              <p class="px-4 mt-4 leading-relaxed text-gray-700"> A customer should possess all of the following: <br>
                <span class="ml-5 text-cyan-900"> A valid Driver's License</span>
                <br>
                <span class="ml-5 text-cyan-900"> Atleast 1 Valid ID to be surrendered in the office.</span>
                <br>
                <span class="ml-5 text-cyan-900"> No record of criminal offense or traffic violations.</span>
              </p>
            </details>
          </div>
        </div>
      </div>
    </x-app-layout>
  </body>
</html>