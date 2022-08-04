<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::orderBy('id', 'desc')->get();
        return view('pages.employees.index', compact('employees'));
    }

    public function create()
    {
        return view('pages.employees.create');
    }

    public function store(Request $request)
    {
        Employee::insert([
            'name' => $request->name,
            'address' => $request->address
        ]);

        return redirect('employee');
    }

    public function edit(Employee $employee)
    {
        return view('pages.employees.edit', compact('employee'));
    }

    public function update(Request $request, Employee $employee)
    {
        $employee->update([
            'name' => $request->name,
            'address' => $request->address
        ]);
        return redirect('employee');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return back();
    }
}
