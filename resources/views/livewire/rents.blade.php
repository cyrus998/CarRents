<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Rented Cars
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-15xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm">{{ session('message') }}</p>
                    </div>
                  </div>
                </div>
            @endif
            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New Rent</button>
            @if($isOpen)
                @include('livewire.create')
            @endif

            <div class="col mb-4 mr-32">
            <input wire:model.debounce.300ms="searchTerm" class="bg-gray-200 appearance-none border-2 border-gray-200 rounded w-300 py-2 px-6 text-gray-700  focus:outline-none focus:bg-white focus:border-purple-500" id="inline-full-name" type="text" placeholder = "Search Information">  
            </div>

            <table class="table-fixed w-full">
                <thead>
                    <tr class="bg-gray-100">
                   
 			    <th class="px-4 py-10 w-20" wire:click="sortBy('id')" style="cursor: pointer;" >
                 
                </th>
            
                        <th class="px-4 py-2" wire:click="sortBy('name')"  style="cursor: pointer;" >Full Name</th>
                        <th class="px-4 py-2" wire:click="sortBy('number')"  style="cursor: pointer;" >Number</th>
                        <th class="px-4 py-2" wire:click="sortBy('carunit')"  style="cursor: pointer;" >Car Unit</th>
                        <th class="px-4 py-2" wire:click="sortBy('daysrented')"  style="cursor: pointer;" >Days Rented</th>
                        <th class="px-4 py-2" wire:click="sortBy('price')"  style="cursor: pointer;" >Price</th>
                        <th class="px-4 py-2" wire:click="sortBy('status')"  style="cursor: pointer;" >Status</th>
                        <th class="px-4 py-2">Action</th>
                     
                    </tr>
                </thead>
                <tbody>
                   
                    @foreach($rents as $rent)
                    <tr>
                        <td class="border px-4 py-2">{{ $rent->id }}</td>
                        <td class="border px-4 py-2">{{ $rent->name }}</td>
                        <td class="border px-4 py-2">{{ $rent->number }}</td>
                        <td class="border px-4 py-2">{{ $rent->carunit }}</td>
                        <td class="border px-4 py-2">{{ $rent->daysrented }}</td>
                        <td class="border px-4 py-2">{{ $rent->price }}</td>
                        <td class="border px-4 py-2">{{ $rent->status }}</td>
                        <td class="border px-4 py-2">
                        <button wire:click="edit({{ $rent->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-2 rounded">Edit</button>
                            <button wire:click="delete({{ $rent->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-2 rounded">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>