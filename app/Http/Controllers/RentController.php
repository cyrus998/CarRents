<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class RentController extends Controller
{
    public function googlePieChart()
    {
        $data = DB::table('rents')
           ->select(
            DB::raw('carunit as carunit'),
            DB::raw('count(*) as number'))
           ->groupBy('carunit')
           ->get();
        $array[] = ['carunit', 'Number'];
        foreach($data as $key => $value)
        {
          $array[++$key] = [$value->carunit, $value->number];
        }
        return view('admin.analytics')->with('carunit', json_encode($array));
    }
}