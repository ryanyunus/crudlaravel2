<?php

namespace App\Http\Controllers;
use App\Models\Employee;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function index(){
        $data = Employee::all();
  //      dd($data);
        return view('datapegawai',compact('data')); 
    }
}
