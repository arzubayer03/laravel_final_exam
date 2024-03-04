<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class EmployeeController extends Controller
{
    public function show()
    {
        $employees = Employee::all();
        return view('employees.show', compact('employees'));
    }

    public function create()
    {
        return view('employees.add-employee');
    }

    public function store(Request $request)
    {
        $employee = new Employee();
        $employee->employee_id = $request->employee_id;
        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->salary = $request->salary;
        $employee->save();

        return redirect()->route('show');
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.edit', compact('employee'));
    }

    public function update(Request $request, $id)
    {
        $employee = Employee::findOrFail($id);
        $employee->employee_id = $request->employee_id;
        $employee->name = $request->name;
        $employee->phone = $request->phone;
        $employee->email = $request->email;
        $employee->address = $request->address;
        $employee->salary = $request->salary;
        $employee->save();

        return redirect()->route('show');
    }

    public function delete($id)
    {
        $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect()->route('show');
    }
}
