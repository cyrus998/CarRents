<div class="max-w-full mx-auto">
    <div class="flex m-2 p-2">
        
        <x-jet-button wire:click="showRentModal" class="text-1xl">Create</x-jet-button>
    </div>
    <div class="m-2">
                <a class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded my-3" href="{{ URL::to('/create-pdf') }}">Export to PDF</a>
            </div>
    <div class="m-2 p-2">
        <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
            <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                    <table class="w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50 dark:bg-gray-600 dark:text-gray-200">
                            <tr>
   
                            <div class="col mb-4 mr-32">
            <input wire:model.debounce.300ms="searchTerm" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-300 py-2 px-6 text-gray-700  focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder = "Search Customer">  
            </div>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                    ID</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                    Name</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                    Phone Number</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                    Car</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                    Days Rented</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                    Price</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                    Status</th>
                                <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 dark:text-gray-200 uppercase tracking-wider">
                                    ID Image (click to view)</th>

                                <th scope="col" class="relative px-6 py-3">Edit</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <tr></tr>
                            @foreach ($rents as $rent)
                            <tr>

                                <td class="px-6 py-4 whitespace-nowrap">{{ $rent->id }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $rent->name }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $rent->number }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $rent->carunit }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $rent->daysrented }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $rent->price }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $rent->status }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">
                                    <a href="{{ Storage::url($rent->image) }}">
                                        <img class="w-24 h-16 " src="{{ Storage::url($rent->image) }}" />
                                    </a>
                                </td>
                                <td class="px-6 py-4 text-right text-sm">
                                    <div class="flex space-x-2">
                                        <x-jet-button wire:click="showEditRentModal({{ $rent->id }})">Edit
                                        </x-jet-button>
                                        <x-jet-button class="bg-red-400 hover:bg-red-600" wire:click="deleteRent({{ $rent->id }})">Delete
                                        </x-jet-button>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="text-center m-2 p-2">Displaying Results.</div>
                </div>
            </div>
        </div>

    </div>
    <div>
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
                            <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Car Unit Model" wire:model="carunit">
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
                            <input type="number" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter price" wire:model="price">
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
</div>