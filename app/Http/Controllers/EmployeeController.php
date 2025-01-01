<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function index()
    {
        $staff = Employee::select('id', 'fullname', 'position')->get();
        
        return view('staff.index', compact('staff'));
    }

    public function create() {
        $employee = new Employee;
        return view('staff.create', compact("employee"));
    }

    public function store(Request $request) {
        $request->validate([
            'fullname' => 'required|max:100',
            'position' => 'required|max:100'
        ]);


        $employee = Employee::create($request->all());

        return redirect()->route('index_employee');
    }

    
    public function edit(Employee $employee)
    {
        return view('staff.edit', compact("employee"));
    }


    public function update(Request $request, Employee $employee)
    {
        $request->validate([
            'fullname' => 'required|max:100',
            'position' => 'required|max:100'
        ]);


        $employee = $employee->update($request->all());

        return redirect()->route('index_employee');
    }


    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('index_employee');
    }
}
