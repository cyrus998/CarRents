<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rent;
use PDF;

class HomeController extends Controller
{

    // Display user data in view
   public function showTeachers(){
    $rent = Rent::all();
    return view('rent', compact('rents'));
    }
     // Generate PDF
  public function createPDF() {
    // retreive all records from db
    $rent = Rent::all();
    // share data to view
    view()->share('rent',$rent);
    $pdf = PDF::loadView('rent', compact('rent'));
    // download PDF file with download method
    return $pdf->download('rent.pdf');
  }

    public function index(){
        $role=Auth::user()->role;

        if($role=='1'){
            return view('admin.dashboard');
        }
        else{
            return view('dashboard');
        }
    }
}
