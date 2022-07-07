<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login</title>
    <script src="https://cdn.tailwindcss.com"></script>

</head>
<body>
    <div class="min-h-screen bg-slate-900 flex">
        <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
          <div class="mx-auto w-full max-w-sm">
            <div>
                <img class="h-14" src="https://media.discordapp.net/attachments/971130306751000636/981174821494849556/unknown.png" alt="">
                <h2 class="mt-6 text-5xl font-extrabold text-transparent bg-clip-text bg-gradient-to-t from-blue-200 via-cyan-400 to-blue-50 sm:block">
                    Car Rental Services.
                </h2>
            </div>
            <div>
                
              <h2 class="mt-6 text-3xl leading-9 font-extrabold text-white">
                Sign in to your account
              </h2>
              <p class="mt-2 text-sm leading-5 text-white max-w">
                No Account Yet?
                <a href="{{ route('register') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                  Register an Account
                </a>
              </p>
            </div>
      
            <div class="mt-8">
      
              <div class="mt-6">
                <x-jet-validation-errors class="mb-4" />

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <form action="{{ route('login') }}" method="POST">
                    @csrf
                  <div>
                    <label for="email" class="block text-sm font-medium leading-5 text-white">
                      Email address
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                      <input id="email" type="email" name="email" :value="old('email')" required autofocus class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                  </div>
      
                  <div class="mt-6">
                    <label for="password" class="block text-sm font-medium leading-5 text-white">
                      Password
                    </label>
                    <div class="mt-1 rounded-md shadow-sm">
                      <input id="password" type="password" name="password" required autocomplete="current-password" required class="appearance-none block w-full px-3 py-2 border border-gray-300 rounded-md placeholder-gray-400 focus:outline-none focus:shadow-outline-blue focus:border-blue-300 transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                    </div>
                  </div>
      
                  <div class="mt-6 flex items-center justify-between">
                    <div class="flex items-center">
                      <input id="remember_me" type="checkbox" class="form-checkbox h-4 w-4 text-indigo-600 transition duration-150 ease-in-out" />
                      <label for="remember_me" class="ml-2 block text-sm leading-5 text-white">
                        Remember me
                      </label>
                    </div>
      
                    <div class="text-sm leading-5">
                    @if (Route::has('password.request'))
                      <a href="{{ route('password.request') }}" class="font-medium text-indigo-600 hover:text-indigo-500 focus:outline-none focus:underline transition ease-in-out duration-150">
                        Forgot your password?
                      </a>
                      @endif
                    </div>
                  </div>
      
                  <div class="mt-6">
                    <span class="block w-full rounded-md shadow-sm">
                      <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                        Sign in
                      </button>
                    </span>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="hidden lg:block relative w-0 flex-1">
          <img class="absolute inset-0 h-full w-full object-cover" src="https://images.unsplash.com/photo-1563720223523-491ff04651de?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1740&q=80" alt="" />
        </div>
      </div>
</body>
</html>