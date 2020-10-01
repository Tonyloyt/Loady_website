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
  
  
use App\clientsaccounts; 
use App\clientsorders; 
use App\paymentmethod;



class APIController extends Controller
{
    

//******************************************* SAVE CLIENT ORDERDETAILS **********************************************//

function androidaddcustomerorder(Request $request){
	try{
				$scheduledate=$request->get('scheduledate');
				$drycleaning=$request->get('drycleaning');
				$washfold=$request->get('washfold');
				$hangdry=$request->get('hangdry');
				$status=$request->get('status');
				$email=$request->get('email');
				$long=$request->get('long');
				$lat=$request->get('lat');
	
	

		         $user = DB::select("select * from `users` where email='".$email."'"); 

				  $id="";
				   foreach($user as $res){
					   $id=$res->id; 
				   }
				  if($id==""){
					  return "client id could not be identified";
				  }
	
			
					$pickup = new clientsorders;
					$pickup->scheduleddate = $scheduledate;
					$pickup->drycleaning = $drycleaning;//$data2['chk_drycleaning'];
					$pickup->washfold = $washfold;//$data2['chk_washfold'];
					$pickup->hangdry = $hangdry;//$data2['chk_hangdry'];
					$pickup->status=$status;
					$pickup->customerid=$id;
					$pickup->latitude=$lat;
					$pickup->longtude=$long;
					
					//return $scheduledate.":".$drycleaning.":".$washfold.":".$hangdry.":".$status.":".$id;

					$pickup->save();
					return "ok";
				}
				catch(Exception $e){
					//return redirect('schedulepickup')->with('failed',"operation failed");
					return $e;
				}
}


//*******************************************END SAVE CLIENT ORDERDETAILS **********************************************//








//*******************************************SAVE CLIENT DETAILS **********************************************//

function androidaddcustomer(Request $request){
	try{
				$firstname=$request->get('firstname');
				$lastname=$request->get('lastname');
				$email=$request->get('email');
				$password=$request->get('password');
				$phone=$request->get('phone');
				$address=$request->get('address');
				$apartment=$request->get('apartment');
				$zipcode=$request->get('zipcode');
				$city=$request->get('city');
				
	
	
                $user = DB::select("select * from `users` where email='".$email."'"); 

				  $id="";
				   foreach($user as $res){
					   $id=$res->id; 
				   }
				  if($id!=""){
					  return "Email Already Exist";
				  }

  // return $firstname.":".$lastname.":".$email.":".$password.":".$phone.":".$address.":".$apartment.":".$zipcode.":".$city;	

	      
				
				$client = new clientsaccounts;
                $client->name = $firstname." ".$lastname;
				$client->email = $email;
				$client->password = $password;//Hash::make($data['password']);
				$client->mobile = $phone;
				$client->address = $address;
				$client->zipcode = $zipcode;
				$client->city = $city; 
				$client->apt = $apartment; 
				 
				$client->save();
				
				return $email;
		}
		  catch(Exception $e){
					return $e;
		}
	
}

//****************************************************END SAVE CLIENT DETAILS **********************************************//










//**************************************************** SAVE CLIENT PAYMENT DETAILS **********************************************//
function androidsavepayment(Request $request){


	
			try{
				
				$card=$request->get('card');
	            $email=$request->get('email');
				
				//GET CLIENT ID FROM MAIL
					$user = DB::select("select * from `users` where email='".$email."'"); 

				  $id="";
				   foreach($user as $res){
					   $id=$res->id; 
				   }
				  if($id==""){
					  return "client id could not be identified";
				  }
				/***********************/
				 
				$payment = new paymentmethod;
                $payment->card = $card;
                $payment->cardname = "-";//$data['cardname'];
				$payment->month = "-";//$data['month'];
				$payment->year = "-";//$data['year'];
				$payment->cvv = "-";//$data['cvv'];
				$payment->mybilling = "-";//$data['mybilling'];
				$payment->address = "-";//$data['paymentmethod_address'];
				$payment->zipcode = "-";//$data['paymentmethod_zipcode'];
				$payment->city = "-";//$data['paymentmethod_city'];
				$payment->status = "active";
				$payment->clientid = $id;
				 
				$payment->save();
				return "ok";
			}
			catch(Exception $e){
				return $e;
			}
		
	}
	
//**************************************************** END SAVE CLIENT PAYMENT DETAILS **********************************************//	







//****************************************************  COUNT CLIENT ORDERS **********************************************//	
function androidloadcustomerorder(Request $request){
	
		try{

	            $email=$request->get('email');
				
				$user = DB::select("select * from `users` where email='".$email."'"); 

				  $id="";
				   foreach($user as $res){
					   $id=$res->id; 
				   }
				  if($id==""){
					  return "client id could not be identified";
				  }
				
				$clientsorders = DB::select("select * from `clientsorders` where customerid='".$id."'");
				
				$count=0;
				foreach($clientsorders as $res){
					$count+=1;
				}
				
				return $count;
			}
			catch(Exception $e){
				return $e;
			}
	
}

//**************************************************** END COUNT CLIENT ORDERS **********************************************//







//****************************************************  LOGIN **********************************************//	
function androidcustomerlogin(Request $request){
	
		try{

	            $email=$request->get('email');
				$password=$request->get('password');
				
				$user = DB::select("select email from `users` where email='".$email."' and password='".$password."'");
		
		
		  if(!$user){
				return 'Wrong Login Details';
		  }else{
			  return "ok";
		  }
				
				
			}
			catch(Exception $e){
				return $e;
			}
	
}

//**************************************************** END LOGIN **********************************************//











//**************************************************** VIEW CUSTOMER PROFILE **********************************************//
function androidcustomerprofile(Request $request){

			try{
				
	            $email=$request->get('email');
				
			
				
				$user = DB::select("select * from `users` where email='".$email."'");
				
				$f_array=array('register' => array()); 
				 
				foreach($user as $res){
				
			   		$name=explode(" ",$res->name); 

					 $f_array['register'][] = array('firstname' => $name[0]);
					 $f_array['register'][] = array('lastname' => $name[1]);
					 $f_array['register'][] = array('phoneno' => $res->mobile);
					 $f_array['register'][] = array('email' => $res->email);
					 $f_array['register'][] = array('address' => $res->address); 
					 $f_array['register'][] = array('apt' => $res->apt);
					 $f_array['register'][] = array('zipcode' => $res->zipcode);
					 $f_array['register'][] = array('city' => $res->city);
					 $f_array['register'][] = array('password' => $res->password);
					 $f_array['register'][] = array('familytype' => $res->familytype);
					 $f_array['register'][] = array('textnotification' => $res->textnotification);
					 $f_array['register'][] = array('detergent' => $res->detergent);
					 $f_array['register'][] = array('fabricsofterner' => $res->fabricsofterner);
					 $f_array['register'][] = array('oxcleaner' => $res->oxcleaner);
					 $f_array['register'][] = array('starch' => $res->starch);
				
				
			

				}
				return json_encode($f_array);
			}
			catch(Exception $e){
				return $e;
			}
		
	}
	
//**************************************************** END VIEW CUSTOMER PROFILE **********************************************//	











//**************************************************** UPDATE CUSTOMER INFO **********************************************//
function androidupdatecustomerpasswordfamilytypetext(Request $request){

			try{
				
				$email=$request->get('email');
	            $password=$request->get('password');
				$textnotification=$request->get('textnotification');
				$familytype=$request->get('familytype');
				
			
				if($password!=""){
					$name = DB::update("update users set password='".$password."' where email='".$email."'");
				}
				
				if($familytype!=""){
					$name = DB::update("update users set familytype='".$familytype."' where email='".$email."'");
				}
				
				if($textnotification!=""){
					$name = DB::update("update users set textnotification='".$textnotification."' where email='".$email."'");
				}

			
				return "ok";
			}
			catch(Exception $e){
				return $e;
			}
		
	}
	
//**************************************************** END UPDATE CUSTOMER INFO **********************************************//	








//**************************************************** UPDATE CUSTOMER PREFFERENCE **********************************************//
function androidupdatecustomerprefference(Request $request){



			try{
				
				$email=$request->get('email');
	            $col=$request->get('col');

				$name = DB::update("update users ".$col." where email='".$email."'");

				return "ok";
			}
			catch(Exception $e){
				return $e;
			}
		
	}
	
//**************************************************** END UPDATE CUSTOMER PREFFERENCE **********************************************//	






//**************************************************** LOAD PRICES **********************************************//
function androidloaditemprices(Request $request){

			try{
			
				$stm = DB::select("select price,name from itemprices");
				
				$f_array=array('register' => array()); 
				 
				foreach($stm as $res){
				 
					 $f_array['register'][] = array($res->name => $res->price); 
				 
				}
				
				return json_encode($f_array);
				
				
	
			}
			catch(Exception $e){
				return $e;
			}
		
	}
	
//**************************************************** END LOAD PRICES **********************************************//	






//****************************************************  QUESTION **********************************************//	
function androidloadquestions(Request $request){
	
		try{

	            $question=$request->get('question');
				
				$user = DB::select("select answer from questions where question='".$question."' and status='active'");
		
		                  
							$answer=""; 
							foreach($user as $res){
								 $answer=$res->answer;
								
							}
							 if($answer==""){
									$answer="Nothing"; 
								}
							return $answer;
				
				
			}
			catch(Exception $e){
				return $e;
			}
	
}

//**************************************************** END QUESTION **********************************************//
	



//****************************************************  LOAD ORDERS **********************************************//	
function androidloadclientorders(Request $request){
	
		try{

	           $email=$request->get('email');
				
				$user = DB::select("select * from `users` where email='".$email."'"); 

				  $id="";
				   foreach($user as $res){
					   $id=$res->id; 
				   }
				  if($id==""){
					  return "client id could not be identified";
				  }
				
				$clientsorders = DB::select("select * from `clientsorders` where customerid='".$id."'");
				
		                  
				$f_array=array('register' => array()); 
				 
				foreach($clientsorders as $res){
				
					 $f_array['register'][] = array('scheduleddate' => $res->scheduleddate);
					 $f_array['register'][] = array('drycleaning' => $res->drycleaning);
					 $f_array['register'][] = array('status' => $res->status);
					 $f_array['register'][] = array('washfold' => $res->washfold);
					 $f_array['register'][] = array('hangdry' => $res->hangdry);
				
				}
				return json_encode($f_array);
				
				
			}
			catch(Exception $e){
				return $e;
			}
	
}

//**************************************************** END LOAD ORDERS **********************************************//





//**************************************************** IMAGE UPLOADER **********************************************//	
function androiduploadimage(Request $request){
	return "ffgefe";
		try{

					   if ($request->hasFile('image')) {
						//  Let's do everything here
						if ($request->file('image')->isValid()) {
							//
							$validated = $request->validate([
								'name' => 'string|max:40',
								'image' => 'mimes:jpeg,png|max:1014,jpg',
							]);
							$extension = $request->image->extension();
							$request->image->storeAs('/public', $validated['name']);
							$url = Storage::url($validated['name'].".".$extension);
							$file = File::create([
							   'name' => $validated['name'],
								'url' => $url,
							]);
							Session::flash('success', "Success!");
							return "uploaded";
						}
					}
					 
				
			}
			catch(Exception $e){
				return $e;
			}
	
}


function androidgettoken(Request $request){
	
		try{
			return csrf_token();
			
	      }
			catch(Exception $e){
				return $e;
			}
	
}


//**************************************************** END IMAGE UPLOADER **********************************************//	
	
}
?>