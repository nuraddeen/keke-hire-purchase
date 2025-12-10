<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KekeController extends Controller
{
    //

    public function createKeke(Request $request) {
        //validate data≠

        $validatedData = $request->validate([
            'brand' => 'string|required|in:Bajaj,TVS,Dala',
            'model' => 'string|required|min:4|max:50',
            'chassis_number' => 'string|required|unique:kekes,chassis_number',
            'supply_price' => 'float|required|min:10000'
        ]);

        //
        // $creationStatus = 

    }
}
