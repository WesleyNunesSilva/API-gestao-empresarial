<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Employee;
use App\Http\Resources\EmployeeResource;

class EmployeeController extends Controller
{
    public function index() {
        $employees = Employee::paginate();

        return EmployeeResource::collection($employees);
    }

    public function store(Request $request) {
        $data = $request -> all();
        $employee = Employee::create($data);

        return new EmployeeResource($employee);
    }

    public function show(string $id) {
        $employee = Employee::findOrFail($id);

        return new EmployeeResource($employee);
    }

    public function employeesByCompany(string $companyId)
    {
        $employees = Employee::where('company_id', $companyId)->paginate();

        return EmployeeResource::collection($employees);
    }
}
 