<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\User;
use Spatie\Permission\Traits\HasRoles;

class EmployeeController extends Controller
{
    public function index()
    {
          $employees = User::whereHas('roles', function($query) {
            $query->where('name', 'Employer');
        })->get();

        return Inertia::render('Employee/Index', ['employees' => $employees]);
    }
}
