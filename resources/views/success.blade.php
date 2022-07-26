<script src="https://cdn.tailwindcss.com"></script>
<!--
  This component uses @tailwindcss/forms

  yarn add @tailwindcss/forms
  npm install @tailwindcss/forms

  plugins: [require('@tailwindcss/forms')]
-->

<aside class="bg-gray-50">
    <div class="p-8 md:p-12 lg:px-16 lg:py-24">
        <div class="max-w-lg mx-auto text-center">
            <h2 class="text-2xl mt-44 font-bold text-gray-900 md:text-3xl">
                Your Reservation has been placed.
            </h2>

            <p class="hidden text-gray-500 sm:mt-4 sm:block">
                Please wait for one of our staff to contact you through your provided phone number, to confirm the reservation details. Thank you.
            </p>
        </div>

        <div class="max-w-xl mx-auto mt-8 flex">
            <div class="m-auto">
                <a href="/cars" class="flex items-center justify-center w-full px-5 py-3 mt-4 text-white transition rounded-md bg-rose-600 sm:mt-0 sm:w-auto group focus:outline-none focus:ring focus:ring-yellow-400">
                    <span class="text-sm font-medium"> Take me Back! </span>

                    <svg class="w-5 h-5 ml-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</aside>