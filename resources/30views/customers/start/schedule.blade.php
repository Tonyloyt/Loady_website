<!DOCTYPE html>
<html>
 <head>
  <title>Loadly - Signup</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">


<meta name="_token" content="{{csrf_token()}}" />

<!-- Added--> 


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

.loadly_titles_li1{ 
	font-family: 'Asap', sans-serif;
	font-size:1.5em; 
	font-weight:500;
	color:#776e64;
}
	  
.loadly_titles_li2{ 
	font-family: 'Asap', sans-serif;
	font-size:2em; 
	font-weight:800;
	color:#776e64;
}
	  
	  
.loadly_contents_fonts_1{ 
	font-family:'Montserrat',sans-serif !important;
	color:#776e64; 
	font-size:1em !important; 
	line-height:1.5em !important;
	font-weight: normal !important; 
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
.wrapper {
  width:calc(100% - 100px);
  height:230px; 
  padding:0px 20px 0 20px;
  margin-top:60px;
  font-family:helvetica;
  overflow:hidden;
  position:relative;
  z-index:99;   
}
.arrow {
  display:block;
  width:60px;
  height:200px;
  line-height:60px;
  text-align:center; 
  font-weight:bold;
  cursor:pointer;
  position:absolute;
  top:0;
  z-index:101;
  padding-top: 20px; 
}
.arrow:first-of-type {
  left:0;
}
.arrow:nth-of-type(2) {
  right:0; 
}
	  
.arrow_glow{
	border: 1px solid #eb9d00;
    box-shadow: 0 0 5px #eb9d00 !important;
    outline: none;
}
	  
#nav {
  width:auto;
  height:230px;
  overflow:hidden;
  list-style-type:none;
  white-space:nowrap;
  transition:2.0s; 
	padding-top:40px;
}
#nav li {
  display:inline-block;
  height:140px;
  line-height:20px;
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
	width:80%;
	height:60px;
	margin-top: 150px;
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
  width: 200px;
  height: 35px;
  padding: 1.8rem 1rem 0.6rem;
  font-size: 1.5rem !important;
   
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

 
 .loadly_service_type{
	 width: 80%; margin-left: 10px; font-family: 'Asap', sans-serif !important; font-weight: 100; font-size: 15px;
	  }
 .loadly_leftsect{
	 display: inline-block; width: 35%; position: fixed; z-index: 1;
 }
.loadly_rightsect{
	display: inline-block; right: 50px; position: fixed;
}
.loadly_middlesect{
	display: inline-block; width: 45%; margin-left: 40%; z-index: 2;
}
.loadly_schedule_main{
	display: block; padding: 20px 60px 0 60px;
	  }
.loadly_service_type_boxes{
	padding: 10px; width: 80%; height: 120px; margin-top: 10px;
	  }
	  
@media only screen and (max-width: 600px) {
	.loadly_leftsect{
	 display: block; width: 98%; padding: 1%; position: relative;
 	}
	.loadly_rightsect{
		display: none;
	}
	.loadly_middlesect{
		display: block; width: 95%; padding: 1%;
		margin-left:0px;
	}
	.loadly_titles{
		font-size: 3em;
	}
	.loadly_schedule_main{
	     padding: 20px 0px 0 0px;
	  }
	.wrapper{
		width: 98%;
	}
	.loadly_service_type_boxes{
	   padding: 10px; width: 98%;
	  }
 }
	  
	  
  </style>

  <!-- Added-->
  <style>

label.error {
    color: red;
    font-size: 1rem;
    display: block;
    margin-top: 5px;
}

input.error {
    border: 1px dashed red;
    font-weight: 300;
    color: red;
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

<!-- Added-->

<script>
$(document).ready(function () {
//validation for First Name 
$('#firstname').on('input', function () { 
var firstname = $(this).val(); 
var validname = /^[a-zA-Z ]*$/; 
//alert(firstname);
if (firstname.length <2) {
$('.first-name-msg').addClass('invalid-msg').text("First Name is required");
$(this).addClass('invalid-input').removeClass('valid-input'); 
document.getElementById("txt_status").value="not varified";
} 
else if (!validname.test(firstname)) {
$('.first-name-msg').addClass('invalid-msg').text('only characters & Whitespace are allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
document.getElementById("txt_status").value="not varified";
} 
else { 
$('.first-name-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
document.getElementById("txt_status").value="varified";
} 
});

//lastname validation
$('#lastname').on('input', function () { 
var lastname = $(this).val(); 
var validname = /^[a-zA-Z ]*$/; 
//alert(firstname);
if (lastname.length <2) {
$('.last-name-msg').addClass('invalid-msg').text("Last Name is required");
$(this).addClass('invalid-input').removeClass('valid-input'); 
document.getElementById("txt_status").value="not varified";
} 
else if (!validname.test(lastname)) {
$('.last-name-msg').addClass('invalid-msg').text('only characters & Whitespace are allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
document.getElementById("txt_status").value="not varified";
} 
else { 
$('.last-name-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
document.getElementById("txt_status").value="varified";
} 
});


// valiadtion for Password 
$('#password').on('input', function () { 
var password = $(this).val(); 
var cpassword = $('#cpassword').val(); 
var uppercasePassword = /(?=.*?[A-Z])/;
var lowercasePassword = /(?=.*?[a-z])/;
var digitPassword = /(?=.*?[0-9])/;
var spacesPassword = /^$|\s+/;
var symbolPassword = /(?=.*?[#?!@$%^&*-])/;
var minEightPassword = /.{6,}/;
if (password.length == 0) { 
$('.password-msg').addClass('invalid-msg').text('Password is required');
$(this).addClass('invalid-input').removeClass('valid-input');
document.getElementById("txt_status").value="not varified";
} 
else if (!uppercasePassword.test(password)) { 
$('.password-msg').addClass('invalid-msg').text('At least one Uppercase'); 
$(this).addClass('invalid-input').removeClass('valid-input');
document.getElementById("txt_status").value="not varified";
} 
else if (!lowercasePassword.test(password)) { 
$('.password-msg').addClass('invalid-msg').text('At least one Lowercase'); 
$(this).addClass('invalid-input').removeClass('valid-input');
document.getElementById("txt_status").value="not varified";
} 
else if (!digitPassword.test(password)) { 
$('.password-msg').addClass('invalid-msg').text('At least one digit'); 
$(this).addClass('invalid-input').removeClass('valid-input');
document.getElementById("txt_status").value="not varified";
} 
else if (!symbolPassword.test(password)) { 
$('.password-msg').addClass('invalid-msg').text('At least one special character'); 
$(this).addClass('invalid-input').removeClass('valid-input');
document.getElementById("txt_status").value="not varified";
} 
else if (spacesPassword.test(password)) { 
$('.password-msg').addClass('invalid-msg').text('Whitespaces are not allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input');
document.getElementById("txt_status").value="not varified";
} 
else if (!minEightPassword.test(password)) { 
$('.password-msg').addClass('invalid-msg').text('Minimum length 6');
$(this).addClass('invalid-input').removeClass('valid-input');
document.getElementById("txt_status").value="not varified";
} 
else { 
$('.password-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input');
document.getElementById("txt_status").value="varified";
}
});
 

// Phone number vallidations
$('#phone').on('input', function () { 
var phone = $(this).val(); 
var validphone = /[0-9 -()+]+$/; 
//alert(phone);
if (phone.length > 10) {
$('.phone-msg').addClass('invalid-msg').text("maximum number is 10 only");
$(this).addClass('invalid-input').removeClass('valid-input'); 
document.getElementById("txt_status").value="not varified";
} 
else if (!validphone.test(phone)) {
$('.phone-msg').addClass('invalid-msg').text('No characters & Whitespace are allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
document.getElementById("txt_status").value="not varified";
} 
else { 
$('.phone-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
document.getElementById("txt_status").value="varified";
} 
});

//address validation
$('#address').on('input', function () { 
var address = $(this).val(); 
var validname = /^[a-zA-Z ]*$/; 
//alert(adddress);
if (address.length <2) {
$('.address-msg').addClass('invalid-msg').text("Address is required");
$(this).addClass('invalid-input').removeClass('valid-input'); 
document.getElementById("txt_status").value="not varified";
} 
else if (!validname.test(address)) {
$('.address-msg').addClass('invalid-msg').text('only characters & Whitespace are allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
document.getElementById("txt_status").value="not varified";
} 
else { 
$('.address-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
document.getElementById("txt_status").value="varified";
} 
});

// Zipcode validation
$('#zipcode').on('input', function () { 
var zipcode = $(this).val(); 
var validzipcode = /.{4,}/; 
//alert(zipcode);
if (zipcode.length < 4) {
$('.zipcode-msg').addClass('invalid-msg').text("zipcode can't be less than 4 numbers");
$(this).addClass('invalid-input').removeClass('valid-input'); 
document.getElementById("txt_status").value="not varified";
} 
else if (!validzipcode.test(zipcode)) {
$('.zipcode-msg').addClass('invalid-msg').text('No characters & Whitespace are allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
document.getElementById("txt_status").value="not varified";
} 
else { 
$('.zipcode-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
document.getElementById("txt_status").value="varified";
} 
});

//city validation
$('#city').on('input', function () { 
var city = $(this).val(); 
var validcity = /^[a-zA-Z ]*$/; 
//alert(city);
if (city.length <2) {
$('.city-msg').addClass('invalid-msg').text("city is required");
$(this).addClass('invalid-input').removeClass('valid-input'); 
document.getElementById("txt_status").value="not varified";
} 
else if (!validcity.test(city)) {
$('.city-msg').addClass('invalid-msg').text('only characters & Whitespace are allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
document.getElementById("txt_status").value="not varified";
} 
else { 
$('.city-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
document.getElementById("txt_status").value="varified";
} 
});

/*apt validation
$('#apt').on('input', function () { 
var apt = $(this).val(); 
var validapt = /[0-9 -()+]+$/; 
//alert(apt);
if (apt.length < 2) {
$('.apt-msg').addClass('invalid-msg').text("Apartment number must be more than 1 digits");
$(this).addClass('invalid-input').removeClass('valid-input'); 
document.getElementById("txt_status").value="not varified";
} 
else if (!validapt.test(apt)) {
$('.apt-msg').addClass('invalid-msg').text('No characters & Whitespace are allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
document.getElementById("txt_status").value="not varified";
} 
else { 
$('.apt-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
document.getElementById("txt_status").value="not varified";
} 
});*/


//pickup and delivery instructions validation
$('#pickups').on('input', function () { 
	//alert("ok");
var pickups = $(this).val(); 
//alert(pickups);
if (pickups.length < 10) {
	//alert("cvgbhjk");
$('.pickups-msg').addClass('invalid-msg').text("More and clear instructions needed");
$(this).addClass('invalid-input').removeClass('valid-input'); 
document.getElementById("txt_status").value="not varified";
}
else { 
$('.pickups-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
document.getElementById("txt_status").value="varified";
} 
}); 





// valiadtion for Email 
$('#email').on('input', function () { 
var emailAddress = $(this).val();
var validEmail = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
if (emailAddress.length == 0) { 
$('.email-msg').addClass('invalid-msg').text('Email is required'); 
$(this).addClass('invalid-input').removeClass('valid-input');
document.getElementById("txt_status").value="not varified";
} 
else if (!validEmail.test(emailAddress)) { 
$('.email-msg').addClass('invalid-msg').text('Invalid Email Address'); 
$(this).addClass('invalid-input').removeClass('valid-input');
document.getElementById("txt_status").value="not varified";
}
else { 
$('.email-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
document.getElementById("txt_status").value="varified";
} 
});

});
</script>

<script >
		

		$(document).ready(function() {
		 $("#frm_main").validate();
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
	    document.getElementById("div_r").classList.add("arrow_glow");
	    document.getElementById("div_l").classList.remove("arrow_glow");
    }
 
 
    function l() {
        var navwidth = $("#nav");
        navwidth.scrollLeft(navwidth.scrollLeft() + 200);
	    document.getElementById("div_r").classList.remove("arrow_glow");
	    document.getElementById("div_l").classList.add("arrow_glow");
    }	
	
	var pdate="";
function liclick(sdate){
	sdate=sdate.trim();
	document.getElementById("input__scheduleddate").value=sdate;
	document.getElementById(sdate).style.border="1px solid orange";
	
	 if(pdate!=""){
	   document.getElementById(pdate).style.border="0px solid orange";
	 }
	pdate=sdate;
}

function submitschedule(){ 
	document.getElementById("frm_main").submit(); 
}
</script>
 </head>
 <body>
  <br />
 

<form id="frm_main" action="{{url($futurefunction)}}" method="post"> 
		
<input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><br>   
   <div id="div_schedulepickup" class="loadly_schedule_main"> 
	   <div class="loadly_leftsect">
		   
	   <div style="width: 300px; height: 100px; text-align: center;">
		   <div style="padding: 10px; border-radius: 5px; background: #1d5f76">
		     <a href="{{('../../gohome')}}"><img src="{{URL::to('/')}}/images/logo2.png" width="250"> </a>
		   </div>
	   </div>
		   
		 <p class="loadly_titles">Schedule a pickup</p> 
		 <p class="loadly_contents_fonts" style="width: 80%; font-size: 20px; margin-top: 25px;">
			 Loadly serves your neighborhood!
		 </p>

	   </div>

	   <div class="loadly_rightsect">
		 <ul style="list-style: circle; direction: rtl; list-style-position: inside;">
		  <li style="list-style: disc; font-size: 25px;"><span style="font-size: 16px;">Schedule</span></li>
			   
			@if($login_email=="") 
			  <li style="list-style: circle; font-size: 25px;"><span style="font-size: 16px;">Account</span></li>
			  <li style="list-style: circle; font-size: 25px;"><span style="font-size: 16px;">More Info</span></li>
			  <li style="list-style: circle; font-size: 25px;"><span style="font-size: 16px;">About you</span></li>
			 @endif
			 
		</ul>
	   </div>
	   
	   
	   <div class="loadly_middlesect">
		   

		   
		 <p class="loadly_p">Choose an evening for your pickup</p>
		 
		   <div id="wrapper" class="wrapper" >
			  <span   class="arrow" onClick="javascript:r()"><div id="div_r" class="box_shadow" style="margin-left:33%; width:65%; height: 150px; background: #fff; margin-top: 25%;  padding-top: 50%">&lt;</div></span>
			  <span   class="arrow" onClick="javascript:l();"><div id="div_l" class="box_shadow" style="width: 66%; height: 150px; background: #fff; margin-top: 25%; padding-top: 50%">&gt;</div></span>
			  <ul id="nav"> 
				  <?php
				  $today=date("Y-m-d");
					$month=date("F", strtotime($today));

					$i=0;
					$str="";
					while($i<=30){

						$cdate=date('Y-m-d', strtotime($today . ' +'.$i.' day')); 
						$month=substr(date("F", strtotime($cdate)),0,3);
						$dayofweek = date('D', strtotime($cdate));
						$drr=explode("-",$cdate);

						echo '<li id="'.$cdate.'" onClick="javascript:liclick(&#39 '.$cdate.'&#39)" class="box_shadow" style="background:#fff; margin:0 10px 0 0; border-radius:3px;padding-top:20px; cursor:pointer;"><div class="loadly_titles_li1">'.$month.'</div><div class="loadly_titles_li2" style="margin-top:20px;">'.$drr[2].'</div><div class="loadly_titles_li1" style="margin-top:20px;">'.$dayofweek.'</div></li>';
						$i++;
					}
				  ?> 
			  </ul>
			</div>

			<div style="margin-top: 4%">
				@if($login_email=="")
					<input type="checkbox" id="chk_drycleaning" name="chk_drycleaning" value="drycleaning" style="vertical-align: top;">
				
			   	 	<label for="drycleaning" style="width: 60%; margin-left: 10px; "> I am not ready to schedule my first pickup yet.</label><br>
				@endif
			</div>


	   <p><input id="input__scheduleddate" name="input__scheduleddate" type="hidden" /></p>
	   <p class="loadly_p" style="margin-top: 25px;">Which Loadly services are you planning to use?</p>
	   
		<div class="box_shadow loadly_contents_fonts_1 loadly_service_type_boxes" style="margin-top: 20px;">
			<span class="loadly_titles_sub1">Dry Cleaning</span>
		   <div style="padding:5px 5px 5px 5px;">
				<input type="checkbox" id="chk_drycleaning" name="chk_drycleaning" value="drycleaning" style="vertical-align: top;">
			    <label  for="drycleaning" class="loadly_service_type"> Perfect for anything you want cleaned, pressed, and returned on a hanger.</label><br>
		   </div>
	    </div>
	   
		   <div class="box_shadow loadly_contents_fonts_1 loadly_service_type_boxes" style=" z-index: 10;"><span class="loadly_titles_sub1">Wash & Fold</span>
		   <div style="padding:5px 5px 5px 5px;">
				<input type="checkbox" id="chk_washfold" name="chk_washfold" value="washfold" style="vertical-align: top;">
			    <label  for="washfold"  class="loadly_service_type"> For your everyday laundry needs,   returned washed and neatly folded.</label><br>
		   </div>
		   </div>
	   <div class="box_shadow loadly_contents_fonts_1 loadly_service_type_boxes" style="z-index: 11"><span class="loadly_titles_sub1">Hang Dry</span>
	   <div style="padding:5px 5px 5px 5px;">
				<input type="checkbox" id="chk_hangdry" name="chk_hangdry" value="hangdry" style="vertical-align: top;">
			    <label for="hangfold"  class="loadly_service_type"> Ideal for your delicates and clothing that should avoid heat from the dryer. </label><br>
		   </div>
	   </div>
		  
		   
	 @if ($message = Session::get('error'))
	 @if($message=="Insert successfully"))
		<script>window.location="../../accounts/clientdashboard?uuu=oo";</script>
	   @endif
	   <div class="alert alert-danger alert-block" style="margin-top: 35px;">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>{{ $message }}</strong>
	   </div>
	   @endif

	   @if ($message = Session::get('status'))
	  
	   <div class="alert alert-danger alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>{{ $message }}</strong>
	   </div>
	   @endif
		   
		   
		   @if($login_email!="") 
	  		 <p><a href="javascript:submitschedule();" class="button">Confirm Pickup</a></p>
		   @else
	  		 <p><a href="javascript:openaccount();" class="button">Continue</a></p>
		   @endif
		   
	   <p style="margin-top: 50px"></p>
	   </div>
 </div> 
	  
	
   <div id="div_account" class="loadly_schedule_main" style="display: none"> 
	   <div class="loadly_leftsect">
		   
	   <div style="width: 300px; height: 100px; text-align: center;">
		   <div style="padding: 10px; border-radius: 5px; background: #1d5f76">
		     <a href="{{('../../gohome')}}"><img src="{{URL::to('/')}}/images/logo2.png" width="250"> </a>
		   </div>
	   </div>
		   
		   
		 <p class="loadly_titles">Create your account</p> 
		 <p class="loadly_contents_fonts" style="width: 80%; font-size: 20px; margin-top: 25px;">
			 Let’s finish setting up your account to confirm your pickup for Sunday, September 6th.
		 </p>

	   </div>

	   <div class="loadly_rightsect">
		 <ul style="list-style: circle; direction: rtl; list-style-position: inside;">
		  <li style="list-style: circle; font-size: 25px;"><span style="font-size: 16px;">Schedules</span></li> 
			  <li style="list-style: disc; font-size: 25px;"><span style="font-size: 16px;">Account</span></li> 
			  <li style="list-style: circle; font-size: 25px;"><span style="font-size: 16px;">More Info</span></li>
			  <li style="list-style: circle; font-size: 25px;"><span style="font-size: 16px;">About you</span></li> 
		</ul>
	   </div>
	   
	   


						 
	   @if($message = Session::get('cleaningpref_error')) 
						   <div class="error"> 
							<strong>{{ $message }}</strong>
						   </div>
					   @endif
						
						@if($message = Session::get('success_alert')) 
						   <div class="success"> 
							<strong>{{ $message }}</strong>
						   </div>
					   @endif


	   <div class="loadly_middlesect">
		 <p class="loadly_p">Let’s set up your account</p>
		  
		   <div style="margin-top: 30px;">
			    <div style="display: inline-block;">
				<input id="firstname" class="floating__input" name="firstname" minlength="3" type="text" placeholder="First Name" required /> 
				<label for="firstname" class="floating__label" data-content="First Name">
				<div class="first-name-msg"></div>
			   </div>
					
			    <div style="display: inline-block;">
				<input id="lastname" class="floating__input" name="lastname" minlength="3" type="text" placeholder="Last Name" required />
				<label for="lastname" class="floating__label" data-content="Last Name"> 
				<div class="last-name-msg"></div>
			   </div>

			   <div style="display: block; padding-top: 10px;">
				<input id="email" class="floating__input" name="email" type="email" placeholder="Email" required/>
				<label for="email" class="floating__label" data-content="Email">
				<div class="email-msg"></div>
			   </div>

			   <div style="display: block; padding-top: 25px;">
				<input id="password" class="floating__input" name="password" type="password" placeholder="Create password"  />
				<label for="password" class="floating__label" data-content="Create password"> 
				<div class="password-msg"></div>

			   </div>
			   <div style="display: block; padding-top: 25px;">
				<input id="phone" class="floating__input" name="phone" type="text" placeholder="Phone number" r/>
				<label for="phone" class="floating__label" data-content="Phone number"> 
				<div class="phone-msg"></div>

			   </div>
					

			   <div style="padding-top: 10px;">
				   <span>We’ll communicate your order status via text message. 
				   By submitting your phone number, you agree to receive service and 
					marketing-related auto-sent texts from Loadly. Opt-out anytime on your “My Account”
					page or by simply texting “STOP.” We will keep your phone number
					 confidential consistent with our Privacy Policy.
				   </span>
		      </div>

			</div>

			<div style="margin-top: 15%;">
			<span> Where should we stop by? </span>
			</div>
			
			<div style="padding-top: 20px;">
			<div style="display: inline-block; padding-right: 20px;">
				<input id="address" class="floating__input" name="address" type="text" placeholder="Address" />
				<label for="address" class="floating__label" data-content="Address"> 
				<div class="address-msg"></div>
			   </div>
					
			    <div style="display: inline-block;">
				<input id="apt" class="floating__input" name="apt" type="text" placeholder="Apt #(opt)" />
				<label for="apt" class="floating__label" data-content="Apt #(opt)"> 
				<div class="apt-msg"></div>
			   </div>
			   
			   <div style="display: inline-block; padding-right: 20px; margin-top:25px">
			   <input id="zipcode" class="floating__input" name="zipcode" required type="text" minlength="4" placeholder="Zip code" value="{{ $zipcode }}"/>
				<label for="zipcode" class="floating__label" data-content="Zip code"> 
				<div class="zipcode-msg"></div>
			   </div>
					
			    <div style="display: inline-block; margin-top:25px;">
				<input id="city" class="floating__input" name="city" required type="text" placeholder="City" />
				<label for="city" class="floating__label" data-content="City">
				<div class="city-msg"></div> 
			   </div>

			   <div style="display: block; padding-top: 15px;">
			   <div class="pickups-msg"></div>
			   pickup and delivery instructions<br>
			   <textarea class="floating__input" name="pickups" id="pickups" cols="50" rows="50" spellcheck="true" placeholder="pickup and delivery instructions" style="height: 100px;"></textarea>

				
			</div>
		   
			<div style="padding-top: 60px;">
				<span> By clicking Continue, you agree to Loadly’s <a href="#"> Terms </a>  (including a <br /> 
				mandatory  <a href="">arbitration clause</a>) and <a href="#">Privacy Policy</a>.</span>
				</div>
		
			<input id="txt_status" class="floating__input" name="txt_status" required type="hidden" placeholder="status" value="notverified" />

	 
 
					<p>
					<div class="alert_account alert-success" style="display:none; margin-top:20px; background: #F6B7B7; color: #F10206"></div>
						 @if($login_email=="")
					        <input id="submitcontinue" type="submit" name="submitcontinue" class="button" value="Continue." />
						 @endif
					</p>
	   <p style="margin-top: 50px;"></p>
	   </div>
	   
			   
 </div> 
	
					</form>
<!----> 

<script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
      </script>
      <script>
         jQuery(document).ready(function(){
			 
            jQuery('#submitcontinue').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
 
			  jQuery.ajax({
                  url: "{{ url('/updateclientdashboard2') }}",
                  method: 'post',
                  data: {
                     firstname: jQuery('#firstname').val(),
					 lastname: jQuery('#lastname').val(),
					 email: jQuery('#email').val(),
					 password: jQuery('#password').val(),
					 phone: jQuery('#phone').val(),
					 address: jQuery('#address').val(),
					 apt: jQuery('#apt').val(),
					 zipcode: jQuery('#zipcode').val(),
					 city: jQuery('#city').val(),
					 pickup: jQuery('#pickup').val(),
					 finalstatus: jQuery('#txt_status').val(),



                  },
                  success: function(result){
					   
					  if(result.success=="ok"){
						window.location.href = "../../accounts/clientdashboard";
					  }
                     jQuery('.alert_account').show();
                     jQuery('.alert_account').html(result.success);
                  }});
			  
			});





		 });
	</script>
	


</body>
</html>