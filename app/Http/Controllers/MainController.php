<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;  
use App\Rules\MatchOldPassword; 
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;  
use Illuminate\Support\Facades\Validator;

use Auth; 
use App\User;
use DB;
  
  
use App\clientsorders; 
 

class MainController extends Controller
{
    function index()
    {
     return view('index');
    }
	
	 function checklogin(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required|alphaNum|min:3'
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
     }

    }

    function successlogin()
    {
     return view('successlogin');
    }

    function logout()
    {
	 //Session::put('loginmail','');
     Auth::logout();
     return redirect('/');
    }
	
	function getout(){
		Session::put('loginmail','');
     return redirect('/');
	}
	
	function login()
	{
	  return view('accounts.login');
	}	

	
	function signup()
	{
	  return view('customers.start.start');
	}	
	
	function schedule(Request $request)
	{  
		$loginemail="";
		 
		
	  return view('customers.start.schedule')
		  ->with('zipcode',$request->post('zipcode'))
		  ->with('login_email',$loginemail)
		  ->with('futurefunction','createaccount');
	}	
	
	function schedule_direct(Request $request)
	{  
		$loginemail="";
		//Auth::user()->email;
		$loginemail=Session::get('loginmail');
		
		
		$futurefunction='customers/start/createpickup';
		
		if ($loginemail=="")
		{ 
			return redirect()->to('/accounts/login');
			//return view('../../accounts/login');//MainController::login();
		}
		
		
	  return view('customers.start.schedule')
		  ->with('zipcode',$request->post('zipcode'))
		  ->with('login_email',$loginemail)
		  ->with('futurefunction',$futurefunction);
	}	
	
	function createpickup(Request $request){
			$rules = [
			'input__scheduleddate' => 'required|string',
			];

		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return back()->with('error', $validator->errors());
		}
		else{
				$chkdry="";
				if($request->has('chk_drycleaning')){
					$chkdry="Dry Cleaning.";
				}
				$chkwash="";
				 if($request->has('chk_washfold')){
					$chkwash="Wash & fold";
				 }
				 $chkhang="";
				 if($request->has('chk_hangdry')){
					$chkhang="Hang Dry";
				 }

			
			     //GET CLIENT ID FROM MAIL
					$user = DB::select("select * from `users` where email='".Session::get('loginmail')."'"); 

				  $id="";
				   foreach($user as $res){
					   $id=$res->id; 
				   }
				  if($id==""){
					  return "client id could not be identified";
				  }
				/***********************/
			
				$data2 = $request->input();

				try{
					$pickup = new clientsorders;
					$pickup->scheduleddate = $data2['input__scheduleddate'];
					$pickup->drycleaning = $chkdry;//$data2['chk_drycleaning'];
					$pickup->washfold = $chkwash;//$data2['chk_washfold'];
					$pickup->hangdry = $chkhang;//$data2['chk_hangdry'];
					$pickup->status='Waiting Pickup';
					$pickup->clientid=$id;

					$pickup->save();
					return back()->with('error', "Insert successfully");
				}
				catch(Exception $e){
					//return redirect('schedulepickup')->with('failed',"operation failed");
					return back()->with('error', $e);
				}
		}
		 
	}
	
	function changepassword(){
		DB::update('update users set password = ? where id = ?',[Hash::make($request->POST('password')),1]);
		    

        dd('Password change successfully.');
	}
	
	function submitlogin(Request $request){
		$this->validate($request, [
		  'email'   => 'required|email',
          'password'  => 'required|min:3'
		 ]);

		
		  $user_data = array(
		  'email'  => $request->post('email'),
          'password' => $request->get('password')
		 ); 

		//make hash from given pwd
		$pwdhash=$request->get('password');//Hash::make($request->get('password'));
		
		//query db against give email & password
		$user = DB::select("select email from `users` where email='".$request->post('email')."' and password='".$pwdhash."'");
		
		
		  if(!$user){
				return back()->with('error', 'Wrong Login Details');
		  }
		  if($user){
			  Session::put('loginmail',$request->post('email'));
			  
				return redirect('accounts/clientdashboard');
		  }
		
		
		 /*if(Auth::attempt($user_data))
		 {
		  return redirect('accounts/clientdashboard');
		 }
		 else
		 {
		  return back()->with('error', 'Wrong Login Details');
		 }*/
	}
	
	
	function schedulepickup(){
		return view('schedulepickup');
	}
	
	function clientdashboard(){
		return view('clientdashboard');
	}
	
	function services_pricing(){
		return view('services_pricing');
	}

	function loadlyrepeater(){
		return view('loadlyrepeater');
	}

	function attheoffice(){
		return view('attheoffice');
	}

	function drycleaning(){
		return view('drycleaning');
	}

	function otherservices(){
		return view('otherservices');
	}
	function locationsanfransisco(){
		return view('location');
	}
	
	function ajaxcall(){
		return view('ajaxpage');
	}
	

	
}
?>