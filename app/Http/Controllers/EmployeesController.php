<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;
use App\Models\Employees;

class EmployeesController extends Controller
{
    public function index()
    {
        $employees = Employees::all();
        return view('employees.index', ['employees' => $employees]);
    }

    public function create()
    {
        return view('employees.create');
    }

    public function store(Request $request)
    {
        
        Employees::create($request->post());

        return redirect()->route('employees.index')->with('success', 'Employee created successfully!');
    }

    public function edit($emp_no)
    {
        $employee = Employees::find($emp_no);
        return view('employees.edit', ['employee' => $employee]);
    }

    public function update(Request $request, $emp_no)
    {
        $validatedData = $request->validate([
            'birth_date' => 'required|date',
            'first_name' => 'required|string|max:14',
            'last_name' => 'required|string|max:16',
            'gender' => 'required|in:M,F',
            'hire_date' => 'required|date',
        ]);

        $employee = Employees::find($emp_no);
        $employee->birth_date = $validatedData['birth_date'];
        $employee->first_name = $validatedData['first_name'];
        $employee->last_name = $validatedData['last_name'];
        $employee->gender = $validatedData['gender'];
        $employee->hire_date = $validatedData['hire_date'];
        $employee->save();

        return redirect()->route('employees.index')->with('success', 'Employee updated successfully!');
    }

    public function destroy($emp_no)
    {
        $employee = Employees::find($emp_no);
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee deleted successfully!');
    }
}