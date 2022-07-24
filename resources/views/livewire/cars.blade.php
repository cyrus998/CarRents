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
                                    @if(Auth::user()->role=="0")
                                    <x-jet-button wire:click="showRentModal({{ $car->id }})" class="text-1xl">Rent this Car</x-jet-button>
                                    @endif
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

    <x-jet-dialog-modal wire:model="showingRentModal">
            @if ($isEditMode)
            <x-slot name="name">Update Rent</x-slot>
            @else
            <x-slot name="name">Create Rent</x-slot>
            @endif
            <x-slot name="content">
                <div class="space-y-8 divide-y divide-gray-200">
                    <form enctype="multipart/form-data">
                        <div class="sm:col-span-6">

                            <div class="mb-4">
                                <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Customer Name:</label>
                                <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter name" wire:model="name">
                                @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
                            </div>

                        </div>
                        <div class="sm:col-span-6">
                            <label for="name" class="block text-sm mt-4 font-medium text-gray-700"> Please Upload A valid ID </label>
                            @if ($oldImage)
                            Old Image:
                            <img src="{{ Storage::url($oldImage) }}">
                            @endif
                            @if ($newImage)
                            Photo Preview:
                            <img src="{{ $newImage->temporaryUrl() }}">
                            @endif
                            <div class="mt-1">
                                <input type="file" id="image" wire:model="newImage" name="newImage" class="block w-full appearance-none bg-white border border-gray-400 rounded-md py-2 px-3 text-base leading-normal transition duration-150 ease-in-out sm:text-sm sm:leading-5" />
                            </div>
                            @error('newImage')
                            <span class="text-red-400">{{ $message }}</span>
                            @enderror

                        </div>

                        <div class="mb-4">
                            <label for="exampleFormControlInput2" class="block text-gray-700 text-sm mt-2 font-bold mb-2">Number:</label>
                            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" type="number" id="exampleFormControlInput2" wire:model="number" placeholder="Enter number">
                            {{-- <textarea ></textarea> --}}
                            @error('number') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Car:</label>
                            <input disabled type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Car Unit Model" wire:model="carunit">
                            @error('carunit') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                        <div class="mb-4">
                            <label for="exampleFormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">Duration:</label>
                            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" wire:model="daysrented" placeholder="Enter daysrented">
                                <option disabled value="">Select Number of Days</option>
                                <option value="1">1 Day</option>
                                <option value="2">2 Days</option>
                                <option value="3">3 Days</option>
                                <option value="5">5 Days</option>
                                <option value="7">1 Week</option>
                                <option value="14">2 Weeks</option>
                                <option value="21">3 Weeks</option>
                            </select>
                            {{-- <textarea ></textarea> --}}
                            @error('daysrented') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                        <div class="mb-4">
                            <label for="exampleFormControlInput1" class="block text-gray-700 text-sm font-bold mb-2">Price:</label>
                            <input disabled type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter price" wire:model="price">
                            @error('price') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>

                        @if(Auth::user()->role=="1")
                        <div class="mb-4">
                            <label for="exampleFormControlInput2" class="block text-gray-700 text-sm font-bold mb-2">Status:</label>
                            <select class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput2" wire:model="status" placeholder="Enter status">
                                <option value="Pending">Pending</option>
                                <option value="Returned/Done">Returned/Done</option>
                                <option value="On The Road">On The Road</option>
                            </select>
                            {{-- <textarea ></textarea> --}}
                            @error('status') <span class="text-red-500">{{ $message }}</span>@enderror
                        </div>
                        @endif
                    </form>
                </div>

            </x-slot>
            <x-slot name="footer">
                @if ($isEditMode)
                <x-jet-button wire:click="updateRent">Update</x-jet-button>
                @else
                <x-jet-button wire:click="storeRent">Create</x-jet-button>
                @endif
            </x-slot>
        </x-jet-dialog-modal>
</div>
