<?php

namespace App\Http\Livewire;

use Illuminate\Http\Request;
use Livewire\Component;
use App\Models\Rent;
use Hashids\Hashids;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Crypt;

class Rents extends Component
{

    use WithPagination;
    protected $listeners = ['deleteConfirmed' => 'delete'];
    public $rents, $name, $number, $carunit, $daysrented, $price, $status;
    public $title, $body, $rent_id;
    public $isOpen = 0;
    public $searchTerm;
    public $sortBy = 'name';
    public $sortDirection = 'asc';
    public $perPage = 10;

    public function render()
    {
        $searchTerm = '%'. $this->searchTerm . '%';
        $this->rents = Rent::where('name','like',$searchTerm)
        ->orWhere('number','like',$searchTerm)
        ->orWhere('carunit','like',$searchTerm)
        ->orWhere('daysrented','like',$searchTerm)
        ->orWhere('price','like',$searchTerm)
        ->orWhere('status','like',$searchTerm)
        ->orderBy($this->sortBy, $this->sortDirection)
        ->get();
        
        
        return view('livewire.rents');
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

    /**
     * The attributes that are mass assignable.
     *
     * 
  
    
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
        $this->name = '';
        $this->number = '';
        $this->carunit = '';
        $this->daysrented = '';
        $this->price = '';
        $this->status = 'Pending';
        $this->rent_id = '';
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'number' => 'required',
            'carunit' => 'required',
            'daysrented' => 'required',
            'price' => 'required',
            'status' => 'required',
        ]);

        Rent::updateOrCreate(['id' => $this->rent_id], [
            'name' => $this->name,
            'number' => $this->number,
            'carunit' => $this->carunit,
            'daysrented' => $this->daysrented,
            'price' => $this->price,
            'status' => $this->status
            
        ]);
  
        session()->flash('message', 
            $this->rent_id ? 'Rent Updated Successfully.' : 'Rent Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
            
    public function edit($id)
    {
        $rent = Rent::findOrFail($id);
        $this->rent_id = $id;
        $this->name = $rent->name;
        $this->number = $rent->number;
        $this->carunit = $rent->carunit;
        $this->daysrented = $rent->daysrented;
        $this->price = $rent->price;
        $this->status = $rent->status;
    
        $this->openModal();
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        Rent::find($id)->delete();
        session()->flash('message', 'Rent Deleted Successfully.');
    }
}   