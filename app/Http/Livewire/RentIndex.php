<?php

namespace App\Http\Livewire;

use App\Models\Rent;
use App\Models\Car;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Hashids\Hashids;

class RentIndex extends Component
{
    use WithFileUploads;

    public $showingRentModal = false;
    protected $listeners = ['deleteConfirmed' => 'delete'];
    public $newImage;
    public $number;
    public $carunit;
    public $daysrented;
    public $price;
    public $status;
    public $oldImage;
    public $searchTerm;
    public $sortBy = 'name';
    public $sortDirection = 'asc';
    public $isEditMode = false;
    public $rents, $name, $rent;

    public function render()
    {
        $searchTerm = '%'. $this->searchTerm . '%';
        $this->rents = Rent::where('name','like',$searchTerm)
        ->orWhere('image','like',$searchTerm)
        ->orWhere('number','like',$searchTerm)
        ->orWhere('carunit','like',$searchTerm)
        ->orWhere('daysrented','like',$searchTerm)
        ->orWhere('price','like',$searchTerm)
        ->orWhere('status','like',$searchTerm)
        ->orderBy($this->sortBy, $this->sortDirection)
        ->get();
        
        
        return view('livewire.rent-index');
    }
    public function sortBy($field)
    {
        if ($this->sortDirection == 'asc') {
            $this->sortDirection = 'desc';
        } else {
            $this->sortDirection = 'asc';
        }

        return $this->sortBy = $field;
    }

    public function showRentModalAdmin()
    {
        $this->reset();
        $this->resetInputFields();
        $this->showingRentModal = true;
    }

    public function showRentModal($id)
    {
        $this->reset();
        $this->resetInputFields();

        $car = Car::findOrFail($id);
        // $this->car_id= $id;
        $this->name = auth()->user()->name;
        $this->carunit = $car->carunit;
        $this->price = $car->price;

        $this->showingRentModal = true;
    }

    private function resetInputFields(){ 
        $this->name = '';
        $this->number = '';
        $this->carunit = '';
        $this->daysrented = '';
        $this->price = '';
        $this->status = 'Pending';
    }
    
    public function storeRent()
    {
        $this->validate([
            'newImage' => 'image|max:1024', // 1MB Max
            'name' => 'required',
            'number' => 'required',
            'carunit' => 'required',
            'daysrented' => 'required',
            'price' => 'required',
            'status' => 'required'
        ]);

        $image = $this->newImage->store('public/rents');

        Rent::create([
            'name' => $this->name,
            'image' => $image,
            'number' => $this->number,
            'carunit' => $this->carunit,
            'daysrented' => $this->daysrented,
            'price' => $this->price,
            'status' => $this->status,
        ]);
        $this->reset();
        return redirect()->to('/success');
    }

    public function showEditRentModal($id)
    {
        $this->rent = Rent::findOrFail($id);
        $this->name = $this->rent->name;
        $this->number = $this->rent->number;
        $this->carunit = $this->rent->carunit;
        $this->daysrented = $this->rent->daysrented;
        $this->price = $this->rent->price;
        $this->status = $this->rent->status;
        $this->oldImage = $this->rent->image;
        $this->isEditMode = true;
        $this->showingRentModal = true;
    }
  
    public function updateRent()
    {
        $this->validate([
            'name' => 'required',
            'number' => 'required',
            'carunit' => 'required',
            'daysrented' => 'required',
            'price' => 'required',
            'status' => 'required'
        ]);
        $image = $this->rent->image;
        if ($this->newImage) {
            $image = $this->newImage->store('public/rents');
        }


        $this->rent->update([
            'name' => $this->name,
            'image' => $image,
            'number' => $this->number,
            'carunit' => $this->carunit,
            'daysrented' => $this->daysrented,
            'price' => $this->price,
            'status' => $this->status
        ]);
        $this->reset();
    }
          // <!-- protected $fillable = ['name', 'image', 'number', 'carunit', 'daysrented', 'price', 'status']; -->
    public function deleteRent($id)
    {
        $rent = Rent::findOrFail($id);
        Storage::delete($rent->image);
        $rent->delete();
        $this->reset();
    }


}
