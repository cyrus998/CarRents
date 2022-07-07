<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <div class="min-h-screen bg-slate-900 flex">
        <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
          <div class="mx-auto w-full max-w-sm">
            <div>
                <img class="h-14" src="https://media.discordapp.net/attachments/971130306751000636/981174821494849556/unknown.png" alt="">
                <h2 class="mt-2 text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-t from-blue-200 via-cyan-400 to-blue-50 sm:block">
                    Car Rental Services.
                </h2>
            </div>
            <div>
                
              <h2 class="mt-6 text-3xl leading-9 font-extrabold text-white">
                User Registration.
              </h2>
              <p class="mt-2 text-sm leading-5 text-white max-w">
                Already Signed Up?
                <a href="{{ route('login') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                  Login
                </a>
              </p>
            </div>
      
            <div class="mt-8">
      
              <div class="mt-6">
                <x-jet-validation-errors class="mb-2" />

                <form action="{{ route('register') }}" method="POST">
                    @csrf

                    <div class="">
                        <label for="password" class="block text-sm font-medium leading-5 text-white">
                          Name
                        </label>
                        <div class="mt-1 rounded-md shadow-sm">
                          <input id="name" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                        </div>
                    </div>

                    <div class="mt-6">
                    <label for="email" class="block text-sm font-medium leading-5 text-white">
                      Email address
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                      <input id="email" type="email" name="email" :value="old('email')" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                    </div>
      
                  

                  <div class="mt-6">
                    <label for="password" class="block text-sm font-medium leading-5 text-white">
                      Password
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                      <input  id="password" type="password" name="password" required autocomplete="new-password" class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                  </div>

                  <div class="mt-6">
                    <label for="password" class="block text-sm font-medium leading-5 text-white">
                      Password Confirmation
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                      <input id="password_confirmation" type="password" name="password_confirmation" required autocomplete="new-password"  class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                  </div>
      
                  <div class="mt-6 flex items-center justify-between">
                  
      
                  
                  </div>

                  @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-jet-label for="terms">
                        <div class="flex items-center">
                            <x-jet-checkbox name="terms" id="terms"/>

                            <div class="ml-2 text-white">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-cyan-800 hover:text-gray-900">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-cyan-800 hover:text-gray-900">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-jet-label>
                </div>
            @endif
      
                  <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                      <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        Register
                      </button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="hidden lg:block relative w-0 flex-1">
          <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1606103749141-1efed6903912?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1665&q=80" alt="" />
        </div>
      </div>
</body>
</html>