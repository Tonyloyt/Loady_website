<!DOCTYPE html>
<html>
 <head>
  <title>Loadly - Signup</title>
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
	box-shadow:inset #ffffff 2px 5px 27px -48px,#fff 2px 2px 33px;
	o-box-shadow:inset #ffffff 2px 5px 27px -48px,#fff 2px 2px 33px;
	-moz-box-shadow:inset #ffffff 2px 5px 27px -48px,#fff 2px 2px 33px;
	-webkit-box-shadow:inset #ffffff 2px 5px 27px -48px,#fff 2px 2px 33px;
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
	box-shadow:inset #ffffff 2px 5px 27px -48px,#fff 2px 0 33px;
	o-box-shadow:inset #ffffff 2px 5px 27px -48px,#fff 2px 0 33px;
	-moz-box-shadow:inset #ffffff 2px 5px 27px -48px,#fff 2px 0 33px;
	-webkit-box-shadow:inset #ffffff 2px 5px 27px -48px,#fff 2px 0 33px;
	position:relative;
	top:2px
}

.button:hover {
	
	
	box-shadow:inset #ffffff 2px 5px 27px -48px,#fff 2px 0 33px;
	o-box-shadow:inset #ffffff 2px 5px 27px -48px,#fff 2px 0 33px;
	-moz-box-shadow:inset #ffffff 2px 5px 27px -48px,#fff 2px 0 33px;
	-webkit-box-shadow:inset #ffffff 2px 5px 27px -48px,#fff 2px 0 33px;
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
  font-size: 1.5rem;
   
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
	width: 100%; 
	background-color:transparent; 
	border: 1px solid #ccc; 
	border-radius: 1px; 
	height: 40px;
	font-size: 14px;
}
.loadly_cleanclothes{
	padding: 20px 60px 0 60px;
}
.loadly_cleanclothes1{
	display: inline-block; 
	width: 45%; 
	vertical-align: top;
}
.loadly_cleanclothes2{
	width: 60%; 
	font-size: 20px; 
	margin-top: 25px; 
	color:#a09a93;
}
.loadly_cleanclothes3{
	display: inline-block; 
	margin-left: 7%; 
	width:35%; 
	vertical-align: top;
}
 
 .loadly_logo{
	width:450px; height:100px; padding: 0px 60px 0 60px; 
	  }
	  
.loadly_logo_inner{
	padding: 10px; border-radius: 5px; background: #1d5f76;
	  }
 
@media only screen and (max-width: 600px) {
	.loadly_logo{
		width: 100%;
		padding: 1%;
	}
	.loadly_logo_inner{
	   padding: 1%;
	  }
		  .loadly_cleanclothes{
				display: block;
	           	width: 100%;
	          	margin: 15px 0 0 0;
			    padding: 0px 20px 0 20px;
		     }
			 .loadly_cleanclothes1{
				display: block;
	           	width: 100%;
	          	margin: 5px 0 0 0;
				 padding:1% !important;
				 font-size: 0.8em !important;
		     }
			 .loadly_cleanclothes3{
				display: block;
	           	width: 100%;
	          	margin: 35px 0 0 0;
		     }
			 .loadly_contents_fonts{
				display: block;
	           	width: 100%;
	          	margin: 35px 0 0 0;
				font-size: 1.2em;	 
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
    color: red;
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

<!-- Added script for jQuery -->
<script>
$(document).ready(function () {

	// Zipcode validation
$('#zipcode').on('input', function () { 
var zipcode = $(this).val(); 
var validzipcode = /.{4,}/; 
//alert(zipcode);
if (zipcode.length < 4) {
$('.zipcode-msg').addClass('invalid-msg').text("zipcode can't be less than 4 numbers");
$(this).addClass('invalid-input').removeClass('valid-input'); 
	finalstatus="";
} 
else if (!validzipcode.test(zipcode)) {
$('.zipcode-msg').addClass('invalid-msg').text('No characters & Whitespace are allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
	finalstatus="ok";
} 
else { 
$('.zipcode-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
	finalstatus="ok";
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
   <div class="loadly_logo">
		<div class="loadly_logo_inner">
		     <a href="{{('../gohome')}}"><img src="{{URL::to('/')}}/images/logo2.png" width="250"> </a>
		   </div>
   </div>
	
   <div id="div_zipcode" class="loadly_cleanclothes"> 
	    
	   <div class="loadly_cleanclothes1">
		 <p class="loadly_titles" style="color:#453536;">Clean clothes, the easy way!</p> 
		 <p class="loadly_contents_fonts loadly_cleanclothes2">Picked up dirty. Returned clean-straight to your door. It’s not magic, but it is magical.</p>

	   </div>

	   <div class="loadly_cleanclothes3">
		<div class="container boxx" style="width: 100% !important" >


	   <h3 align="center"> </h3><br />

	   @if(isset(Auth::user()->email))
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

	   <form id="frmmain" method="get" action="{{url('customers/start/schedule')}}">
		{{ csrf_field() }}
		  <p class="loadly_p" style="color: #27677c;"> Enter your zip code </p>
		 
		   <div style="margin-top: 30px;">
			    <div style="display: block;">
				<input id="zipcode" class="floating__input cinput" name="zipcode" type="text" placeholder="zipcode" style="width: 100%;" />
				<label for="zipcode" class="floating__label" data-content="Zip Code"> 
				<div class="zipcode-msg"></div>
			   </div>  

			</div>
		 
		<div class="form-group" style="margin-top: 35px;">
		 <div name="login" class="button" onClick="javascript:_continue()" style="cursor: pointer" >Signup With E-Mail </div>
		</div>
	   </form>
			
			<p style="color: #b0bfc9; text-align: center">Or</p>
			
	   <!--<form method="get" action="{{url('auth/facebook')}}"> -->
	   <form method="get" action="javascript:void(0)"> 
		    <input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div class="form-group" style="margin-top: 15px;">
			 <input type="submit" name="login" class="button button_blue" value="Signup With facebook" />
			</div>
	   </form>
			 
	  </div>
		    
			<p style="color: #b0bfc9; text-align: center">Already Have account? <a href="{{url('accounts/login')}}">Sign in.</a></p>
		   
	   </div>
			
			
 </div> 
	
	   	  <script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
          </script>
	   
	   
	   <script>
		   var finalstatus="";
          function _continue(){
			  if(finalstatus=="ok"){
			  	  document.getElementById("frmmain").submit();
			  }else{
				  alert("Zipcode should be filled correctly");
			  }
		  }
	   </script>
	   

</body>
</html>