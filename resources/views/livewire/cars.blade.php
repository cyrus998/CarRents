<x-slot name="header">
    @if(Auth::user()->role=="0")
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Our Finest Selection of Cars
    </h2>
    @endif
    
    @if(Auth::user()->role=="1")
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Create or Edit Car Information
    </h2>
    @endif
</x-slot>

<div class="py-12">
    <div class="max-w-full mx-auto sm:px-6 lg:px-8">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3"
                    role="alert">
                    <div class="flex">
                        <div>
                            <p class="text-sm">{{ session('message') }}</p>
                        </div>
                    </div>
                </div>
            @endif

            @if(Auth::user()->role=="1")

            <button wire:click="create()"
                class="bg-blue-500 ml-8 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New Car</button>
            @if ($isOpen)
                @include('livewire.createcar')
            @endif

            @endif

            <div class="grid grid-cols-1 gap-8 mt-8 md:grid-cols-2 lg:grid-cols-3">

                @foreach ($cars as $car)
                    <div class="card1 px-4">
                        <a class="block p-4 rounded-lg shadow-lg shadow-indigo-100">
                            <img alt="1" src="{{ $car->picture }}"
                                class="object-cover w-full h-64 rounded-md" />
                            <div class="mt-2 px-5 py-2">
                                <dl>
                                    <div>

                                        <dd hidden class="text-xl"> {{ $car->id }} </dd>
                                        <dd hidden class="text-xl"> {{ $car->picture }} </dd>

                                        <dd class="text-xl"> {{ $car->carunit }} </dd>
                                    </div>
                                    <div>
                                        <dd class="text-xxl text-gray-500">Price starts @ {{ $car->price }} / day </dd>
                                    </div>
                                </dl>
                                <dl class="flex items-center mt-2 space-x-8 text-xs">
                                    <div class="sm:inline-flex sm:items-center sm:shrink-0">
                                        <img class="h-5"
                                            src="https://cdn.discordapp.com/attachments/971130306751000636/997893847713591416/unknown.png"
                                            alt="">
                                        <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                            <dt class="text-gray-500"> Transmission </dt>
                                            <dd class="font-medium"> {{ $car->transmission }} </dd>
                                        </div>
                                    </div>
                                    <div class="sm:inline-flex sm:items-center sm:shrink-0">
                                        <img src="https://cdn-icons-png.flaticon.com/512/6331/6331941.png"
                                            class="h-5" alt="">
                                        <div class="sm:ml-3 mt-1.5 sm:mt-0">
                                            <dt class="text-gray-500"> Seats </dt>
                                            <dd class="font-medium"> {{ $car->seats }} </dd>
                                        </div>
                                    </div>
                                    @if(Auth::user()->role=="1")
                                    <button wire:click="edit({{ $car->id }})"
                                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                                    <button wire:click="delete({{ $car->id }})"
                                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                                    @endif
                                </dl>
                            </div>
                        </a>
                    
                    </div>
                @endforeach

            </div>
    </div>
</div>
