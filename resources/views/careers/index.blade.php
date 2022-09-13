
<x-app-layout>

@if(Auth::user()->role=="1")

<body class="antialiased font-sans bg-gray-200">
  <div class="container mx-auto px-4 sm:px-8">
    <div class="py-8">
      <div>
        <h2 class="text-2xl font-semibold leading-tight mb-2">Submit an application!</h2>
        <a href="{{ route('careers.create') }}">
          <button class="bg-gray-700 hover:bg-grey text-white font-bold py-2 px-4 rounded inline-flex items-center">
            <svg class="w-4 h-4 mr-2 text-white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
              <path d="M13 8V2H7v6H2l8 8 8-8h-5zM0 18h20v2H0v-2z" />
            </svg> <span>Create New Career</span> </button>
        </a>
      </div>
      <div class="-mx-4 sm:-mx-8 px-4 sm:px-8 py-4 overflow-x-auto">
        <div class="inline-block min-w-full shadow rounded-lg overflow-hidden">

          @if ($message = Session::get('success'))

          <div class="mb-3 flex w-full max-w-sm overflow-hidden rounded-lg shadow-md bg-gray-800">
            <div class="flex items-center justify-center w-12 bg-blue-500">
              <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" />
              </svg>
            </div>

            <div class="px-4 py-2 -mx-3">
              <div class="mx-3">
                <span class="font-semibold text-blue-500 dark:text-blue-400">Success!</span>
                <p class="text-sm text-gray-600 dark:text-gray-200">{{ $message }}</p>
              </div>
            </div>
          </div>
          @endif



          <table class="min-w-full leading-normal">
            <thead>
              <tr>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"> No </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"> Name </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"> Resume </th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"> Image (Click to View Image)</th>
                <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider"> Action </th>
              </tr>
            </thead>
            <tbody> @foreach ($careers as $career)
              <tr>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                  <div class="flex items-center">
                    <div class="flex-shrink-0 w-10 h-10"> <img class="w-full h-full rounded-full" src="/images/{{ $career->image }}" alt="" /> </div>
                    <div class="ml-3">
                      <p class="text-gray-900 whitespace-no-wrap"> {{ ++$i }} </p>
                    </div>
                  </div>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 txet bg-white text-sm">
                  <p class="text-gray-900 whitespace-no-wrap">{{ $career->name }}</p>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                  <a href="/resume/{{ $career->resume }}">
                    <button class="flex items-center justify-center w-full px-2 py-1 text-white transition-colors duration-300 transform bg-blue-600 rounded-md focus:outline-none sm:w-auto sm:mx-1 hover:bg-blue-500 focus:bg-blue-500 focus:ring focus:ring-blue-300 focus:ring-opacity-40">
                      <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 mx-1" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                      </svg>
                      <span class="mx-1">
                        Click to See Resume
                      </span>
                    </button>
                  </a>
                </td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"> <a href="/images/{{ $career->image }}"><img src="/images/{{ $career->image }}" width="100px"> </a></td>
                <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                  <form action="{{ route('careers.destroy',$career->id) }}" method="POST"> <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                      <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span> <span class="relative"><a class="btn btn-info" href="{{ route('careers.show',$career->id) }}">Show</span></a>
                    </span> <span class="relative inline-block px-3 py-1 font-semibold text-green-900 leading-tight">
                      <span aria-hidden class="absolute inset-0 bg-green-200 opacity-50 rounded-full"></span> <span class="relative"><a class="btn btn-info" href="{{ route('careers.edit',$career->id) }}">Edit</span></a>
                    </span> @csrf @method('DELETE')
                    <button type="submit" class="mb-2 md:mb-0 bg-red-500 border border-red-500 px-2 py-1 text-sm shadow-sm font-medium tracking-wider text-white rounded-full hover:shadow-lg hover:bg-red-600">Delete</button>
                  </form>
                </td>
              </tr> @endforeach
            </tbody>
          </table>
        </div>
        <div class="mt-5"> {!! $careers->links() !!} </div>
      </div>
    </div>
  </div>
</body>

@endif


@if(Auth::user()->role=="0")
<div class="flex mt-5 w-full max-w-sm mx-auto overflow-hidden bg-white rounded-lg shadow-md dark:bg-gray-800">
  <div class="flex items-center justify-center w-12 bg-blue-500">
    <svg class="w-6 h-6 text-white fill-current" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg">
      <path d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM21.6667 28.3333H18.3334V25H21.6667V28.3333ZM21.6667 21.6666H18.3334V11.6666H21.6667V21.6666Z" />
    </svg>
  </div>

  <div class="px-4 py-2 -mx-3">
    <div class="mx-3">
      <span class="font-semibold text-blue-500 dark:text-blue-400">Restricted Access</span>
      <p class="text-sm text-gray-600 dark:text-gray-200">This account does not have administrative rights!</p>
    </div>
  </div>
</div>
@endif

</x-app-layout>
