<!DOCTYPE html>
<html>
 <head>
  <title>Simple Login System in Laravel</title>
  <meta name="_token" content="{{csrf_token()}}" />
   
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
  <style type="text/css">
	  
	  @import url('https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300;800&display=swap');

		@import url('https://fonts.googleapis.com/css2?family=Asap&display=swap');

		@import url('https://fonts.googleapis.com/css2?family=Monoton&display=swap');
	  
	  
   .box{
    width:600px;
    margin:0 auto;
    border:1px solid #ccc;
   }
	  
	  html,body {
		margin:0;
		padding:0;
		background: #fff;
	  }
 
.loadly_titles{
	font-family:'Merriweather Sans', sans-serif; 
	font-size:4em;
	font-weight:800;
	color:#453536;
}


.loadly_titles_sub2{
	font-family:'Merriweather Sans', sans-serif; 
	font-size:3em;
	font-weight:800;
	color:#453536;
}

.loadly_titles_sub1{ 
	font-family: 'Asap', sans-serif;
	font-size:2em; 
	font-weight:500
}

.loadly_contents_fonts{
	font-family:'Montserrat',sans-serif; 
	color:#453536; 
	font-size:1.2em; 
	line-height:1.5em;
	padding-top: 0px;
	}

.loadly_p{
	font-family:'Montserrat',sans-serif; 
	color:#1d6076; 
	font-size:1.2em; 
	line-height:1.5em;
	letter-spacing: 0.1em;
}

	  
	  * {
  margin:0;
  padding:0;
}
#wrapper {
  width:calc(100% - 120px);
  height:100px;
  background-color:#dbdbdb;
  padding:0 60px;
  margin-top:60px;
  font-family:helvetica;
  overflow:hidden;
  position:relative;
  z-index:99; 
}
.arrow {
  display:block;
  width:60px;
  height:60px;
  line-height:60px;
  text-align:center;
  background-color:#cccccc;
  font-weight:bold;
  cursor:pointer;
  position:absolute;
  top:0;
  z-index:101;
}
.arrow:first-of-type {
  left:0;
}
.arrow:nth-of-type(2) {
  right:0; 
}
#nav {
  width:auto;
  height:100px;
  overflow:hidden;
  list-style-type:none;
  white-space:nowrap;
  transition:2.0s;
}
#nav li {
  display:inline-block;
  height:100px;
  line-height:60px;
  font-size:13px;
  padding:0 30px;
}

	  
	  .box_shadow{
		    -webkit-box-shadow: 3px 5px 34px 2px rgba(224,221,224,1);
			-moz-box-shadow: 3px 5px 34px 2px rgba(224,221,224,1);
			box-shadow: 3px 5px 34px 2px rgba(224,221,224,1); 
	  }
	  
	 
.button {
	text-decoration:none;
	font-family:Arial;
	box-shadow:inset #ffffff 2px 5px 27px -48px,#e0c69c 2px 2px 33px;
	o-box-shadow:inset #ffffff 2px 5px 27px -48px,#e0c69c 2px 2px 33px;
	-moz-box-shadow:inset #ffffff 2px 5px 27px -48px,#e0c69c 2px 2px 33px;
	-webkit-box-shadow:inset #ffffff 2px 5px 27px -48px,#e0c69c 2px 2px 33px;
	background:#ea9605;
	background:-o-linear-gradient(90deg, #ea9605, #ea9605);
	background:-moz-linear-gradient( center top, #ea9605 5%, #ea9605 100% );
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ea9605), color-stop(1, #ea9605) );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ea9605', endColorstr='#ea9605');
	background:-webkit-linear-gradient(#ea9605, #ea9605);
	background:-ms-linear-gradient(#ea9605, #ea9605);
	background:linear-gradient(#ea9605, #ea9605);
	text-indent:0px;
	line-height:30px;
	-moz-border-radius:0px;
	-webkit-border-radius:0px;
	border-radius:0px;
	text-align:center;
	vertical-align:middle;
	display:inline-block;
	font-size:20px;
	color:#ffffff;
	width:40%;
	height:60px;
	margin-top: 20px;
	transition: top ease 0.5s;
	padding:13px;
	border-color:#659dab;
	border-width:0px;
	border-style:solid;
}

.button:active {
	box-shadow:inset #ffffff 2px 5px 27px -48px,#e0c69c 2px 0 33px;
	o-box-shadow:inset #ffffff 2px 5px 27px -48px,#e0c69c 2px 0 33px;
	-moz-box-shadow:inset #ffffff 2px 5px 27px -48px,#e0c69c 2px 0 33px;
	-webkit-box-shadow:inset #ffffff 2px 5px 27px -48px,#e0c69c 2px 0 33px;
	position:relative;
	top:2px
}

.button:hover {
	
	
	box-shadow:inset #ffffff 2px 5px 27px -48px,#e0c69c 2px 0 33px;
	o-box-shadow:inset #ffffff 2px 5px 27px -48px,#e0c69c 2px 0 33px;
	-moz-box-shadow:inset #ffffff 2px 5px 27px -48px,#e0c69c 2px 0 33px;
	-webkit-box-shadow:inset #ffffff 2px 5px 27px -48px,#e0c69c 2px 0 33px;
	position:relative;
	top:-3px;
		  
	background:-o-linear-gradient(90deg, #ea9605, #ea9605);
	background:-moz-linear-gradient( center top, #ea9605 5%, #ea9605 100% );
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #ea9605), color-stop(1, #ea9605) );
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ea9605', endColorstr='#ea9605');
	background:-webkit-linear-gradient(#ea9605, #ea9605);
	background:-ms-linear-gradient(#ea9605, #ea9605);
	background:linear-gradient(#ea9605, #ea9605);
}
 

input:focus ~ .floating-label,
input:not(:focus):valid ~ .floating-label{
  top: -35px;
  bottom: 10px;
  left: -150px;
  font-size: 11px;
  opacity: 1;
}

.inputText {
  font-size: 14px;
  width: 200px;
  height: 35px;
}

.floating-label {
  position: relative;
  pointer-events: none;
  left: -150px;
  top: 0px;
  transition: 0.2s ease all;
}
 
@import url(https://fonts.googleapis.com/css?family=Roboto:400,500,600);

/* ---------------------------------------------- */
/* -------   Required CSS (customizable)  ------- */
/* ---------------------------------------------- */

:root {
  --color__accent: #6200ee;

  --field__background: #f5f5f5;
  --field__background--hover: #e9e9e9;
  --input__border: rgba(0, 0, 0, 0.42);
  --input__border--hover: rgba(0, 0, 0, 0.62);
  --label__color: #222;

  --font__size: 16px;
  --font__family: Roboto, Arial, sans-serif;
}

.floating {
  margin-bottom: 2rem;
  background-color: var(--field__background);
  transition: background-color 0.2s ease;
  border-top-left-radius: 4px;
  border-top-right-radius: 4px;
}

.floating:hover,
.floating:focus-within {
  background-color: var(--field__background--hover);
}

.floating__input {
	font-size: 14px;
  width: 200px;
  height: 35px;
  padding: 1.8rem 1rem 0.6rem;
  font-size: 1rem;
   
  transition: border-color 0.2s ease;
  caret-color: var(--color__accent);
}

	  
.floating:hover .floating__input {
  border-color: var(--input__border--hover);
}

.floating__input::placeholder {
  color: rgba(0, 0, 0, 0);
}

.floating__label {
  display: block;
  position: relative;
  max-height: 0;
  font-weight: 500;
  pointer-events: none;
}

.floating__label::before {
  color: var(--label__color);
  content: attr(data-content);
  display: inline-block;
  filter: blur(0);
  backface-visibility: hidden;
  transform-origin: left top;
  transition: transform 0.2s ease;
  left: 1rem;
  position: relative;
}

 

.floating__input:focus + .floating__label::after {
  transform: scale3d(1, 1, 1);
  opacity: 1;
}

.floating__input:placeholder-shown + .floating__label::before {
  transform: translate3d(0, -2.2rem, 0) scale3d(1, 1, 1);
}

.floating__label::before,
.floating__input:focus + .floating__label::before {
  transform: translate3d(0, -5.12rem, 0) scale3d(0.82, 0.82, 1);
}

.floating__input:focus + .floating__label::before {
  color: var(--color__accent);
}


 
.nav ul {
  list-style: none; 
  text-align: left;
  padding: 0;
  margin: 0;
}
.nav li {
    font-family: 'Oswald', sans-serif;
    width: auto;
    border-bottom: none;
    height: 50px;
	margin:0 30px 0 30px;
    line-height: 50px;
    font-size: 1.4em; 
  }
 
  /* Option 1 - Display Inline */
  .nav li {
    display: inline-block;
    margin-right: -4px;
  }
.nav a {
  text-decoration: none;
  color: #453536;
  display: block;
  transition: .3s background-color;
}
 
.nav a:hover {
  color: #005f5f;
}
 
.nav a.active { 
  color: #fff;
  cursor: default;
}
 
.nav2 li{
	display:block !important;
	height: auto;
	line-height: 2em;
	margin:0 0px 0 0px;
}

.nav2 a.active { 
   color: #453536;
}

.box_shadow{
		    -webkit-box-shadow: 3px 5px 34px 2px rgba(224,221,224,1);
			-moz-box-shadow: 3px 5px 34px 2px rgba(224,221,224,1);
			box-shadow: 3px 5px 34px 2px rgba(224,221,224,1); 
	  }
 
 
 
  </style>

<style>
	  .loadly_titles_sub333{
	font-family:'Merriweather Sans', sans-serif; 
	font-size:2.9em;
	font-weight:800;
	color:#453536;
	padding-top: 10px;
	
	}
  .loadly_titles_sub3{
	font-family:'Merriweather Sans', sans-serif; 
	font-size:1.7em;
	font-weight:800;
	color:#453536;
	padding-top: 10px;

	
	}
  .loadly_contents_fonts11{
	font-family:'Montserrat',sans-serif; 
	color:#453536; 
	font-size:1.2em; 
	line-height:0em;
	padding-top: 5px;
	}
	 
   .cinput{
    border: 1px solid #ccc;
    border-radius: 1px;
    height: 30px;
    font-size: 14px;
}
.floating__input:focus + .floating__label::after {
  transform: scale3d(1, 1, 1);
  opacity: 1;
}

.floating__input:placeholder-shown + .floating__label::before {
  transform: translate3d(0, -2.2rem, 0) scale3d(1, 1, 1);
}

.floating__label::before,
.floating__input:focus + .floating__label::before {
  transform: translate3d(0, -5.12rem, 0) scale3d(0.82, 0.82, 1);
}

.floating__input:focus + .floating__label::before {
  color: var(--color__accent);
}
 </style>
	 
<script>
	 function showpickup(){
		 document.getElementById("div_schedulepickup").style.display="block";
		 document.getElementById("div_zipcode").style.display="none";
	 }
	
	function openaccount(){
		document.getElementById("div_account").style.display="block";
		 document.getElementById("div_schedulepickup").style.display="none";
	}

	var elements = document.getElementsByClassName("arrow");
	
	var myFunction = function() {
    //var attribute = this.getAttribute("data-myattribute");
    alert("asdf");
};
	
 for (var i = 0; i < elements.length; i++) {
    elements[i].addEventListener('click', myFunction, false);
}
      
      
 function r() { 
        var navwidth = $("#nav");
        navwidth.scrollLeft(navwidth.scrollLeft() - 200);
    }
 
 
    function l() {
        var navwidth = $("#nav");
        navwidth.scrollLeft(navwidth.scrollLeft() + 200);
    }	

    function showusers(){
        document.getElementById("div_users").style.display="inline-block";

     }
     
	
	
</script>

<script>
     function showOverview(){
      document.getElementById("div_overview").style.display="inline-block";
		  document.getElementById("div_activeorders").style.display="none";
      document.getElementById("div_allorders").style.display="none";
      document.getElementById("div_initiatepickup").style.display="none";
      document.getElementById("div_manageaccounts").style.display="none";
     }
     function showActiveorders(){
      document.getElementById("div_overview").style.display="none";
		  document.getElementById("div_activeorders").style.display="inline-block";
      document.getElementById("div_allorders").style.display="none";
      document.getElementById("div_initiatepickup").style.display="none";
      document.getElementById("div_manageaccounts").style.display="none";
     }
     function showAllorders(){
      document.getElementById("div_overview").style.display="none";
		  document.getElementById("div_activeorders").style.display="none";
      document.getElementById("div_allorders").style.display="inline-block";
      document.getElementById("div_initiatepickup").style.display="none";
      document.getElementById("div_manageaccounts").style.display="none";
     }
     function showInitiatepickup(){
      document.getElementById("div_overview").style.display="none";
		  document.getElementById("div_activeorders").style.display="none";
      document.getElementById("div_allorders").style.display="none";
      document.getElementById("div_initiatepickup").style.display="inline-block";
      document.getElementById("div_manageaccounts").style.display="none";
     }
     function showManageaccounts(){
      document.getElementById("div_overview").style.display="none";
		  document.getElementById("div_activeorders").style.display="none";
      document.getElementById("div_allorders").style.display="none";
      document.getElementById("div_initiatepickup").style.display="none";
      document.getElementById("div_manageaccounts").style.display="inline-block";
     }
</script>


<script>
                
</script>

 </head>
 <body>
 <!-- addedd-->
<div id="stch"  style="display:none; position: absolute; width: 20%; height:15%;">
<span id="myPopup" style="border:1px solid grey;">status changed</span>
</div>

  <br />
   <!--<div style="width:100%; height: 100px; background: #ccc;"></div>-->
	 
	<div style="display: inline-block; width: 25%; height: 100%; position: fixed; background: whitesmoke;">
	   <div style="padding-left: 70px;" >
		 <p class="loadly_titles_sub333" >Work <br />Admin</p> <br>
	 </div>
     <div class="nav nav2" style="padding-left: 70px;" > <ul>

    <li><a href="javascript:showOverview()">Overview</a> </li>
   <li><a href="javascript:showActiveorders()"> Active Orders</a> </li>
   <li><a href="javascript:showAllorders()"> All Oders</a> </li>
   <li><a href="javascript:showInitiatepickup()"> Initiate pickup</a> </li>
   <li><a href="javascript:showManageaccounts()"> Manage Account</a> </li>

    </ul>

    </div>
	<div class="nav nav2" style="margin-top: 20%; padding-left: 70px;">
	 <ul>
	 <li> <a href="">Homepage</a></li>
	 <li> <a href=""> Log out</a></li> 
	 </ul>
	</div>

	</div>
	 

	   
	   <div style="display:inline-block; width: 74%; height: 100%; margin-left: 2%; float: right; padding-left: 20px; background: white;">
<!-- Overview -->
		 <div id="div_overview" style="dispplay: inline-block; width: 72%; margin-top: 10px;">
     <div style=" padding-top: 20px;">
		 <span class="loadly_titles_sub3" >Overview</span>
		 </div>

		 <div style="margin-top: 3%;">
		 <span>Location: <a href="#">San Francisco</a></span>
		 </div>

		 <div style="margin-top: 4%;">
		 <div id="div_users" class="box_shadow" style="display: inline-block; border:1px solid white; width: 27%; height: 200px; margin-right: 3%">
         <span style="text-align: center">  Total Users  <br />  </span>
     </div>
		 <div class="box_shadow" style="display: inline-block; border:1px solid white; width: 27%; height: 200px; margin-right: 3%">2</div>
		 <div class="box_shadow" style="display: inline-block; border:1px solid white; width: 27%; height: 200px;" >3</div>
		 </div>
     </div>
<!-- Activeorders -->
     <div id="div_activeorders" style=" display: none; width: 72%; margin-top: 10px;">
     <span class="loadly_titles_sub3" style="padding-left: 30px;"> Active Orders</span>

     <div class="alert_statuschange alert-success" style="display:none"></div>
     <table class="lst" border="3">
			<tr  bgcolor="#1D5481" style="color: #fff;">
			<th>Id </th>
			<th>Client Name </th>
			<th>Order Date</th>
			<th> Pickup Date </th>
			<th> Location</th>
      <th> Change status</th>
			
			</tr>
			@foreach ($activeorders as $client)
      
			<tr>
			<td>{{ $client->id }}</td>
			<td>{{ $client->name }}</td>
			<td>{{ $client->scheduleddate }}</td>
			<td>{{ $client->scheduleddate }}</td>
			<td>{{ $client->location}}</td>
      <!--<td> <a href="javascript:closestatus('{{ $client->id }}')"> close</a></td>-->
      <td> <a href="javascript:myFunction('{{ $client->id }}')"> close</a></td>
      @endforeach
			
			
			</tr>
		
			</table>
     </div>
      <!-- end of activeorders -->

<!-- All orders-->
     <div id="div_allorders" style="display: none;  width: 72%; margin-top: 10px;">
     <span class="loadly_titles_sub3" style="padding-left: 30px;">All Orders</span>

     <table class="lst" border="3">
			<tr  bgcolor="#1D5481" style="color: #fff;">
			<th>Id</th>
			<th>Client Name </th>
			<th>Order Date</th>
			<th> Pickup Date </th>
			<th> Location</th>
      <th> Change status</th>
			
			</tr>
			@foreach ($clientsorders as $clients)
      
			<tr>
			<td>{{ $clients->id }}</td>
			<td>{{ $clients->name }}</td>
			<td>{{ $clients->scheduleddate }}</td>
			<td>{{ $clients->scheduleddate }}</td>
			<td>{{ $clients->location}}</td>
      <td> <a id="ab" href="#"> close</a></td>
      @endforeach
			
			</tr>
		
			</table>
     </div>
      <!-- end of allorders-->

<!-- Initiate Pickup -->
     <div id="div_initiatepickup" style="display: none;  width: 72%; margin-top: 10px;">
     <form id="frm_initiatepickup">
     <span class="loadly_titles_sub3" style="padding-left: 30px;"> Initiate Pickup</span>
     <table class="lst" border="3">
			<tr  bgcolor="#1D5481" style="color: #fff;">
			<th>Id </th>
			<th>Client Name </th>
			<th>Order Date</th>
			<th> Pickup Date </th>
			<th> Location</th>
      <th> Change status</th>
			
			</tr>
			@foreach ($activeorders as $client)
      
			<tr>
			<td>{{ $client->id }}</td>
			<td>{{ $client->name }}</td>
			<td>{{ $client->scheduleddate }}</td>
			<td>{{ $client->scheduleddate }}</td>
			<td>{{ $client->location}}</td>
      <td> <a id="ac" href="#"> close</a></td>
      @endforeach
			
			
			</tr>
		
			</table>
      </form>
     </div>
    <!-- end of initiate pickup-->


<!-- Manage Accounts -->
     <div id="div_manageaccounts" style="display: none; width: 72%; margin-top: 10px; ">


<form id="frm_changepwd">

@if($message = Session::get('subchangepwd_error')) 
          <div class="error"> 
         <strong>{{ $message }}</strong>
          </div>
        @endif

       @if($message = Session::get('success_alert')) 
          <div class="success"> 
         <strong>{{ $message }}</strong>
          </div>
        @endif


<div class="alert_changepwd alert-success" style="display:none"></div>

<input type="hidden" name="_token" value="{{ csrf_token() }}">



      <div style="margin-left: 10px;">

      <div class="loadly_titles_sub3">Change Password</div>
      <div style="display: block; padding-top: 30px; margin-left: 30px; ">

                @if($errors->has('oldpassword'))
										<div class="error">{{ $errors->first('oldpassword') }}</div>
									@endif

									<input id="oldpassword" class="cinput" style="padding-left: 20px;border-color: grey;" name="oldpassword" type="text" required="required" placeholder="old password" />
									<label for="oldpassword" class="floating__label" data-content="old password"> 
				</div>
        <div style="display: block; padding-top: 30px; margin-left: 30px;">
                @if($errors->has('newpassword'))
										<div class="error">{{ $errors->first('newpassword') }}</div>
									@endif
									<input id="newpassword" class="cinput" style="padding-left: 20px;border-color: grey;" name="newpassword" type="text" required="required" placeholder="New password" />
									<label for="newpassword" class="floating__label" data-content="new password"> 
				</div>
        <div style="display: block; padding-top: 30px; margin-left: 30px;">
               @if($errors->has('pwdchange_email'))
										<div class="error">{{ $errors->first('pwdchange_email') }}</div>
									@endif
                     <input id="pwdchange_email" class="cinput" style="padding-left: 20px;border-color: grey;" name="pwdchange_email" type="email" required="required" placeholder="Email" value="" />
                     <label for="pwdchange_email" class="floating__label" data-content="Email"> 
         </div>
         <input type="hidden" name="_token" value="{{ csrf_token() }}">

         <span style="margin-top:0px;">
         <input id="submitPasswordChange" type="submit" name="submitPasswordChange" class="button loadly_contents_fonts" value="Change Password" />
         </span>
         
      
      </div>
      </form>

<form id="frm_adduser">

            @if($message = Session::get('subadduser_error')) 
						   <div class="error"> 
							<strong>{{ $message }}</strong>
						   </div>
					   @endif

						@if($message = Session::get('success_alert')) 
						   <div class="success"> 
							<strong>{{ $message }}</strong>
						   </div>
					   @endif

             <div class="alert_adduser alert-success" style="display:none"></div>

            <input type="hidden" name="_token" value="{{ csrf_token() }}">

      <div  style=" margin-top:10px; margin-left:10px;">
      <div class="loadly_titles_sub3">Add User</div>
      <div style="display: block; padding-top: 30px; margin-left: 30px; ">
                     <input id="name" class="cinput" style="padding-left: 20px;border-color: grey;" name="name" type="text" required="required" placeholder="Username" value="" />
                     <label for="name" class="floating__label" data-content="Username"> 
         </div>
         <div style="display: block; padding-top: 30px; margin-left: 30px; ">
                     <input id="pwd" class="cinput" style="padding-left: 20px;border-color: grey;" name="pwd" type="text" required="required" placeholder="Password" value="" />
                     <label for="pwd" class="floating__label" data-content="Password"> 
         </div>

         <input type="hidden" name="_token" value="{{ csrf_token() }}">

         <span style="margin-top:0px;">
         <input id="adduser" type="submit" name="adduser" class="button loadly_contents_fonts" value="Add User" />
         </span>
      </div>
     <!-- end of Manage-->
     </form>

	   </div>

<!-- jQuery-->
     <script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
      </script>

      <script>
      function myFunction(_id){
        //alert("am available");
        document.getElementById("stch").style.display="inline-block";

      }
       //function closestatus(_id){
                  //alert(id);
                 /** 
                   $.ajaxSetup({
                          headers: {
                                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                        }
                                    });*/

                                   /**************** AJAX *************** */
                                   /*****
                                    jQuery.ajax({
                                        url: "{{ url('/closestatus') }}",
                                        method: 'post',
                                        data: { 
                                             id:  _id,//jQuery('id').val(),
                                              
                                        },
                                        success: function(result){
                                          //alert(result.success);
                                          jQuery('.alert_statuschange').show();
                                          jQuery('.alert_statuschange').html(result.success);
                                        }});
                                        ****/ 
                                    /*************** END AJAX *********** */
                                    

                   // }






                $(document).ready(function(){
                  //alert("You've");
                    
                  jQuery('#submitPasswordChange').click(function(e){
                      e.preventDefault();
                      $.ajaxSetup({
                          headers: {
                                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                        }
                                    });

                                    /**************** AJAX *************** */
                                    jQuery.ajax({
                                        url: "{{ url('/changeadminuserpassword') }}",
                                        method: 'post',
                                        data: { 
                                              oldpassword:  jQuery('#oldpassword').val(),
                                              newpassword:  jQuery('#newpassword').val(),
                                              pwdchange_email :  jQuery('#pwdchange_email').val(),
                                        },
                                        success: function(result){
                                          jQuery('.alert_changepwd').show();
                                          jQuery('.alert_changepwd').html(result.success);
                                        }});
                                    /*************** END AJAX *********** */


                      //alert("You've clicked the link.");

                  });
                     jQuery('#adduser').click(function(e){
                      e.preventDefault();
                      $.ajaxSetup({
                          headers: {
                                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                        }
                                    });
                                    
                                    jQuery.ajax({
                                        url: "{{ url('/addadminuser') }}",
                                        method: 'post',
                                        data: {
                                               username:  jQuery('#name').val(),
                                               pwd :  jQuery('#pwd').val(),
                                              },
                                          success: function(result){
                                          jQuery('.alert_adduser').show();
                                          jQuery('.alert_adduser').html(result.success);

                                        }});
                                        //alert("dfghjkl");
                                    });
                            jQuery('#aa').click(function(e){
                              alert("okay aa");

                            });
                            /***** 
                            jQuery('#ab').click(function(e){
                              alert("okay ab");

                            });
                            jQuery('#ac').click(function(e){
                              alert("okay ac");*/
                              



                  });

/*
                    
                              jQuery.ajax({
                                        url: "{{ url('/changeadminuserpassword') }}",
                                        method: 'post',
                                        data: {
                                              //oldpassword: 'lkkkk';//jQuery('#oldpassword').val(),
                                              //newpassword: jQuery('#newpassword').val(),
                                              //email: jQuery('#pwdchange_email').val(),
                                              oldpassword: 'see me sooon';

                                        },
                                        success: function(result){
                                          jQuery('.alert_pwd').show();
                                          jQuery('.alert_pwd').html(result.success);
                                        }});
                                    });



                });*/
      </script>
			   

</body>
</html>