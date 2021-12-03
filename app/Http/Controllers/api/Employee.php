<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Http\Resources\EmployeeIndexResource;
use App\Http\Resources\EmployeeShowResource;
use App\Models\Employees;
use Illuminate\Http\Request;

class Employee extends Controller
{
    public function index()
    {
    //  return Employees::all();
    return EmployeeIndexResource::collection(
        Employees::all()
    );
    }

    public function show($employeeId)
    {
    // return  Employees::findorFail($employeeId);
    return new EmployeeShowResource(Employees::findOrFail($employeeId));
    }
}
