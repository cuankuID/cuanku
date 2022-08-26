<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

class DashboardUserController extends Controller
{
    public function index(Request $request)
    {
        
        return view('dashboard.admin.users.index', [
            'roles' => Role::all(),
            'users' => User::filter(request(['search']))->paginate(10)
        ]);
    }

    public function updateRole(Request $request, User $user)
    {
        User::where('id', $user->id)->update(['role_id' => $request->role_id]);

        return redirect('/dashboard/users');
    }

    public function update(Request $request, User $user)
    {
        if($request->status == 1){
            $user->status = 0;
            $user->save();
        }
        else{
            $user->status = 1;
            $user->save();    
        }

        return redirect('/dashboard/users');
    }
}
