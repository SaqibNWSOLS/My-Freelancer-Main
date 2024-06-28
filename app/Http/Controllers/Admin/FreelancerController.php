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

class FreelancerController extends Controller
{
      public function index()
    {
          $freelancers = User::whereHas('roles', function($query) {
            $query->where('name', 'Freelancer');
        })->get();

        return Inertia::render('Admin/Freelancer/Index', ['freelancers' => $freelancers]);
    }
      public function show($id){
      $freelancer=User::where('id',$id)->first();
          return Inertia::render('Admin/Freelancer/Show', ['freelancer' => $freelancer]);
    }

       public function edit(User $user,$id)
    {
         $countries = Country::all();
        $states = State::all();
        $user=User::where('id',$id)->first();
        return Inertia::render('Admin/Freelancer/Edit', ['user' => $user,'countries'=>$countries,'states'=>$states ]);
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

        return redirect(route('freelancers.index', [], false));
    }

      public function destroy(User $user,$id)
    {
      $user=User::where('id',$id)->first();
        $user->delete();

      return redirect(route('freelancers.index', [], false));
    }
}
