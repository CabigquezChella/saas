<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class SubController extends Controller
{

    public function subscribe()
    {
        return view ("auth.subcribe");
    }



    public function subUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:5|max:12',
        ]);
        
        $user = User::where('email', '=', $request->email)->first();
        
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('dashboardv1');
            } else {
                return back()->with('fail', 'Password does not match.');
            }
        } else {
            return back()->with('fail', 'This email is not registered.');
        }
        
    }

    public function dashboardv1()
    {
        return view('page.dashboardv1');
    }



}
