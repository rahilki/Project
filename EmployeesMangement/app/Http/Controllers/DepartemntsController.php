<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Departemnt;

class DepartemntsController extends Controller
{
    //

    
    public function departemnts() {
        $data['records'] = Departemnt::all();
        return view ('DepartemntsView', $data);
    }

    public function newdep(Request $request) {

        $record = new Departemnt;
        $record->name = $request->name;
        $record->status = $request->status;
        $record->save();

        return "Record added successfully";
    }

    public function searchDepartemnt(Request $request, $name = null) { 
        $departemnt = $request->name; $departemnts = Departemnt::query(); 
        if ($name) { $departemnts->where('name', 'like', "%$name%"); } 
        $results = $departemnts->get(); 
        return view('searchDepartemnt', ['records' => $results]); 
    }

}
