<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the employees.
     */
    public function index()
    {
        $employees = Employee::latest()->paginate(10);
        return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new employee.
     */
    public function create()
    {
        return view('employees.create');
    }

    /**
     * Store a newly created employee in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'First_Name' => 'required|string|max:255',
            'Last_Name' => 'required|string|max:255',
            'Birthday' => 'nullable|date',
            'Description' => 'nullable|string',
            'Address' => 'nullable|string',
            'Additional_Info' => 'nullable|string',
            'Zip_Code' => 'nullable|string|max:20',
            'Place' => 'nullable|string|max:255',
            'Country' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:employees',
        ]);

        Employee::create($validated);

        return redirect()->route('employees.index')
            ->with('success', 'Employee created successfully.');
    }

    /**
     * Display the specified employee.
     */
    public function show(Employee $employee)
    {
        return view('employees.show', compact('employee'));
    }

    /**
     * Show the form for editing the specified employee.
     */
    public function edit(Employee $employee)
    {
        return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified employee in storage.
     */
    public function update(Request $request, Employee $employee)
    {
        $validated = $request->validate([
            'First_Name' => 'required|string|max:255',
            'Last_Name' => 'required|string|max:255',
            'Birthday' => 'nullable|date',
            'Description' => 'nullable|string',
            'Address' => 'nullable|string',
            'Additional_Info' => 'nullable|string',
            'Zip_Code' => 'nullable|string|max:20',
            'Place' => 'nullable|string|max:255',
            'Country' => 'nullable|string|max:255',
            'email' => 'required|string|email|max:255|unique:employees,email,'.$employee->id,
        ]);

        $employee->update($validated);

        return redirect()->route('employees.index')
            ->with('success', 'Employee updated successfully.');
    }

    /**
     * Remove the specified employee from storage.
     */
    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')
            ->with('success', 'Employee deleted successfully.');
    }
}
