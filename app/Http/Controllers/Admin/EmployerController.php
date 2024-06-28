<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;
use Inertia\Response;
use App\Models\User;
use Spatie\Permission\Traits\HasRoles;
use App\Models\Setting\Cities;
use App\Models\Setting\State;
use App\Models\Setting\Country;

class EmployerController extends Controller
{
     public function index()
    {
          $employees = User::whereHas('roles', function($query) {
            $query->where('name', 'Employer');
        })->get();
     
        return Inertia::render('Admin/Employer/Index', ['employees' => $employees]);
    }

      public function edit(User $user,$id)
    {
         $countries = Country::all();
        $states = State::all();
        $user=User::where('id',$id)->first();
        return Inertia::render('Admin/Employer/Edit', ['user' => $user,'countries'=>$countries,'states'=>$states ]);
     }

    public function show($id){
      $employer=User::where('id',$id)->first();
          return Inertia::render('Admin/Employer/Show', ['employer' => $employer]);
    }

     public function update(Request $request, User $user,$id)
    {
       $user=User::where('id',$id)->first();
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|max:255|unique:users,email,' . $user->id,
            'status' => 'required|in:Active,In-Active',
        ]);

        $user->update($validatedData);

        return redirect(route('employees.index', [], false));
    }

     public function destroy(User $user,$id)
    {
      $user=User::where('id',$id)->first();
        $user->delete();

      return redirect(route('employees.index', [], false));
    }
}
