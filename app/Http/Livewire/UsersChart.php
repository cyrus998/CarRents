<?php

namespace App\Http\Livewire;

use Livewire\Component;

Use DB;
 
use App\Models\User;
 
use Carbon\Carbon;

class UsersChart extends Component
{
    public function render()
    {
        return view('livewire.users-chart');
    }

    public function index()
    {
 
     $data['lineChart'] = User::select(\DB::raw("COUNT(*) as count"), \DB::raw("MONTHNAME(created_at) as month_name"),\DB::raw('max(created_at) as createdAt'))
        ->whereYear('created_at', date('Y'))
        ->groupBy('month_name')
        ->orderBy('createdAt')
        ->get();
 
        return view('livewire.users-chart', $data);
    }
}
