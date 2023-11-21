<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Company;
use App\Http\Resources\CompanyResource;

class CompanyController extends Controller
{
    public function index() {
        $companies = Company::paginate();

        return CompanyResource::collection($companies);
    }

    public function store(Request $request) {
        $data = $request -> all();
        $company = Company::create($data);

        return new CompanyResource($company);
    }

    public function show(string $id) {
        $company = Company::findOrFail($id);

        return new CompanyResource($company);
    }
}
