<?php

namespace App\Http\Controllers;
namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use DB;
use App\clientsaccounts; 
use App\paymentmethod;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
  use Illuminate\Support\Facades\Session;  

use Auth;

class DashboardController extends Controller
{
   public function dashboard(){
		
	//$ordercount = DB::table('clientsorders')->whereIn('status', ['active'])->get();
	
	$loginemail=Session::get('loginmail');
	   
	   
	$user = DB::select("select * from `users` where email='".$loginemail."'");
	   
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
	   
	   
	$clientsorders = DB::select('select * from `clientsorders`');
    $paymentmethod = DB::select("select * from paymentmethod where clientid='".$id."'");
   
   
   foreach($user as $res){

   $subscr = DB::select("select * from subscription where clientid='".$id."'");

   $name=explode(" ",$res->name); 
	   
   $data = [
				'fname'  => $name[0],
	   			'lname' => $name[1],
				'email' =>  $res->email,
				'phone' =>  $res->mobile,
				'address' => $res->address,
				'apt' =>  $res->apt,
				'zipcode' =>  $res->zipcode,
				'city' =>  $res->city,
	   			'familytype' => $res->familytype,
				'textnotification' => $res->textnotification,
				'txtdetergent' => $res->detergent,
				'txtfabricsofterner' => $res->fabricsofterner,
				'txtoXcleaner' => $res->oxcleaner,
				'txtstarch' => $res->starch,
				   
			]; 
	}

   return view('accounts.clientdashboard')
											   ->with("data",$data)
											   ->with("clientsorders",$clientsorders)
											   ->with("paymentmethod",$paymentmethod)
											   ->with("subscription",$subscr)
											   ;
  
	}
	
	public function changepassword(Request $request){

		//return response()->json(['success'=>$request->pwdchange_email]);

		 $rules = [
		  'pwdchange_email'   => 'required|email',
          'oldpassword'  => 'required|min:3',
          'newpassword'  => 'required|min:3'
		 ];
		
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return response()->json(['success'=>$validator->errors()->all()]);
			//return back()->withErrors($validator);//->with('changepwd_error', $validator->errors()); 
		}else{
			
			
			//make hash from given pwd
			$pwdhash=$request->get('oldpassword');//Hash::make($request->get('password'));

			//query db against give email & password
			$user = DB::select("select email from `users` where email='".$request->post('pwdchange_email')."' and password='".$pwdhash."'");
			
			if(!$user){
				return response()->json(['success'=>"Wrong Login Details (Email or password)"]);
				//return back()->with('changepwd_error', 'Wrong Login Details (email or password)');
		    }else{
				 
				$useremails = Session::get('loginmail');
				if ($useremails!="")
				{
					//$useremails = Auth::user()->email;
				}else{
					//return back()->with('error', "Pls login first");
					return response()->json(['success'=>"Pls login first"]);
				}
				
				$data = $request->input();
				$name = DB::update("update users set password='".$data['newpassword']."' where email = '".$data['pwdchange_email']."'");
			
				 //return back()->with('success_alert', "successful updated");
				 return response()->json(['success'=>"Successful Update"]);
			}
			
		}
		
	}
	
	public function updateprofile(Request $request){
		//return response()->json(['success'=>$request->notification]);
		
		$rules = [
			'firstname' => 'required|string',
			'lastname' => 'required|string|min:3|max:255',
			'email' => 'required|email|min:3|max:255',
			'phone' => 'required|string|min:3|max:255',
			'address' => 'required|string|min:3|max:255',
			'zipcode' => 'required|string|min:3|max:255',  
			'txtaboutyou' => 'required|string|min:3|max:255',
			'notification' => 'required|string|min:3|max:255',

		];
		
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			
			return response()->json(['success'=>$validator->errors()->all()]);
			//return back()->with('error', $validator->errors());
			//return response()->json(['errors'=>$validator->errors()]);
		}
		else{
			$useremails = Session::get('loginmail');//"tata@gmail.com";//::user()->email;
			//return response()->json(['success'=>"Successful Update"]);
			$data = $request->input();
			//return "working";
			//$updates = DB::table('users')
			//return response()->json(['success'=>$data['firstname']]);
			$name = DB::update("update users set name='".$data['firstname'].
			" ".$data['lastname']."',email='".$data['email']."',mobile='".
			$data['phone']."',address='".$data['address'].
			"',apt='".$data['apt']."',zipcode='".
			$data['zipcode']."',familytype='".$data['txtaboutyou']."',textnotification='".
			$data['notification']."' where email = '".$useremails."'");
			

			return response()->json(['success'=>"Successful Update"]);
		
			//return back()->with('error', "Successful Update");
		}
		//$updates = DB::table('users')
		//$name = DB::update('update name where email = 'paul@gmail.com'');
	//return Auth::user()->email;
	}
 

	public function savepayment(Request $request){
		//return response()->json(['success'=>$request->paymentmethod_city	]);

        $rules = [
			'card' => 'required|string',
			'month' => 'required|string',
			'year' => 'required|integer',
			'cvv' => 'required|string|min:3|max:255',
			'cardname' => 'required|string|min:3|max:255', 
			'paymentmethod_zipcode' => 'required|string|min:3|max:255',
			'paymentmethod_address' => 'required|string|min:3|max:255',
			'paymentmethod_city' => 'required|string|min:3|max:255',
			
		];
		
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			 return response()->json(['success'=>$validator->errors()->all()]);
			//return back()->with('error', $validator->errors());
		}
		else{
            $data = $request->input();
			try{
				
				//GET CLIENT ID FROM MAIL
					$user = DB::select("select * from `users` where email='".Session::get('loginmail')."'"); 

				  $id="";
				   foreach($user as $res){
					   $id=$res->id; 
				   }
				  if($id==""){
					return response()->json(['success'=>"client id could not be identified"]);
					 // return "client id could not be identified";
				  }
				/***********************/
				
				$payment = new paymentmethod;
                $payment->card = $data['card'];
                $payment->cardname = $data['cardname'];
				$payment->month = $data['month'];
				$payment->year = $data['year'];
				$payment->cvv = $data['cvv'];
				$payment->mybilling = $data['mybilling'];
				$payment->address = $data['paymentmethod_address'];
				$payment->apt = $data['paymentmethod_apt'];
				$payment->zipcode = $data['paymentmethod_zipcode'];
				$payment->city = $data['paymentmethod_city'];
				$payment->status = "active";
				$payment->clientid = $id;

				//$stat = "insert into paymentmethod(card,cardname,month,year,cvv,mybilling,address,apt,zipcode,city,clientid) values('".$data['card']."','".$data['cardname']."','".$data['month']."','".$data['year']."','".$data['cvv']."','".$data['mybilling']."','".$data['paymentmethod_address']."','".$data['paymentmethod_apt']."','".$data['paymentmethod_zipcode']."','".$data['paymentmethod_city']."','')";
				
                                
				//return response()->json(['success'=>$stat]);
				
				
				$payment->save();
				//return response()->json(['success'=>"sdfghjkl;'"]);

				//
				return response()->json(['success'=>"Successful Updated"]);
				//return back()->with('error', "Insert successfully");
			}
			catch(Exception $e){
				//return back()->with('error', $e);
				return response()->json(['success'=>"eer"]);
			}
		}
	}

	public function savecleaningpreferences(Request $request)
	{
		//return response()->json(['success'=>$request->txtstarch]);
		$rules =[
			'txtdetergent' => 'required|string',
			'txtfabricsofterner' => 'required|string',
			'txtoXcleaner' => 'required|string',
			'txtstarch' => 'required|string',

		];
		$validator = Validator::make($request->all(),$rules);
		if ($validator->fails()) {
			return response()->json(['success'=>$validator->errors()->all()]);
			//return back()->with('error', $validator->errors());
	}else{

		$data3 = $request->input();
	
		$name = DB::update("update users set detergent='".$data3['txtdetergent']."',fabricsofterner='".$data3['txtfabricsofterner']."',oxcleaner='".$data3['txtoXcleaner']."',starch='".$data3['txtstarch']."'");
		return response()->json(['success'=>'sucessfull saved']);
		//return back()->with('error', "successful saved");
	}

		
	}

	public function savedeliverypreferences(Request $request)
	{
		//return response()->json(['success'=>$request->doorbell]);
		$rules = [
		'delivery_instructions' => 'required|string|min:3|max:255',
		//'doorbell' => 'required|string',
		];
	
	$validator = Validator::make($request->all(),$rules);
	if ($validator->fails()) {
		return response()->json(['success'=>$validator->errors()->all()]);
		//return back()->with('error', $validator->errors());
	}
	else{
		$rs="";
		if($request->has('rushservice_washfold')){
			$rs="Always use Next -Day";
		}
		$rd="";
		 if($request->has('rushservice_drycleaning')){
			$rd="yes";
		 }
	
		$data2 = $request->input();
	
		$name = DB::update("update users set delivery_instructions='".$data2['delivery_instructions']."',doorbell='".$data2['doorbell']."',rushservice_washfold='".$rs."',rushservice_drycleaning='".$rd."'");
		
		return response()->json(['success'=>"successful saved"]);
		//return back()->with('error', "successful saved");
	} 
}
	public function viewadmin()
	{
		return view("/accounts/admin");
	}

	public function users() {
		$count = DB::select('select count(*) as total from users');
		return view('accounts.admin',['count' => $count]);
		
  }
	
	
	public function client(){
		return view('/accounts/clientdashboard');
	}


	public function orderhistory(){
		//return "I'fine now";
		$clientsorders = DB::select('select * from clientsorders');
        return view('accounts.clientsdashboard',['clientsorders'=>$clientsorders]);
	}
	
public function store(Request $request)
 {
		  return response()->json(['success'=>$request->name]);
        $grocery = new Grocery();
        $grocery->name = $request->name;
        $grocery->type = $request->type;
        $grocery->price = $request->price;

        $grocery->save();
        return response()->json(['success'=>'Data is successfully added']);
 }

 /** validation */
 public function valid(){
	 return view('/message');
 }	
 public function updateprofile1(Request $request){
	 
	$rules = [
		'firstname' => 'required|string',
		'lastname' => 'required|string|min:3|max:255',
		'email' => 'required|email|min:3|max:255',
		'password' => 'required|string|min:3|max:255',
		'phone' => 'required|string|min:3|max:255',
		'address' => 'required|string|min:3|max:255',
		'zipcode' => 'required|string|min:3|max:255',
		'city' => 'required|string|min:3|max:255',
		'finalstatus' => 'required|string|min:3|max:255',
		
	];

	$validator = Validator::make($request->all(),$rules);
	if ($validator->fails()) {
		//return response()->json(['success'=>"am fine"]);
		return response()->json(['success'=>$validator->errors()->all()]);
		//return back()->with('error', $validator->errors());
	}else{
		$data = $request->input();
		try{
			
			$finalstatus=$data['finalstatus'];
			if($finalstatus!="varified"){
				return response()->json(['success'=>"All Fields Must be verified"]);
			}
			
			
			
			      $user = DB::select("select * from `users` where email='".$data['email']."'"); 

				  $id="";
				   foreach($user as $res){
					   $id=$res->id; 
				   }
				  if($id!=""){
					  return response()->json(['success'=>"E-Mail Already Exist"]);
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
				
				return response()->json(['success'=>"ok"]);
				//return redirect('accounts/clientdashboard');
		}
		catch(Exception $e){
			//return redirect('schedulepickup')->with('failed',"operation failed");
			//return back()->with('error', $e);
			return response()->json(['success'=>"$e"]);
			
		}
	}

	
}
 public function reloadpage(){
	 return response()->json(['success'=>"pop up"]);
 }

 public function subscription(Request $request){
	//get user email
	$loginemail=Session::get('loginmail');
	//get user id
	$clientid = DB::select("select id from `users` where email='".$loginemail."'");
	$id="";
	foreach($clientid as $res){
		$id=$res->id; 
	}
	//insert to subscription table
	$sub = DB::insert("insert into subscription (email,clientid) values('".$loginemail."','".$id."')");
	return response()->json(['success'=>"You subscribed"]);
	//return response()->json(['success'=>"select id from `users` where email='".$loginemail."'"]);
}

public function removesub(Request $request){
	//get user email
   $loginemail=Session::get('loginmail');
   //remove user from subscribers
   $rm = DB::delete("delete from subscription where email='".$loginemail."'");

   return response()->json(['success'=>"you unsubscribed"]);
}

}
