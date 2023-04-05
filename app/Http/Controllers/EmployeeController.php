<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Company;
use App\Http\Requests\EmployeeRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmployeeController extends Controller
{
    public function index()
    {
        $employees = Employee::paginate(10);

        return view('employee.index', compact('employees'));
    }

    public function create()
    {
        return view('employee.create');
    }

    public function store(Request $request)
    {
        // $validated = $request->validated();

        // $employee = new Employee();
        // $employee->first_name = $validated['first_name'];
        // $employee->last_name = $validated['last_name'];
        // $employee->email = $validated['email'];
        // $employee->phone = $validated['phone'];
        // $employee->company_id = $validated['company_id'];
        // $employee->save();

        // return redirect()->route('employees.index')
        //                 ->with('message', 'Employee has been created!');

                        $request->validate([
                            'first_name' => 'required',
                            'last_name' => 'required',
                            'email' => 'nullable',
                            'phone' => 'required',
                            'company_id' => 'required'
                        ]);
                        Employee::create($request->all());

                        return redirect()->route('dashboard')->with('sucess', 'created');

    }

    public function show($id)
    {
        $employee = Employee::findOrFail($id);
        return view('employees.show', ['employee' => $employee]);
    }

    public function edit($id)
    {
        $employee = Employee::findOrFail($id);
        $companies = Company::all();
        return view('employees.edit', ['employee' => $employee, 'companies' => $companies]);
    }

    public function update(EmployeeRequest $request, Employee $employee)
    {

        $validated = $request->validated();

        $employee->first_name = $validated['first_name'];
        $employee->last_name = $validated['last_name'];
        $employee->email = $validated['email'];
        $employee->phone = $validated['phone'];
        $employee->company_id = $validated['company_id'];
        $employee->save();

        return redirect()->route('employees.index')
                        ->with('success', 'Employee has been updated!');
    }

    public function destroy(Employee $employee)
    {
        $employee->delete();

        return redirect()->route('employees.index')->with('success', 'Employee has been deleted!');
    }
}
