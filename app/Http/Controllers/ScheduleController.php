<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 

use App\Rules\MatchOldPassword;

use Illuminate\Support\Facades\Hash;

use Auth; 
use App\User;
use DB;

class ScheduleController extends Controller
{
     
public function createaccount(Request $request)
    {
		 $v=$request->get('chk_drycleaning');
		 return $v;
     /*
         $this->validate($request, [
      'input__scheduleddate'   => 'required|date',
      
     ]);

     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );

     if(Auth::attempt($user_data))
     {
      return redirect('main/successlogin');
     }
     else
     {
      return back()->with('error', 'Wrong Login Details');
     }*/

    }
 
	
}
?>