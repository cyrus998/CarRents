<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Car;

class Cars extends Component
{
    
    public $cars, $carunit, $price, $transmission, $seats, $picture;
    public $isOpen = 0;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->cars = Car::all();
        return view('livewire.cars');
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
   
    private function resetInputFields(){
        $this->carunit = '';
        $this->price = '';
        $this->transmission = '';
        $this->seats = '';
        $this->picture = '';
        $this->car_id= '';
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    { 
        $this->validate([
            'carunit' => 'required',
            'price' => 'required',
            'transmission' => 'required',
            'seats' => 'required',
            'picture' => 'required',
         
        ]);
   
        Car::updateOrCreate(['id' => $this->car_id], [
            'carunit' => $this->carunit,
            'price' => $this->price,
            'transmission' => $this->transmission,
            'seats' => $this->seats,
            'picture' => $this->picture
        ]);
  
        session()->flash('message', 
            $this->car_id? 'Car Updated Successfully.' : 'Car Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)// 'carunit', 'price', 'transmission', 'seats', 'picture'
    {
        $car = Car::findOrFail($id);
        $this->car_id= $id;
        $this->carunit = $car->carunit;
        $this->price = $car->price;
        $this->transmission = $car->transmission;
        $this->seats = $car->seats;
        $this->picture = $car->picture;

    
        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Car::find($id)->delete();
        session()->flash('message', 'Car Deleted Successfully.');
    }
}