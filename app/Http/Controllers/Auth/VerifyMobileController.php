<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\ValidationException;
use Validator;
use Inertia\Inertia;
use Inertia\Response;

class VerifyMobileController extends Controller
{
    
    public function create(): Response
    {
        return Inertia::render('Auth/VerifyMobile', []);
    }
}
