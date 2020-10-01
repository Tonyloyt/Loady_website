<?php

namespace App\Http\Controllers;
use App\clientsaccounts;
use Illuminate\Http\Request; 
use \Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
  use Illuminate\Support\Facades\Session;  

class Clientinsertcontroller extends Controller
{
   
    public function init_createaccount(Request $request){
        $rules = [
			'firstname' => 'required|string',
			'lastname' => 'required|string|min:3|max:255',
			'email' => 'required|email|min:3|max:255', 
			'phone' => 'required|string|min:3|max:255',
			'address' => 'required|string|min:3|max:255',
			'zipcode' => 'required|string|min:3|max:255',
			'city' => 'required|string|min:3|max:255',
			'apt' => 'required|string|min:3|max:255',
			
		];
		 
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return back()->with('error', $validator->errors());
			//return response()->json(['errors'=>$validator->errors()]);
		}
		else{
            $data = $request->input();
			try{
				 
				if($data['password']==""){
					return back()->with('error', "password should not be null");
				}
				
				$client = new clientsaccounts;
                $client->name = $data['firstname']." ".$data['lastname'];
				$client->email = $data['email'];
				$client->password = $data['password'];//Hash::make($data['password']);
				$client->mobile = $data['phone'];
				$client->address = $data['address'];
				$client->zipcode = $data['zipcode'];
				$client->city = $data['city']; 
				$client->apt = $data['apt']; 
				 
				$client->save();
				
				Session::put('loginmail',$data['email']);
				
				 return redirect('accounts/clientdashboard');
				
				//return redirect('schedulepickup')->with('status',"Insert successfully");
				return back()->with('status', "Insert successfully");
			}
			catch(Exception $e){
				//return redirect('schedulepickup')->with('failed',"operation failed");
				return back()->with('error', $e);
			}
		}

	}
	



}
