<?php

namespace App\Http\Controllers;

use App\Vehicles;
use Illuminate\Http\Request;

class VehiclesController extends Controller
{
    //

    public function get(Request $request)
    {
        $search = $request->input('search');

        if ($search) {
            return Vehicles::where('name', 'like', '%' . $search . '%')->paginate(5);
        } else {
            return Vehicles::paginate(5);
        }
    }
}
