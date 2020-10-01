<!DOCTYPE html>
<html>
 <head>
  <title>Loadly - Login</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
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
		background: #01385e;
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
	color:#776e64; 
	font-size:1.2em; 
	line-height:1.5em;
	letter-spacing: 0.1em;
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
	box-shadow:inset #ffffff 2px 5px 27px -48px,#01385e 2px 2px 33px;
	o-box-shadow:inset #ffffff 2px 5px 27px -48px,#01385e 2px 2px 33px;
	-moz-box-shadow:inset #ffffff 2px 5px 27px -48px,#01385e 2px 2px 33px;
	-webkit-box-shadow:inset #ffffff 2px 5px 27px -48px,#01385e 2px 2px 33px;
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
	width:100%;
	height:60px;
	margin-top: 0px;
	transition: top ease 0.5s;
	padding:13px;
	border-color:#659dab;
	border-width:0px;
	border-style:solid;
}

.button_blue{
	background: #3a589b;
}

.button_blue:hover {
			  
	background:-o-linear-gradient(90deg, #3a589b, #3a589b) !important;
	background:-moz-linear-gradient( center top, #ea9605 5%, #ea9605 100% ) !important;
	background:-webkit-gradient( linear, left top, left bottom, color-stop(0.05, #3a589b), color-stop(1, #3a589b) ) !important;
	filter:progid:DXImageTransform.Microsoft.gradient(startColorstr='#ea9605', endColorstr='#ea9605') !important;
	background:-webkit-linear-gradient(#3a589b, #3a589b) !important;
	background:-ms-linear-gradient(#3a589b, #3a589b) !important;
	background:linear-gradient(#3a589b, #3a589b) !important;
}
	  
	  
.button:active {
	box-shadow:inset #ffffff 2px 5px 27px -48px,#01385e 2px 0 33px;
	o-box-shadow:inset #ffffff 2px 5px 27px -48px,#01385e 2px 0 33px;
	-moz-box-shadow:inset #ffffff 2px 5px 27px -48px,#01385e 2px 0 33px;
	-webkit-box-shadow:inset #ffffff 2px 5px 27px -48px,#01385e 2px 0 33px;
	position:relative;
	top:2px
}

.button:hover {
	
	
	box-shadow:inset #ffffff 2px 5px 27px -48px,#01385e 2px 0 33px;
	o-box-shadow:inset #ffffff 2px 5px 27px -48px,#01385e 2px 0 33px;
	-moz-box-shadow:inset #ffffff 2px 5px 27px -48px,#01385e 2px 0 33px;
	-webkit-box-shadow:inset #ffffff 2px 5px 27px -48px,#01385e 2px 0 33px;
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
  width: 200px;
  height: 35px;
  padding: 1.8rem 1rem 0.6rem;
  font-size: 1.5rem !important;
	color: #fff;
   
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
  color: #ccc;
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
  transform: translate3d(0, -6.12rem, 0) scale3d(0.82, 0.82, 1);
}

.floating__input:focus + .floating__label::before {
  color: #a0692e;
}

.cinput{
	width: 100%; background-color:transparent; border: 1px solid #ccc; border-radius: 1px; height: 40px
	  }
.loadly_helloagain{
	display: inline-block; 
	width: 45%; 
	vertical-align: top;
} 
.loadly_helloagain1{
	width: 60%; 
	font-size: 20px; 
	margin-top: 25px; 
	color:#99afbe;
}
.loadly_empass{
	display: inline-block; 
	margin-left: 7%; 
	width:35%; 
	vertical-align: top;
}

	  @media only screen and (max-width: 600px) {
		  .loadly_helloagain{
				display: block;
	           	width: 100%;
	          	margin: 15px 0 0 0;
		     }
			 .loadly_helloagain1{
				display: block;
	           	width: 100%;
	          	margin: 15px 0 0 0;
		     }
			 .loadly_empass{
				display: block;
	           	width: 100%;
	          	margin: 15px 0 0 0; 
			 }
			 .loadly_titles{
				 font-size: 3em;
				 width: 95% !important;
				 padding: 1% !important;
			 }

	  }

 
  </style>

<!-- Added-->
<style>
   .allowed-submit{opacity: .5;cursor: not-allowed;}
  .valid-input{
    border:1px solid green !important;
  }
  .invalid-input{
    border:1px solid red !important;
  }
  .invalid-msg{
    color: #F84F17;
	margin-top:-15px !important;
  }
.validation-form h3{
  background:#eae9e9;
  text-align:center;
  padding:5px 0px;
}
.validation-form{
  border:1px solid orange;
  width:50%;

  background:#dad9d9;
  padding:10px 30px;
}
.validation-form .form-group{
  margin:15px 0px;
}
.validation-form .form-group input{
  padding:10px;
  width:94%;
  boz-sizing:border-box;
   border:none;
   border-bottom:1px solid orange;
}
.validation-form .form-group input:focus{
 outline:unset;
}
.validation-form .form-group input[type="submit"]{
  width:100%;
 
  background:orange;
  font-size:20px;
  color:white;
}
  </style>

  <!-- Added -->
<script>
$(document).ready(function () {
// valiadtion for Email 
$('#email').on('input', function () { 
var emailAddress = $(this).val();
var validEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
if (emailAddress.length == 0) { 
$('.email-msg').addClass('invalid-msg').text('Email is required'); 
$(this).addClass('invalid-input').removeClass('valid-input');
} 
else if (!validEmail.test(emailAddress)) { 
$('.email-msg').addClass('invalid-msg').text('Invalid Email Address'); 
$(this).addClass('invalid-input').removeClass('valid-input');
}
else { 
$('.email-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
} 
});

 

});
</script>


	 
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
	
	
</script>
 </head>
 <body>

  <br />
   <div style="width:100%; height: 100px; padding: 0px 60px 0 60px; ">
		<a href="{{('../gohome')}}"><img src="{{URL::to('/')}}/images/logo2.png" width="250"> </a>
   </div>
	
   <div id="div_zipcode" style="padding: 20px 60px 0 60px;"> 
	  
	   <div class="loadly_helloagain">
		 <p class="loadly_titles" style="color:#fff;">Hello again!</p> 
		 <p class="loadly_contents_fonts loadly_helloagain1" >
			 It’s good to see you.
		   </p>

	   </div>

	   <div class="loadly_empass">
		<div class="container bovx" style="width: 100% !important" >


	   <h3 align="center"> </h3><br />

	   @if(Session::get('loginmail')!=""))
		<script>window.location="clientdashboard";</script>
	   @endif

	   @if ($message = Session::get('error'))
	   <div class="alert alert-danger alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>{{ $message }}</strong>
	   </div>
	   @endif

	   @if (count($errors) > 0)
		<div class="alert alert-danger">
		 <ul>
		 @foreach($errors->all() as $error)
		  <li>{{ $error }}</li>
		 @endforeach
		 </ul>
		</div>
	   @endif

	   <form method="post" action="{{url('submitlogin')}}">
		{{ csrf_field() }}
		  <p class="loadly_p" style="color: #fff;"> Please log in </p>
		 
		   <div style="margin-top: 30px;">
			    <div style="display: block;">
				<input id="email" class="floating__input cinput" name="email" type="text" placeholder="email" />
				<label for="email" class="floating__label" data-content="E-Mail"> 
				<div class="email-msg"></div>
			   </div>
					
			    <div style="display: block; margin-top: 30px;">
				<input id="password" class="floating__input cinput" name="password" type="password" placeholder="Password"  style="width: 100%;"/>
				<label for="password" class="floating__label" data-content="Password"> 
				<div class="password-msg"></div>
			   </div>
					

			</div>
		 
		<div class="form-group" style="margin-top: 35px;">
		 <input type="submit" name="login" class="button" value="Sign in With E-Mail" />
		</div>
	   </form>
			
			<p style="color: #b0bfc9; text-align: center">Or</p>
			
	  <!-- <form method="get" action="{{url('/auth/facebook')}}"> -->
	   <form method="get" action="javascript:void(0)"> 
		   <input type="hidden" name="_token" value="{{ csrf_token() }}">
		<div class="form-group" style="margin-top: 15px;">
		 <input type="submit" name="login" class="button button_blue" value="Sign in With facebook" />
		</div>
	   </form>
			 
	  </div>
		   
		   
			<p style="color: #b0bfc9; text-align: center">I forgot my password</p>

		   <p style="text-align: center"><span style="color: #b0bfc9; text-align: center">Don’t have an account? </span><a href="{{url('customers/start')}}">Sign up.</a></p>
		   
	   </div>
			
			
 </div> 
	 

</body>
</html>