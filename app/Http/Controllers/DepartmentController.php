<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Departments;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Departments::all();
        return view('departments.index', ['departments' => $departments]);
    }

    public function create()
    {
        return view('departments.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'dept_no' => 'required|unique:departments,dept_no|max:4',
            'dept_name' => 'required|max:40',
        ]);

        Departments::create($request->all());

        return redirect()->route('departments.index')
            ->with('success', 'Department created successfully.');
    }

    public function edit(Departments $department)
    {
        return view('departments.edit', compact('department'));
    }

    public function update(Request $request, Departments $department)
    {
        $request->validate([
            'dept_name' => 'required|max:40',
        ]);

        $department->update($request->all());

        return redirect()->route('departments.index')
            ->with('success', 'Department updated successfully.');
    }

    public function destroy(Departments $department)
    {
        $department->delete();

        return redirect()->route('departments.index')
            ->with('success', 'Department deleted successfully.');
    }
}