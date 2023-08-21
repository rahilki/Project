<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employ;

class EmployeesController extends Controller
{
    //

    public function employees() {
        $data['records'] = Employ::all();
        return view ('EmployeesView', $data);
    }


    public function new(Request $request) {

        $record = new Employ;
        $record->name = $request->name;
        $record->phone_number = $request->phone_number;
        $record->age = $request->age;
        $record->departemnt_id = $request->departemnt_id;
        $record->save();

        return "Record added successfully";
    }


    public function searchEmploy(Request $request) { 
        $employs = Employ::query(); 
        if ($request->search) {
            $employs=$employs->where ('name' , 'like' , "%$request->search%")->orWhere('phone_number' , 'like' ,"%$request->search%" );
         }
        $results = $employs->get(); 
        return view ('searchEmployees', ['records' => $results]); 
   }

}

