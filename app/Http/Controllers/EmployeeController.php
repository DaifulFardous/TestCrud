<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Models\Employee;
use Faker\Core\File;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function employees(){
        $employees = Employee::all();
        return view('employees', compact('employees'));
    }
    public function create(){
        $companies = Company::all();
        return view('create', compact('companies'));
    }
    public function store(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'image' => ['required']
        ]);
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/students/', $filename);
        }
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->image = $filename;
        $employee->save();
        $employee->companies()->attach($request->companies);
        return redirect('/')->with('message','employee added successfully');
    }

    public function details($id){
        $employee = Employee::find($id);
        return view('details', compact('employee'));
    }
    public function destroy($id){
        $employee = Employee::find($id);
        if(file_exists(public_path('uploads/students/'.$employee->image))){
            unlink(public_path('uploads/students/'.$employee->image));
          }
        $employee->delete();
        return redirect('/')->with('message','employee deleted successfully');
    }
    public function edit($id){
        $employee = Employee::find($id);
        $companies = Company::all();
        return view('edit', compact('employee','companies'));
    }
    public function update(Request $request){
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'image' => ['required']
        ]);
        if($request->hasfile('image'))
        {
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/students/', $filename);
        }
        $employee = new Employee();
        $employee->name = $request->name;
        $employee->email = $request->email;
        $employee->image = $filename;
        $employee->save();
        $employee->companies()->attach($request->companies);
        return redirect('/')->with('message','employee updated successfully');
    }

}
