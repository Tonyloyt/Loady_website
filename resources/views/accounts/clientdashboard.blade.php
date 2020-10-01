<!DOCTYPE html>
<html>
 <head>
  <title>Loadly - Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	 <meta name="_token" content="{{csrf_token()}}" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	 
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> 
  <style type="text/css">
	   
	 
	  
	  html,body {
		margin:0;
		padding:0;
		background: #fff;
	  }
	  
	  
<style>

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
    font-size: 1.2em; 
	color:#453536;
  }
 
  /* Option 1 - Display Inline */
  .nav li {
    display: inline-block;
    margin-right: -4px;
  }
.nav a {
  text-decoration: none;
  color: grey;
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
   color: grey;
}
.loadly_titles_sub3{
	font-family:'Merriweather Sans', sans-serif; 
	font-size:1.3em;
	font-weight:800;
	color:#453536;
	padding-top: 10px;
	
	}

.loadly_titles_sub2{
    font-family:'Merriweather Sans', sans-serif; 
    font-size:2.0em;
    font-weight:800;
    color: #453536;
  }
  .cinput{
      border: 1px solid #ccc;
      border-radius: 1px;
      height: 30px;
      font-size: 14px;
  }
  .loadly_contents_fonts{
	font-family:'Montserrat',sans-serif; 
	color:#453536; 
	font-size:1.2em; 
	line-height:1.5em;
	padding-top: 10px;
	}
	.loadly_contents_fonts1{
	font-family:'Montserrat',sans-serif; 
	color:#453536; 
	font-size:1.2em; 
	line-height:1.5em;
	padding-top: 10px;
	display: inline-block; 
	vertical-align: top;
	}
	 .loadly_contents_fonts11{
	font-family:'Montserrat',sans-serif; 
	color:#453536; 
	font-size:1.2em; 
	padding-left:45px;
	line-height:1.5em;
	padding-top: 10px;
	display: inline-block; 
	vertical-align: top;
	}
	.loadly_contents_fonts2{
	font-family:'Montserrat',sans-serif; 
	color:#453536; 
	font-size:1.2em; 
	line-height:1.5em;
	padding-top: 20px;
    }
    .loadly_contents_fonts{
   	font-family:  'montserrat', sans-serif;
   	color: #453536;
   	font-size: 1.2em;
   	line-height: 1.5em;
   	
   }
   .loadly_titles_sub44{
   	font-family: merriweather sans,sans-serif;
   	font-size: 2em;
   	font-weight: 800;
   	color: #453536;
   }
	  
	  .div_hover { 
		  background-color: red; 
	  
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
	
	width:auto !important; 
	padding:0 40px 0 40px !important; 
	cursor: pointer  !important;
		
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
 
	  
	  
.div_selected{
	border:1px solid orange !important;
	background:orange !important;
 }
 .div_selected1{
	border:1px solid black !important;
	
 }
 .div_selected2{
	 background: orange !important;
 }
 .div_rounds{
	border: 1px solid grey; 
	width: 40px; 
	height: 40px; 
	margin-top: 5px; 
	background: grey;
	border-radius:50px;
 }
	  
</style>
        <style>
					.fab_soft_1{
						width: 100px; background-color:#e1e1e1; display:inline-block; border: 1px solid grey; border-radius: 2px; text-align: center; padding: 10px;
					}
					.fab_soft_1:hover{
						background: grey;
						color: #fff;
					}
			.fab_soft_2{
				 display:inline-block;
				 border: 1px solid grey; padding: 5px;
				font-family: merriweather sans,sans-serif;
				font-size: 11px;
			}
			.fab_soft_2:hover{
					
						border-color: orange;
					}
.error{
	color: #D8000C;
	background-color: #FFBABA; 
	width: auto;
	padding: 0 5px 0 5px;
 }

.success{
	color: #229409; 
	width: auto;
	padding: 0 5px 0 5px;
 }
 .loadly_myaccount{
	position:fixed; 
	display: inline-block; 
	width: 20%; 
	height: 100%; 
	background: rgb(207, 204, 204); 
	vertical-align:top;
 }
 .loadly_myaccount_1{
	position: fixed; 
	margin-left: 25%; 
	width: 70%; 
	height: 98%; 
	margin-top: 30px; 
	overflow-y: scroll;
 }
 .loadly_myaccount_2{
	 display: inline-block; 
	 width: 95%; 
	 vertical-align:top;
 }
 .loadly_myaccount_3{
	display: inline-block; 
	width: 98%; 
	height: 100%; 
	vertical-align:top; 
	padding-left: 30px; 
	padding-top:20px;
 }
 .loacdly_myaccount_4{
	display: inline-block;
	 width: 40%;
 }
 .loadly_myaccount_profile{
	padding-top: 7px;
 }
 .loadly_myaccount_updatebtn{
	width: auto;
 }
 .loadly_myaccount_payment{
	display: inline-block; 
	width: 39%; 
	height: 100%; 
	vertical-align:top;
 }
 .lst{
	border:1px solid #ddd;
	border-collaplse:collapse;
}
.lst th, .lst td{
	border-bottom:1px solid #00BFFF;
	border-right:1px solid #00BFFF;
}
.loadly_oXclean{
	display: inline-block;
}
.loadly_oXclean_1{
	display: inline-block; 
	vertical-align: top;
	padding-left: 30px;
}
.loadly_oXclean_2{
  display: inline-block; 
  vertical-align: top;
  padding-left: 10px;
}
.loadly_starch{
	padding-top: 20px;
}
.loadly_rinsedrop{
	display: none; 
	width: 70%; 
	height: 100%; 
	vertical-align: top;
	margin-left: 35px;
	margin-right:20px;
}
.loadly_rinsedrop1{
	display:inline-block;
	 width: 42%; 
	 height: auto;  
	 vertical-align: top;
	 
}
.loadly_rinsedrop2{
	display:inline-block; 
	width: 42%; 
	height: auto; 
	vertical-align: top; 
	padding-left: 70px;
	margin-right: 30px;
}
.loadly_whoweare{
	display: inline-block; 
	width: 100%; 
	height: 100%; 
	vertical-align:top;  
	padding-left: 50px; 
	padding-top:10px;
}
.loadly_cleanings{
	display: none; 
	width: 98%; 
	height: 100%; 
	vertical-align: top;
}
.loadly_Heavy{
	display: inline-block; 
	vertical-align: top;
}
.loadly_paymentmethod{
	display: none; 
	width: 79%; 
	height: 100%;
	 vertical-align:top;
}
.loadly_paymentinput{
	display: inline-block; 
	padding-top: 7px;
}
.loadly_aboutyouwh{
	margin-top: 17%;"
}
.loadly_savepayment{
	margin-left: 5px;
}
.loadly_deliverypreferences{
	padding-top: 20px; 
	margin-bottom: 10%;
}
  @media only screen and ( max-width: 480px){
	  .loadly_myaccount{
		  display: none;
	  }
	  .loadly_myaccount_1{
		  display: block;
		  width: 100%;
		  margin:1% 0 0 0;
	  }
	  .loadly_myaccount_profile{
		 display: block;
		  width: 100%;
	  }
	  .loadly_myaccount_4{
		display: block;
		  width: 100%;
		  margin:20% 0 0 0; 
	  }
	  .loadly_myaccount_updatebtn{
		  display: block;
		  width: 100%;
		  margin-top: 20px;
	  }
	  .loadly_myaccount_payment{
		display: block; 
		width: 90%; 
		margin:35px 0 0 35px; 
	  }
 
	.nav_responsive{
		display: block;
	}
	 
  .loadly_responsive_menu{
	  display: block;
	  z-index: 1000;
	  background: #1d5f76;
	 }
	 
	 .loadly_myaccount{
		 display: none;
	 }
	 .div_menu_class{
		 display: block !important;
	 }
	 .loadly_oXclean{
		display: block;
		margin-left: 0px;
	 }
	 .loadly_contents_fonts11{
		 display: block;
		 padding:0px;
	 }
	 .loadly_oXclean_2{
		 
		 padding: 0px;
	 }
	 .loadly_oXclean_1{
		padding: 0px;
	 }
	 .loadly_rinsedrop1{
		 display: block;
		 width: 98%;
		 margin-left: 35px;

	 }
	 .loadly_rinsedrop2{
		display: block;
		 width: 98%; 
		 padding-left: 0px;
		 margin-left: 35px;
	 }
	 .loadly_whoweare{
		 display: block;
		 padding-left: 0px;
	 }
	 .loadly_cleanings{
		 margin-left: 35px;
	 }
	 .loadly_Heavy{
		 padding-top: 15px;
	 }
	 
	 .loadly_paymentinput{
		 display: block;
	 }
	 .loadly_aboutyouwh{
		margin-top: 10%;
	 }
	 .loadly_savepayment{
		margin-left: 35px;
	 }
	 .loadly_deliverypreferences{
		 margin-left: 35px;
	 }

	  

}

			
/******************************************/
/********* SIDE MENU START HERE ***********
/******************************************/
		
.sidenav {
  height: 100%;
  width: 0%;
  position: fixed;
  z-index: 10000000;
  top: 0;
  left: 0;
  background-color: #272021;
  overflow-x: hidden;
  transition: 0.5s;
  padding-top: 60px;
}

.sidenav a {
  padding: 8px 8px 8px 32px;
  text-decoration: none;
   
  color: #818181;
  display: block;
  transition: 0.3s;
	
	font-family: 'Oswald', sans-serif;
      width: auto;
      border-bottom: none;
      height: 30px;
      margin:0 30px 0 30px;
      line-height: 10px;
      font-size: 1em; 
}

.sidenav a:hover {
  color: #f1f1f1;
}

.sidenav .closebtn {
  position: absolute;
  top: 0;
  right: 5px;
  font-size: 36px;
  margin-left: 50px;
}

.div_menu_class{
	display: none;
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
	padding-top: 5px;
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
	
.active_li{
	 background: #fff; padding-left: 10px; border-top-left-radius: 2px; border-bottom-left-radius: 2px;padding-top: 10px;
	}
.active_li a{
	color: orange;
	}
	
	.ulc{
	 }
	.ulc li{
	  padding-left: 10px;
	}

}
  </style>

  <!-- Added -->
<script>
$(document).ready(function () {
//validation for First Name 
$('#firstname').on('input', function () { 
var firstname = $(this).val(); 
var validName = /^[a-zA-Z ]*$/; 
if (firstname.length == 0) {
$('.first-name-msg').addClass('invalid-msg').text("First Name is required");
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else if (!validName.test(firstname)) {
$('.first-name-msg').addClass('invalid-msg').text('only characters & Whitespace are allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else { 
$('.first-name-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
} 
});

//validation for First Name 
$('#lastname').on('input', function () { 
var lastname = $(this).val(); 
var validName = /^[a-zA-Z ]*$/; 
if (lastname.length == 0) {
$('.last-name-msg').addClass('invalid-msg').text("Last Name is required");
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else if (!validName.test(lastname)) {
$('.last-name-msg').addClass('invalid-msg').text('only characters & Whitespace are allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else { 
$('.last-name-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
} 
});

//Validation for zipcode
$('#zipcode').on('input', function () { 
var zipcode = $(this).val(); 
var validName = /^[0-9]+$/; 
if (zipcode.length == 0) {
$('.zipcode-msg').addClass('invalid-msg').text("Zipcode is required");
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else if (zipcode.length > 4) {
$('.zipcode-msg').addClass('invalid-msg').text('4 digits maximum'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else if (!validName.test(zipcode)) {
$('.zipcode-msg').addClass('invalid-msg').text('only digits are allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else { 
$('.zipcode-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
} 
});

//Validation for Phone Number 
$('#phone').on('input', function () { 
var phone = $(this).val(); 
var validName = /^[0-9]+$/; 
if (phone.length == 0) {
$('.phone-msg').addClass('invalid-msg').text("phone number  is required");
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else if (phone.length > 10) {
$('.phone-msg').addClass('invalid-msg').text('10 digits maximum'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else if (!validName.test(phone)) {
$('.phone-msg').addClass('invalid-msg').text('only digits are allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else { 
$('.phone-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
} 
});

//validation for Address 
$('#address').on('input', function () { 
var address = $(this).val(); 
var validName = /^[a-zA-Z ]*$/; 
if (address.length == 0) {
$('.address-msg').addClass('invalid-msg').text("Address is required");
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else if (!validName.test(address)) {
$('.address-msg').addClass('invalid-msg').text('only characters & Whitespace are allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else { 
$('.address-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
} 
});


//validation for City 
$('#city').on('input', function () { 
var city = $(this).val(); 
var validName = /^[a-zA-Z ]*$/; 
if (address.length == 0) {
$('.city-msg').addClass('invalid-msg').text("City is required");
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else if (!validName.test(city)) {
$('.city-msg').addClass('invalid-msg').text('only characters & Whitespace are allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else { 
$('.city-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
} 
});




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

// valiadtion for EmailChange
$('#pwdchange_email').on('input', function () { 
var pwdchange_email = $(this).val();
var validEmailc = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/; 
if (pwdchange_email.length == 0) { 
$('.pwdchange_email-msg').addClass('invalid-msg').text('Email is required'); 
$(this).addClass('invalid-input').removeClass('valid-input');
} 
else if (!validEmailc.test(pwdchange_email)) { 
$('.pwdchange_email-msg').addClass('invalid-msg').text('Invalid Email Address'); 
$(this).addClass('invalid-input').removeClass('valid-input');
}
else { 
$('.pwdchange_email-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
} 
});
 


// valiadtion for oldpassword
$('#oldpassword').on('input', function () { 
var oldpassword = $(this).val(); 
var cpassword = $('#cpassword').val(); 
var uppercasePassword = /(?=.*?[A-Z])/;
var lowercasePassword = /(?=.*?[a-z])/;
var digitPassword = /(?=.*?[0-9])/;
var spacesPassword = /^$|\s+/;
var symbolPassword = /(?=.*?[#?!@$%^&*-])/;
var minEightPassword = /.{6,}/;
if (oldpassword.length == 0) { 
$('.oldpassword-msg').addClass('invalid-msg').text('Password is required');
$(this).addClass('invalid-input').removeClass('valid-input');
document.getElementById("txt_status").value="not varified";
} 
else if (!uppercasePassword.test(oldpassword)) { 
$('.oldpassword-msg').addClass('invalid-msg').text('At least one Uppercase'); 
$(this).addClass('invalid-input').removeClass('valid-input');
document.getElementById("txt_status").value="not varified";
} 
else if (!lowercasePassword.test(oldpassword)) { 
$('.oldpassword-msg').addClass('invalid-msg').text('At least one Lowercase'); 
$(this).addClass('invalid-input').removeClass('valid-input');
document.getElementById("txt_status").value="not varified";
} 
else if (!digitPassword.test(oldpassword)) { 
$('.oldpassword-msg').addClass('invalid-msg').text('At least one digit'); 
$(this).addClass('invalid-input').removeClass('valid-input');
document.getElementById("txt_status").value="not varified";
} 
else if (!symbolPassword.test(oldpassword)) { 
$('.oldpassword-msg').addClass('invalid-msg').text('At least one special character'); 
$(this).addClass('invalid-input').removeClass('valid-input');
document.getElementById("txt_status").value="not varified";
} 
else if (spacesPassword.test(oldpassword)) { 
$('.oldpassword-msg').addClass('invalid-msg').text('Whitespaces are not allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input');
document.getElementById("txt_status").value="not varified";
} 
else if (!minEightPassword.test(oldpassword)) { 
$('.oldpassword-msg').addClass('invalid-msg').text('Minimum length 6');
$(this).addClass('invalid-input').removeClass('valid-input');
document.getElementById("txt_status").value="not varified";
} 
else { 
$('.oldpassword-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input');
document.getElementById("txt_status").value="varified";
}
});



// valiadtion for newpassword
$('#newpassword').on('input', function () { 
var newpassword = $(this).val(); 
var cpassword = $('#cpassword').val(); 
var uppercasePassword = /(?=.*?[A-Z])/;
var lowercasePassword = /(?=.*?[a-z])/;
var digitPassword = /(?=.*?[0-9])/;
var spacesPassword = /^$|\s+/;
var symbolPassword = /(?=.*?[#?!@$%^&*-])/;
var minEightPassword = /.{6,}/;
if (newpassword.length == 0) { 
$('.newpassword-msg').addClass('invalid-msg').text('Password is required');
$(this).addClass('invalid-input').removeClass('valid-input');
document.getElementById("txt_status").value="not varified";
} 
else if (!uppercasePassword.test(newpassword)) { 
$('.newpassword-msg-msg').addClass('invalid-msg').text('At least one Uppercase'); 
$(this).addClass('invalid-input').removeClass('valid-input');
document.getElementById("txt_status").value="not varified";
} 
else if (!lowercasePassword.test(newpassword)) { 
$('.newpassword-msg').addClass('invalid-msg').text('At least one Lowercase'); 
$(this).addClass('invalid-input').removeClass('valid-input');
document.getElementById("txt_status").value="not varified";
} 
else if (!digitPassword.test(newpassword)) { 
$('.newpassword-msg').addClass('invalid-msg').text('At least one digit'); 
$(this).addClass('invalid-input').removeClass('valid-input');
document.getElementById("txt_status").value="not varified";
} 
else if (!symbolPassword.test(newpassword)) { 
$('.newpassword-msg').addClass('invalid-msg').text('At least one special character'); 
$(this).addClass('invalid-input').removeClass('valid-input');
document.getElementById("txt_status").value="not varified";
} 
else if (spacesPassword.test(newpassword)) { 
$('.newpassword-msg').addClass('invalid-msg').text('Whitespaces are not allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input');
document.getElementById("txt_status").value="not varified";
} 
else if (!minEightPassword.test(newpassword)) { 
$('.newpassword-msg').addClass('invalid-msg').text('Minimum length 6');
$(this).addClass('invalid-input').removeClass('valid-input');
document.getElementById("txt_status").value="not varified";
} 
else { 
$('.newpassword-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input');
document.getElementById("txt_status").value="varified";
}
});





/** 
// valiadtion for newpassword
$('#newpassword').on('input', function () { 
var newpassword = $(this).val();
var validoldpassword = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?=.*[a-zA-Z]).{8,}$/; 
if (newpassword.length == 0) { 
$('.newpassword-msg').addClass('invalid-msg').text('password is required'); 
$(this).addClass('invalid-input').removeClass('valid-input');
}
else if (!validoldpassword.test(newpassword)) { 
$('.newpassword-msg').addClass('invalid-msg').text(''); 
$(this).addClass('invalid-input').removeClass('valid-input');
} 
else if (newpassword.length > 8) { 
$('.newpassword-msg').addClass('invalid-msg').text('manimum length is 8'); 
$(this).addClass('invalid-input').removeClass('valid-input');
} 
else { 
$('.newpassword-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
} 
});*/

//Validation for card Number 
$('#card').on('input', function () { 
var card = $(this).val(); 
var validName = /^[0-9]+$/; 
if (card.length == 0) {
$('.card-msg').addClass('invalid-msg').text("card number  is required");
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else if (card.length < 5) {
$('.card-msg').addClass('invalid-msg').text('5 Minimum digits  '); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else if (!validName.test(card)) {
$('.card-msg').addClass('invalid-msg').text('only digits are allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else { 
$('.card-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
} 
});

//Validation for year 
$('#year').on('input', function () { 
var year = $(this).val(); 
var validName = /^[0-9]+$/; 
var validrange = /^[2020-2100]+$/;
if (year.length == 0) {
$('.year-msg').addClass('invalid-msg').text("Year is required");
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else if (year<2020 || year>2100) {
$('.year-msg').addClass('invalid-msg').text('valid range [2020-2100]'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else if (!validName.test(year)) {
$('.year-msg').addClass('invalid-msg').text('only digits are allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else { 
$('.year-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
} 
});

//Validation for cvv 
$('#cvv').on('input', function () { 
var cvv = $(this).val(); 
var validName = /^[0-9]+$/; 
if (cvv.length == 0) {
$('.cvv-msg').addClass('invalid-msg').text("cvv is required");
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else if (cvv.length > 3) {
$('.cvv-msg').addClass('invalid-msg').text('max digits is 3'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else if (!validName.test(cvv)) {
$('.cvv-msg').addClass('invalid-msg').text('only digits are allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else { 
$('.cvv-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
} 
});

 

//validation for card name 
$('#cardname').on('input', function () { 
var cardname = $(this).val(); 
var validName = /^[a-zA-Z ]*$/; 
if (cardname.length == 0) {
$('.cardname-msg').addClass('invalid-msg').text("cardname is required");
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else if (!validName.test(cardname)) {
$('.cardname-msg').addClass('invalid-msg').text('only characters & Whitespace are allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else { 
$('.cardname-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
} 
});

//Validation for zipcode(payment method)
$('#paymentmethod_zipcode').on('input', function () { 
var paymentmethod_zipcode = $(this).val(); 
var validName = /^[0-9]+$/; 
if (paymentmethod_zipcode.length == 0) {
$('.paymentmethod_zipcode-msg').addClass('invalid-msg').text("Zipcode is required");
$(this).addClass('invalid-input').removeClass('valid-input'); 
}else if (!validName.test(paymentmethod_zipcode)) {
$('.paymentmethod_zipcode-msg').addClass('invalid-msg').text('only digits are allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else { 
$('.paymentmethod_zipcode-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
} 
});
//validation for Address (payment method)
$('#paymentmethod_city').on('input', function () { 
var paymentmethod_city = $(this).val(); 
var validName = /^[a-zA-Z 0-9 ]*$/; 
if (paymentmethod_city.length == 0) {
$('.paymentmethod_city-msg').addClass('invalid-msg').text("city is required");
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else if (!validName.test(paymentmethod_city)) {
$('.paymentmethod_city-msg').addClass('invalid-msg').text('only characters & Whitespace are allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else { 
$('.paymentmethod_city-msg').empty();
$(this).addClass('valid-input').removeClass('invalid-input'); 
} 
});



//validation for Address 
$('#paymentmethod_address').on('input', function () { 
var paymentmethod_address = $(this).val(); 
var validName = /^[a-zA-Z 0-9]*$/; 
if (paymentmethod_address.length == 0) {
$('.paymentmethod_address-msg').addClass('invalid-msg').text("Address is required");
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else if (!validName.test(paymentmethod_address)) {
$('.paymentmethod_address-msg').addClass('invalid-msg').text('only characters & Whitespace are allowed'); 
$(this).addClass('invalid-input').removeClass('valid-input'); 
} 
else { 
$('.paymentmethod_address-msg').empty();
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

<script>
    function showprofile(){
        reset();
		 document.getElementById("div_profile").style.display="inline-block";
		 document.getElementById("profile_li").classList.add("active_li");
		 document.getElementById("div_schedule").style.display="none";
         document.getElementById("div_payment").style.display="none";
        // document.getElementById("div_preferences").style.display="none";
         document.getElementById("div_subscriptions").style.display="none";
         document.getElementById("div_orderhistory").style.display="none";
        
	 }
     function showschedule(){
        reset();
		 document.getElementById("div_profile").style.display="none";
		 document.getElementById("div_schedule").style.display="inline-block";
         document.getElementById("div_payment").style.display="none";
        // document.getElementById("div_preferences").style.display="none";
         document.getElementById("div_subscriptions").style.display="none";
         document.getElementById("div_orderhistory").style.display="none";
        
	 }
     function showpayment(){

        reset();
		 document.getElementById("div_profile").style.display="none";
		 document.getElementById("div_schedule").style.display="none";
         document.getElementById("div_payment").style.display="inline-block";
         document.getElementById("pm_li").classList.add("active_li");
         //document.getElementById("div_preferences").style.display="none";
         document.getElementById("div_subscriptions").style.display="none";
         document.getElementById("div_orderhistory").style.display="none";
        
	 }
     function showpreferences(){
        reset();
         document.getElementById("div_prefcleaning").style.display="inline-block"; 
         document.getElementById("cleaning_li").classList.add("active_li"); 
        
	 }
     
     function showsubscriptions(){

        reset();
		 document.getElementById("div_profile").style.display="none";
		 document.getElementById("div_schedule").style.display="none";
         document.getElementById("div_payment").style.display="none";

        // document.getElementById("div_preferences").style.display="none";
         document.getElementById("div_subscriptions").style.display="inline-block";
         document.getElementById("sub_li").classList.add("active_li");
         document.getElementById("div_orderhistory").style.display="none";
        
	 }
     function showorderhistory(){

        reset();
		 document.getElementById("div_profile").style.display="none";
		 document.getElementById("div_schedule").style.display="none";
         document.getElementById("div_payment").style.display="none";
         //document.getElementById("div_preferences").style.display="none";
         document.getElementById("div_subscriptions").style.display="none";
         document.getElementById("div_orderhistory").style.display="inline-block";
         document.getElementById("order_li").classList.add("active_li");
        document.getElementById("div_prefdelivery").style.display="none";
		document.getElementById("div_prefcleaning").style.display="none"; 
        
	 }
     function showderiverypreference(){
        reset();
        document.getElementById("div_prefdelivery").style.display="inline-block";
        document.getElementById("delivery_li").classList.add("active_li");

     }
     

     function reset(){
		 
		 closeNav();
		 document.getElementById("galert").innerHTML="";
		 
		 document.getElementById("div_profile").style.display="none";
		 document.getElementById("div_schedule").style.display="none";
         document.getElementById("div_payment").style.display="none";
         document.getElementById("div_prefcleaning").style.display="none";
         document.getElementById("div_subscriptions").style.display="none";
         document.getElementById("div_orderhistory").style.display="none";
        document.getElementById("div_prefdelivery").style.display="none";
		 
        document.getElementById("profile_li").classList.remove("active_li");
        document.getElementById("pm_li").classList.remove("active_li");
        document.getElementById("cleaning_li").classList.remove("active_li");
        document.getElementById("sub_li").classList.remove("active_li");
        document.getElementById("delivery_li").classList.remove("active_li");
        document.getElementById("order_li").classList.remove("active_li");
        
	 }
	function mouseOver() {
  document.getElementById("demo").style.color = "yellow";
}
function mouseOver1() {
  document.getElementById("demo").style.color = "yellow";
}
function mouseOut() {
  document.getElementById("demo").style.color = "black";
}

function divhover_remove() {
    document.getElementById("div_1").style.background= "white";
	document.getElementById("div_2").style.background= "white";
}
function divhover(div) {
	divhover_remove();
  document.getElementById(div).style.background= "black";
}
	
	
</script>
	<script>
	/****** fabricsofterner */
					function changemycolor(divid){
						reset_changemycolor()
						document.getElementById(divid).classList.add("div_selected");
						document.getElementById("txtfabricsofterner").value=document.getElementById(divid).innerHTML;
					}
					function reset_changemycolor(){
						document.getElementById('div_1').classList.remove("div_selected"); 
						document.getElementById('div_2').classList.remove("div_selected");
					}
	/**** endfabricsofterner */	

    /****** oXclean  */

					function changemycolor2(divid2){
						reset_changemycolor2();
						document.getElementById(divid2).classList.add("div_selected");
						document.getElementById("txtoXcleaner").value=document.getElementById(divid2).innerHTML;
					}
					function reset_changemycolor2(){
						document.getElementById('div_3').classList.remove("div_selected"); 
						document.getElementById('div_4').classList.remove("div_selected");
					}
		/**endoXclean */
		
		        /*****************************************/
		           function changemycolor3(divid3){
					    resert_changemycolor3();
						document.getElementById(divid3).classList.add("div_selected"); 
						document.getElementById("txtdetergent").value=document.getElementById(divid3).innerHTML; 
					}
					function resert_changemycolor3(){
						document.getElementById('div_0').classList.remove("div_selected"); 
						document.getElementById('div_01').classList.remove("div_selected"); 
					}
		
		        /*****************************************/
		
		
		/** starch */
		           function changemycolor4(divid4){
					   resert_changemycolor4();
						document.getElementById(divid4).classList.add("div_selected");
						document.getElementById("txtstarch").value=document.getElementById(divid4).innerHTML; 
					}
					function resert_changemycolor4(){
						document.getElementById('div_5').classList.remove("div_selected"); 
						document.getElementById('div_6').classList.remove("div_selected");
						document.getElementById('div_7').classList.remove("div_selected"); 
						document.getElementById('div_8').classList.remove("div_selected");
						
					}
		/**endstarch */


		function changemydiv(idv){
			resert_changemydiv();
			document.getElementById(idv+"_r").classList.add("div_selected");
			document.getElementById("txtaboutyou").value=document.getElementById(idv+"_l").innerHTML;
		}
		function resert_changemydiv(){
						document.getElementById('justme_r').classList.remove("div_selected");
						document.getElementById('acouple_r').classList.remove("div_selected");
						document.getElementById('afamily_r').classList.remove("div_selected");
		}

		function init(){
			var spage="{{ $page }}";
			
			var familytype="{{ $data['familytype']}}";
			var textnotification="{{ $data['textnotification']}}";
			/***start */
			var txtdetergent="{{ $data['txtdetergent'] }}";
			var txtfabricsofterner="{{ $data['txtfabricsofterner'] }}";
			var txtoXcleaner="{{ $data['txtoXcleaner']}}";
			var txtstarch="{{ $data['txtstarch'] }}";
			
			var delivery_instructions="{{ $data['delivery_instructions'] }}";
			var doorbell="{{ $data['doorbell'] }}";
			var rushservice_washfold="{{ $data['rushservice_washfold'] }}";
			var rushservice_drycleaning="{{ $data['rushservice_drycleaning'] }}";
			
			document.getElementById("txtaboutyou").value=familytype;
				
			if(familytype=="A couple"){
				document.getElementById('acouple_r').classList.add("div_selected");
			}else if(familytype=="A family"){
				document.getElementById('afamily_r').classList.add("div_selected");
			}else if(familytype=="Just me"){
				document.getElementById('justme_r').classList.add("div_selected");
			}
			
			
			if(textnotification.toLowerCase()=="all"){
				document.getElementById('textnotification_all').checked = true;
			}else if(textnotification.toLowerCase()=="scheduling and service only"){
				document.getElementById('textnotification_scheduling').checked = true;
			}else if(textnotification.toLowerCase()=="service only"){
				document.getElementById('textnotification_service').checked = true;
			}else if(textnotification.toLowerCase()=="none"){
				document.getElementById('textnotification_none').checked = true;
			}

			/***start if */
			if(txtdetergent=="scented"){
				document.getElementById('div_0').classList.add("div_selected");
			}
			else if(txtdetergent=="Hypoallergenic"){
				document.getElementById('div_01').classList.add("div_selected");
			}



			if(txtfabricsofterner=="NO"){
				document.getElementById('div_1').classList.add("div_selected");
			}
			else if(txtfabricsofterner=="YES"){
				document.getElementById('div_2').classList.add("div_selected");
			}


			if(txtoXcleaner=="NO"){
				document.getElementById('div_3').classList.add("div_selected");
			}
			else if(txtoXcleaner=="YES"){
				document.getElementById('div_4').classList.add("div_selected");
			}


			if(txtstarch=="None"){
				document.getElementById('div_5').classList.add("div_selected");
			}
			else if(txtstarch=="Light"){
				document.getElementById('div_6').classList.add("div_selected");
			}
			else if(txtstarch=="Medium"){
				document.getElementById('div_7').classList.add("div_selected");
			}
			else if(txtstarch=="Heavy"){
				document.getElementById('div_8').classList.add("div_selected");
			}
			
			
			
			
			if(doorbell=="Do not ring your doorbell"){ 
				document.getElementById("doorbell").checked=true;
			}
			if(rushservice_washfold=="Always use Next -Day"){
				document.getElementById("rushservice_washfold").checked=true;
			}
			if(rushservice_drycleaning=="yes"){
				document.getElementById("rushservice_drycleaning").checked=true;
			}
			
			document.getElementById("delivery_instructions").value=delivery_instructions;
			
			
			if(spage=="orders"){
				showorderhistory();
			}else if(spage=="paymentmethod"){
				showpayment();
			}else if(spage=="subscription"){
				showsubscriptions();
			}
				 
		} 
		
	   function openNav() {
		  document.getElementById("mySidenav").style.width = "250px";
		  //document.getElementById("main").style.marginLeft = "250px";
		}

		function closeNav() {
		  document.getElementById("mySidenav").style.width = "0";
		 // document.getElementById("main").style.marginLeft= "0";
		}
		
    </script>
    </head>

    <body onLoad="javascript:init()">
		
		  <div id="div_menu" class="div_menu_class">
			  <span class="nav_responsive" onclick="openNav()">&#9776; </span>
		  </div>
		
		
		<div id="mySidenav" class="sidenav">
		  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
			<a href="{{('../gohome')}}"><img src="../images/logo2.png" width="150"></a><br>
		  <ul>
				 <font size = "2">
                 <a href="javascript:showprofile()"> Profile</a>
                 <a href="{{url('../customers/start/schedulepickup')}}"> Schedule pickup</a>
                 <a href="javascript:showpayment()"> Payment method</a> 
                 <a href="#"> preferences</a> 
                 <a href="javascript:showpreferences()" style="color: #fff; margin-left: 30px;"> Cleaning</a> 
                 <a href="javascript:showderiverypreference()" style="color: #fff; margin-left: 30px;"> Delivery</a> 
                 <a href="javascript:showsubscriptions()"> Subsciptions</a> 
                 <a href="javascript:showorderhistory()"> Order history </a> 
                 <a href="{{ url('/getout')}}"> Logout </a> </li> 
				</font><br /></br></br>
            </ul>
		</div>
		
		
        <div class="loadly_myaccount">
        <div style="padding-left: 30px; padding-top: 20px">
			<a href="{{('../gohome')}}"><img src="../images/logo2.png" width="150"></a><br><br>
            <span class="loadly_titles_sub2"> My Account</span>

        </div>
			 
        <div class="nav nav2" style="padding-left: 20px; padding-top: 20px">
            <ul class="ulc">
				 <font size = "2">
                <li id="profile_li" class="active_li"> <a href="javascript:showprofile()"> Profile</a> </li>
                <li > <a href="{{('../customers/start/schedulepickup')}}"> Schedule pickup</a> </li>
                <li id="pm_li" > <a href="javascript:showpayment()"> Payment method</a> </li>
                <li > <a href="#"> preferences</a> </li>
                <li id="cleaning_li" style=" margin-left: 0px;"> <a href="javascript:showpreferences()" style="margin-left: 30px;"> Cleaning</a> </li>
                <li id="delivery_li" style=" margin-left: 0px;"> <a href="javascript:showderiverypreference()" style="margin-left: 30px;"> Delivery</a> </li>
                <li id="sub_li" > <a href="javascript:showsubscriptions()"> Subsciptions</a> </li>
                <li id="order_li"> <a href="javascript:showorderhistory()"> Order history </a> </li> 
                <li > <a href="{{ url('/getout')}}"> Logout </a> </li> 
				</font><br /></br></br>
            </ul>
        </div>


		</div>
		

<div class="loadly_myaccount_1">
      @if($message = Session::get('error'))
		  
	   <div class="alert alert-danger alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>{{ $message }}</strong>
	   </div>
	   @endif
 
	
	<div id="galert" class="alert alert-success" style="display:none"></div>
	
	
    <div id="div_profile" class="loadly_myaccount_2">
           <div class="loadly_myaccount_3" >

	 <!--<form method="post" action="{{url('updateclientdashboard')}}">	 -->
	 <form id="frmprofile">	 
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

						
						<div class="loadly_myaccount_4">
							   
								<div style="display: inline-block; margin-right: 5px; width: 40%;"> 
							
									<div style="margin-bottom: 20px"> 
								   			<span class="loadly_titles_sub3" >Profile</span>
						     		</div>
									
									<div class="loadly_myaccount_profile">
										<input id="firstname" class="cinput" style="padding-left: 20px;border-color: grey;" name="firstname" type="text" required="required" placeholder="First name" value="{{ $data['fname']}}" />
									<label for="firstname" class="floating__label" data-content="First name">
									<div class="first-name-msg"></div>
								
									</div>

									<div class="loadly_myaccount_profile">
										<input id="lastname" class="cinput" style="padding-left: 20px;border-color: grey; margin-top:20px;" name="lastname" type="text" required="required" placeholder="Last name" value="{{ $data['lname']}}" />
									<label for="lastname" class="floating__label" data-content="Last name">
									<div class="last-name-msg"></div> 
									</div>

									<div class="loadly_myaccount_profile">
										<input id="email" class="cinput" style="padding-left: 20px;border-color: grey; margin-top:20px;" name="email" type="email" required="required" placeholder="Email" name="email" value="{{ $data['email'] }}" />
									<label for="email" class="floating__label" data-content="Email">
									<div class="email-msg"></div> 
									</div>
									<div class="loadly_myaccount_profile">
										<input id="phone" class="cinput" style="padding-left: 20px;border-color: grey; margin-top:20px;" name="phone" type="phone" required="required" placeholder="phone" value="{{ $data['phone']}}"/>
									<label for="phone" class="floating__label" data-content="phone">
									<div class="phone-msg"></div> 
									</div>

								</div>

										
								 <div style="display: inline-block; width: 40%;">
									        <div style="margin-bottom: 20px"> <span class="loadly_titles_sub3" >Address</span></div>

										
											<div style="display: block; padding-top: 7px;">
												<input id="address" class="cinput" style="padding-left: 20px;border-color: grey;" name="address" type="address" required="required" placeholder="address"  value="{{ $data['address']}}" />
												<label for="address" class="floating__label" data-content="address"> 
												<div class="address-msg"></div> 
											   </div>
											   <div style="display: block; padding-top: 7px;">
												<input id="apt" class="cinput" style="padding-left: 20px;border-color: grey; margin-top:20px;" name="apt" type="apt" placeholder="Apt/suite(optional)" value="{{ $data['apt']}}" />
												<label for="apt" class="floating__label" data-content="Apt/suite(optional">
												<div class="apt-msg"></div> 
												
											   </div>

											   <div>
												   <div style=" padding-top: 7px;">
													<input id="zipcode" class="cinput" style="padding-left: 20px; border-color: grey; margin-top:20px;"name="zipcode" type="zipcode" required="required" placeholder="zipcode" value="{{ $data['zipcode']}}" />
												<label for="zipcode" class="floating__label" data-content="zipcode"> 
												<div class="zipcode-msg"></div>

												</div>
												   <div style="padding-top: 7px;"> 
													<input id="city" class="cinput" style="padding-left: 20px;border-color: grey; margin-top:20px;" name="city" type="city" placeholder="city" value="{{ $data['phone']}}" />
													<label for="city" class="floating__label" data-content="city"> 
													<div class="city-msg"></div> 
												</div>
											   </div>
									 </div>
												   
												   
					<div>	
							<div style="display: inline-block; width: 40%;">
								
								<div style="margin-top: 12%;"> <span class="loadly_titles_sub3" >Text Notifications</span></div>
								
								<div class="loadly_myaccount_profile"> 
									<input type="radio" id="textnotification_all" name="textnotification" value="all" style="vertical-align: top;">
									<label for="all" class="loadly_contents_fonts"> All (Promotional , scheduling and service)</label>
								</div>
								<div class="loadly_myaccount_profile"> 
									<input type="radio" id="textnotification_scheduling" name="textnotification" value="scheduling and service only" style="vertical-align: top;">
									<label for="scheduling" class="loadly_contents_fonts"> scheduling and service only</label>
								</div>
								<div class="loadly_myaccount_profile"> 
									<input type="radio" id="textnotification_service" name="textnotification" value="service only" style="vertical-align: top;">
									<label for="service" class="loadly_contents_fonts"> Service only</label>
								</div>
								<div class="loadly_myaccount_profile"> 
									<input type="radio" id="textnotification_none" name="textnotification" value="none" style="vertical-align: top;">
									<label for="none" class="loadly_contents_fonts">None <label>
								</div>
							</div>	
							
						 <div style="display: inline-block; vertical-align: top">
						           <div class="loadly_whoweare">
									   

										<div class="loadly_aboutyouwh"><span class="loadly_titles_sub3">About you </span> <br /> <br />
											<span class="loadly_contents_fonts">who we are serving?</span>
										</div>
										<div style="margin-top: 20px;">
											<div onclick="changemydiv('justme');" id="justme" class="fab_soft_2" >
												<div id="justme_r"  class="div_rounds" ></div>
												<div id="justme_l"> Just me</div>

											</div>
											<div onclick="changemydiv('acouple');" id="acouple" class="fab_soft_2" >
												<div id="acouple_r"  class="div_rounds" ></div>
												<div id="acouple_l">A couple</div>
											</div>
											<div onclick="changemydiv('afamily');" id="afamily" class="fab_soft_2" >
												<div id="afamily_r"  class="div_rounds" ></div>
												<div id="afamily_l"> A family</div>
											</div>
											<input name="txtaboutyou" id="txtaboutyou" type="hidden" required="required" placeholder="about you" value="" />
										</div>

									</div>
					     </div>
					</div>						
			 </div>
								

			 <div id="successp" class="alert_profile alert-success" style="display:none"></div>	
								
							   <p class="loadly_myaccount_updatebtn">
							   
								<input type="submit" name="ajaxSubmit" id="ajaxSubmit" class="button" style="width: auto;" value="Update profile" />
							  </p>

	</form>


    <form  id="frm_pwd" style="width: auto;margin-top: 12%;">
						 
						@if($message = Session::get('changepwd_error')) 
						   <div class="error"> 
							<strong>{{ $message }}</strong>
						   </div>
					   @endif
						
						@if($message = Session::get('success_alert')) 
						   <div class="success"> 
							<strong>{{ $message }}</strong>
						   </div>
					   @endif
						
						
	<div class="alert_pwd alert-success" style="display:none"></div>

					<input type="hidden" name="_token" value="{{ csrf_token() }}">
							   <div style="margin-top: 12px;"><span class="loadly_titles_sub3" >Change Password</span> </div>

							<div>
								<div style="display: block; padding-top: 7px; width: 30%;">
									
									@if($errors->has('oldpassword'))
										<div class="error">{{ $errors->first('oldpassword') }}</div>
									@endif
									<input id="oldpassword" class="cinput" style="padding-left: 20px;border-color: grey;" name="oldpassword" type="password" required="required" placeholder="Old password" />
									<label for="oldpassword" class="floating__label" data-content="Old password">
									
									<div class="oldpassword-msg"></div>
										
								   </div>
									
								   <div style="display: block; padding-top: 7px; width: 30%;">
									   
									@if($errors->has('newpassword'))
										<div class="error">{{ $errors->first('newpassword') }}</div>
									@endif
									<input id="newpassword" class="cinput" style="padding-left: 20px;border-color: grey;" name="newpassword" type="password" required="required" placeholder="New password" />
									<label for="newpassword" class="floating__label" data-content="new password"> 
									<div class="newpassword-msg"></div>
								   </div>
									   
								   <div style="display: block; padding-top: 7px; width: 30%;">
									   
									@if($errors->has('pwdchange_email'))
										<div class="error">{{ $errors->first('pwdchange_email') }}</div>
									@endif
									<input id="pwdchange_email" class="cinput" style="padding-left: 20px;border-color: grey;" name="pwdchange_email" type="email" required="required" placeholder="Email" value="" />
									<label for="pwdchange_email" class="floating__label" data-content="Email"> 
									<div class="pwdchange_email-msg"></div>
								   </div> </div>

				              <p style="padding-bottom: 50px;">
								<input id="submitPasswordChange" type="submit" name="submitPasswordChange" class="button" class="loadly_contents_fonts"value="Update Password" /> 
							  </p>

					</form>

 			</div>


				
            </div>
        
 
				
				
				
				
			
        <div id="div_schedule" style="display: none; width: 79%; height: 100%; vertical-align:top;"></div>


		<div id="div_payment" class="loadly_paymentmethod">

<form id="frm_submitpayments" >

					@if($message = Session::get('subpayment_error')) 
						   <div class="error"> 
							<strong>{{ $message }}</strong>
						   </div>
					   @endif

						@if($message = Session::get('success_alert')) 
						   <div class="success"> 
							<strong>{{ $message }}</strong>
						   </div>
					   @endif


		<div class="alert_payment alert-success" id="success_payment" style="display:none"></div>

<input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="loadly_myaccount_payment">
                <div> <span class="loadly_titles_sub2" >Payment Method</span></div>
        
				<div>
					<div style="display: block; padding-top: 7px;">
						<input id="card" class="cinput" style="padding-left: 20px;border-color: grey;" name="card" type="address" required="required" placeholder="card no" value="" />
						<label for="card" class="floating__label" data-content="card"> 
						<div class="card-msg"></div>
					   </div>

					   <div>
						   <div class="loadly_paymentinput">

							<select class="cinput" id='month' name="month" required="required" style="padding-left: 20px;border-color: grey;" >
							<option value=''>-------Select Month-------</option>
							<option value='1'>Janaury</option>
							 <option value='2'>February</option>
							 <option value='3'>March</option>
							 <option value='4'>April</option>
							<option value='5'>May</option>
							 <option value='6'>June</option>
							<option value='7'>July</option>
							 <option value='8'>August</option>
							 <option value='9'>September</option>
							<option value='10'>October</option>
							 <option value='11'>November</option>
							<option value='12'>December</option>
							</select> 
		   </div>
						<div class="loadly_paymentinput"> 
							<input id="year" class="cinput" style="padding-left: 20px;border-color: grey;" name="year" type="year" required="required" placeholder="year" value="" />
							<label for="year" class="floating__label" data-content="year"> 
							
							<div class="year-msg"></div>
						</div>
						<div class="loadly_paymentinput"> 
							<input id="cvv" class="cinput" style="padding-left: 20px;border-color: grey;" name="cvv" type="cvv" required="required" placeholder="CVV" value="" />
							<label for="cvv" class="floating__label" data-content="CVV"> 
							<div class="cvv-msg"></div>
						</div>
					   </div>

				   <div style="display: block; padding-top: 7px;">
					<input id="cardname" class="cinput" style="padding-left: 20px;" name="cardname" type="cardname" required="required" placeholder="Name on card" value="" />
					<label for="cardname" class="floating__label" data-content="Name on card"> 
					<div class="cardname-msg"></div>
				   </div>
            </div>
            <div class="loadly_contents_fonts" style="padding-top: 15px;"> <span> payment data and transactions secured by </span></div>

           
            
			</div>
	
            <div class="loadly_myaccount_payment">
                        
                    <div> <span class="loadly_titles_sub2 loadly_titles_sub44" >Billing Address</span></div>
                    <div style="padding-top: 12px;"> 
                        <input type="checkbox" id="mybilling"  name="mybilling" value="mybilling" >
                        <label for="mybilling" class="loadly_contents_fonts"> My billing address is different from my service address</label>
                    </div>
            
            <div>
                <div>
                    <div style="display: inline-block; padding-top: 16px;">
                     <input id="paymentmethod_address" class="cinput" style="padding-left: 20px;" name="paymentmethod_address" type="text" required="required"placeholder="Address" value="" />
                 <label for="paymentmethod_address" class="floating__label" data-content="Address"> 
				 <div class="paymentmethod_address-msg"></div>
                 
                 </div>
                 <div style="display: inline-block; padding-top: 16px;"> 
                     <input id="paymentmethod_apt" class="cinput" style="padding-left: 20px;" name="paymentmethod_apt" type="text" placeholder="Apt (optional)" value="" />
                     <label for="paymentmethod_apt" class="floating__label" data-content="Apt (optional)">
					 <div class="paymentmethod_apt-msg"></div> 
                 </div>
                </div>

                <div>
                    <div style="display: inline-block; padding-top: 16px;">
                     <input id="paymentmethod_zipcode" class="cinput" style="padding-left: 20px;" name="paymentmethod_zipcode" type="text" required="required" placeholder="Zipcode" value="" />
                 <label for="paymentmethod_zipcode" class="floating__label" data-content="Zipcode"> 
				 <div class="paymentmethod_zipcode-msg"></div>
                 
                 </div>
                 <div style="display: inline-block; padding-top: 16px;"> 
                     <input id="paymentmethod_city" class="cinput" style="padding-left: 20px;" name="paymentmethod_city" type="text" placeholder="city" value="" />
                     <label for="paymentmethod_city" class="floating__label" data-content="city">
					 <div class="paymentmethod_city-msg"></div> 
                 </div>
                </div>
                </div>
            
			</div>

			  <p class="loadly_savepayment" >
                <input  id="submitpayments" type="submit" name="submitpayments" class="button  loadly_contents_fonts " value="Save payment method" />
              </p>
						
			</form>
					
					
					
			<div class="loadly_savepayment" style="display: block;">
			<table class="lst">
			<tr  bgcolor="#1D5481" style="color: #fff;">
			<th>id </th>
			<th>card </th>
			<th>month</th>
			<th> year </th>
			<th> cvv </th>
			<th>cardname</th>
			<th>mybilling </th>
			<th>address</th> 
			<th>zipcode </th>
			<th>city</th>
			<th></th>
			</tr>
			@foreach ($paymentmethod as $pay)
			<tr>
			<td>{{ $pay -> id }} </td>
			<td>{{ $pay -> card }} </td>
			<td>{{ $pay -> month}} </td>
			<td>{{ $pay -> year}} </td>
			<td>{{ $pay -> cvv}} </td>
			<td>{{ $pay -> cardname}} </td>
			<td>{{ $pay -> mybilling}} </td>
			<td>{{ $pay -> address}} </td>  
			<td>{{ $pay -> zipcode}} </td>
			<td>{{ $pay -> city}} </td>
			<td><a href="javascript:remove_payment_init('{{ $pay -> id}}')" id="{{ $pay -> id}}">Remove</a></td>
			</tr>
			@endforeach
			</table>
			</div>
        
        </div>
 	            <script>
					function remove_payment_init(id){
						document.getElementById(id).innerHTML="pls wait";
						 
						   $.ajaxSetup({
							  headers: {
								  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
							  }
						  });

						   jQuery.ajax({
							  url: "{{ url('/removepayment') }}",
							  method: 'post',
							  data: {
								id: id, 
							  },
							  success: function(result){
								 
									 if(result.success=="ok"){
										 window.location.href = "clientdashboard?page=paymentmethod";
									 }else{
										 alert(result.success);
									 }
								  
							  }});
						
					}
				</script>
				<div id="div_removepayment" style="display: none; position: absolute; width: 100px; height: 100px; background: #ccc">asdf</div>
				
			<div id="div_prefcleaning" class="loadly_cleanings">
			
<form  id="frm_cleaningpreferences" >


						 
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
<div class="alert_cleanigpref alert-success" id="cleaningp" style="display:none"></div>

<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div>
                <span class="loadly_titles_sub3"> Cleaning</span>
            </div>
            <div class="loadly_contents_fonts"> <span> Your cleaning preferences apply to all Loadly service</span></div>

            <div class="loadly_titles_sub3"> <span> Detergent</span></div>
            <div style="padding-top: 10px;">
                <div style="display: inline-block; vertical-align: top; " >
                    <div onclick="changemycolor3('div_0');" id="div_0" class="fab_soft_1">scented</div>
                </div>
                <div style="display: inline-block; vertical-align: top;">
                    <div onclick="changemycolor3('div_01');" id="div_01" class="fab_soft_1">Hypoallergenic</div>
                </div>
				<input id="txtdetergent" name="txtdetergent" type="hidden" required="required" placeholder="detergent" value="{{ $data['txtdetergent']}}" />
            </div>
				
				
				
            <div style="padding-top: 20px;">
                <div class="loadly_contents_fonts1" style="display: inline-block"> fabric softerner<br>
				                <div style="display: inline-block; vertical-align: top;">
									<span>
										<div onclick="changemycolor('div_1');" id="div_1" class="fab_soft_1">NO
											</div>
									</span>
								</div>
								<div style="display: inline-block; vertical-align: top;">
									<span>
										<div onclick="changemycolor('div_2');" id="div_2" class="fab_soft_1"> YES
											</div>

									</span>

								</div>
								<input id="txtfabricsofterner" name="txtfabricsofterner" type="hidden" required="required" placeholder="fabricsofterner" value="{{ $data['txtfabricsofterner']}}" />
				
				</div>
                <div class="loadly_contents_fonts11 loadly_oXclean" > oxiClean(whites only)<br>
						                <div class="loadly_oXclean_1">
											<span>
												<div  onclick="changemycolor2('div_3');" id="div_3" class="fab_soft_1">NO </div>
											</span>
										</div>
										<div class="loadly_oXclean_2">
											<span>
												  <div  onclick="changemycolor2('div_4');" id="div_4" class="fab_soft_1">YES </div>
											</span>
										</div>
										<input id="txtoXcleaner" name="txtoXcleaner" type="hidden" required="required" placeholder="oXcleaner" value="{{ $data['txtoXcleaner']}} " />
				</div>
            </div>
    
	
	
	
	
	
	
	
            <div class="loadly_contents_fonts">Fabric softerner is non hypoallergenic<br>
	
	        </div>
	
	
            <div class="loadly_contents_fonts2">Starch(Laundered & press items only</div>
            <div class="loadly_starch">
                <div style="display: inline-block; vertical-align: top;">
                   
                         <div  onclick="changemycolor4('div_5');" id="div_5" class="fab_soft_1">None </div>
                    
                </div>
                <div style="display: inline-block; vertical-align: top;padding-left: 25px;">
                   
                         <div  onclick="changemycolor4('div_6');" id="div_6" class="fab_soft_1">Light </div>
                   
                </div>
                <div style="display: inline-block; vertical-align: top;padding-left: 25px;">
                    
                        <div  onclick="changemycolor4('div_7');" id="div_7" class="fab_soft_1"> Medium </div>
                    
                </div>
                <div class="loadly_Heavy">
                     <div  onclick="changemycolor4('div_8');" id="div_8" class="fab_soft_1"> Heavy </div>
                </div>
				<input id="txtstarch" name="txtstarch" type="hidden" placeholder="starch" value="{{ $data['txtstarch'] }}" />
            </div>
            <div style="padding-top: 20px;">
                <span>
                    <input id="cleaningpreferences" type="submit" name="cleaningpreferences" class="button" value="Save cleaning preferences" required="required" style="width: auto !important;" />
                </span>

			</div>
	</form>
        
		</div>
		



<div id="div_prefdelivery" class="loadly_rinsedrop">

<form id="frm_deliveryinstructions" >
  
  						 
				       @if($message = Session::get('deliverypref_error')) 
						   <div class="error"> 
							<strong>{{ $message }}</strong>
						   </div>
					   @endif
						
						@if($message = Session::get('success_alert')) 
						   <div class="success"> 
							<strong>{{ $message }}</strong>
						   </div>
					   @endif



<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div style="display:block; padding-top:10px;">
			<div class="loadly_rinsedrop1">
				<div> <span class="loadly_contents_fonts">Loadly Drop</span></div> 
				<div style="padding-top: 20px; display: inline-block;" class="loadly_contents_fonts" class="loadly_contents_fonts"><span> When you enable Loadly drop, you won't need to present for your pickups &  deliveries. There is no more convinient way to Loadly </span></div>
				 <div style="padding-top: 30px; display: none;" class="loadly_contents_fonts"> <a href="#">Activate Loadly Drop</a></div>
		    </div>
			
			<div class="loadly_rinsedrop2">
				 <div><span class="loadly_contents_fonts"> Rush Service</span></div>
				 
                 <div style="padding-top: 7px;">
                    <input type="checkbox" id="rushservice_washfold" name="rushservice_washfold" value="yes" style="vertical-align: top;">
			       <label for="rushservice_washfold" class="loadly_contents_fonts">Wash & Fold: Always use Next -Day   Rush delivery for my wosh & fold orders<label>
                </div>

                 <div style="padding-top: 7px;">
                 <input type="checkbox" id="rushservice_drycleaning" name="rushservice_drycleaning" value="yes" style="vertical-align: top;">
			     <label for="rushservice_drycleaning" class="loadly_contents_fonts">Dry cleaning:<label>
				</div>
				
		     </div>
	    </div>

		<div style="display: block; padding-top:30px;">
			<div class="loadly_rinsedrop1">
				 <div style="padding-top: 40px;" class="loadly_contents_fonts"> <span> Delivery Instructions (optional)</span></div>
				 <div style="padding-top: 5px;" class="loadly_contents_fonts"> These instructions will be given to your   Vilet every time they stop by.</div>
				 <div style="padding-top: 5px;" >
                        <textarea name="delivery_instructions" id="delivery_instructions" cols="30" rows="8" class="loadly_contents_fonts"> </textarea>
                 </div>

		    </div>
			<div class="loadly_rinsedrop2">
				<div style="padding-top: 40px;" class="loadly_contents_fonts"> <span> About you</span></div>
				<div style="padding-top: 5px;" class="loadly_contents_fonts">Sleeping children or pet? check the box   below. If you want to ensure that your vilet does not ring your doorbell</div>
				 
				<div style="padding-top: 7px;">
                 <input type="checkbox" id="doorbell" name="doorbell" value="none" style="vertical-align: top;">
			     <label for="doorbell" class="loadly_contents_fonts">Do not ring your doorbell<label>
				</div>

		    </div>
		</div>

		<div class="alert_deliverypref alert-success" id="deliverypref" style="display:none"></div>

		<div class="loadly_deliverypreferences">
                <span>
                   <input id="savedeliverypreferences" type="submit" name="savedeliverypreferences" class="button" value="Save Delivery preferences" />
                </span>
			</div>
	</form>


	</div>

<!--User subscriptions -->

        <div id="div_subscriptions" style="display: none; width: 79%; height: 100%; vertical-align:top;">
		   <div style="margin-top: 20px; margin-left:40px;">

		   <input type="hidden" name="_token" value="{{ csrf_token() }}">

		   

@if(count($subscription)>0)

			<div style="margin-top: 0px">

			     	<input type="hidden" name="_token" value="{{ csrf_token() }}">

					<div class="loadly_titles_sub2"> Unsubscribe</div> 

					<div id="usbu" class="alert_remsub alert-success" style="display:none"></div>

					<div style="margin-top: 20px;">
						<span >
							<input id="unsubscribe" type="submit" name="unsubscribe" class="button" value="unsubscribe" />
						</span>
					</div>
			
			</div>

@else
			<div style="">
				<div class="loadly_titles_sub2"> Subscribe</div>
				<div id="usb" class="alert_usersub alert-success" style="display:none"></div>
				<div style="margin-top: 20px;">
					<span >
						<input id="subscribeme" type="submit" name="subscribeme" class="button" value="subscribe" />
					</span>
				</div>
			</div>
						
@endif


		   
		   </div>
		
		</div>


		<div id="div_orderhistory" style="display: none; width: 100%; height: 100%; vertical-align:top;">
	
							<title>View client history orders</title>

							<table class="lst">
									<tr bgcolor="#1D5481" style="color: #fff;">
										<th>Id</th>
										<th>Pickup Date</th>
										<th>Is Dry cleaning</th>
										<th>Is Wash & fold</th>
										<th>Is Hang & dry</th>
										<th>Status</th> 
									</tr>
									@foreach ($clientsorders as $clients)
									    <tr>
											<td>{{ $clients->id }}</td>
											<td>{{ $clients->scheduleddate }}</td>
											<td>{{ $clients->drycleaning }}</td>
											<td>{{ $clients->washfold }}</td>
											<td>{{ $clients->hangdry }}</td>
											<td>{{ $clients->status }}</td> 
										</tr>
									@endforeach
							 </table>

</div>
</div>	
<!---->

					 
	  <script src="http://code.jquery.com/jquery-3.3.1.min.js"
               integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
               crossorigin="anonymous">
      </script>
      <script>
         jQuery(document).ready(function(){
            jQuery('#ajaxSubmit').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
			  var not="";
			  if(jQuery('#textnotification_all').is(':checked')){
				not="all";
			  }else if(jQuery('#textnotification_scheduling').is(':checked')){
				  not="Scheduling and service only";
			  }else if(jQuery('#textnotification_service').is(':checked')){
				  not="service only";
			  }else if(jQuery('#textnotification_none').is(':checked')){
				  not="None";
			  }
			  $('#successp').css("display", "none");
               jQuery.ajax({
                  url: "{{ url('/updateclientdashboard') }}",
                  method: 'post',
                  data: {
                     firstname: jQuery('#firstname').val(),
                     lastname: jQuery('#lastname').val(),
                     email: jQuery('#email').val(),
					 phone: jQuery('#phone').val(),
					 address: jQuery('#address').val(),
					 apt: jQuery('#apt').val(),
					 zipcode: jQuery('#zipcode').val(),
					 city: jQuery('#city').val(),
					 txtaboutyou: jQuery('#txtaboutyou').val(),
					 notification: not,



                  },
                  success: function(result){
                     jQuery('.alert_profile').show();
                     jQuery('.alert_profile').html(result.success);
					 if(result.success == "Successful Update"){
						$('#successp').html("Successful Updated");
						$('#successp').css("display", "block");
						$('#successp').css("color", "green");
						$('#successp').css("font-size", "24px");
						myreload();
					 }
					 else{
						
						$('#successp').css("display", "block");
						$('#successp').css("color", "red");
						$('#successp').css("font-size", "16px");
					 }
					 

                  }});
               });




			   jQuery('#submitPasswordChange').click(function(e){
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
			   
               jQuery.ajax({
                  url: "{{ url('/changeclientpassworddashboard') }}",
                  method: 'post',
                  data: {
					oldpassword: jQuery('#oldpassword').val(),
					newpassword: jQuery('#newpassword').val(),
					pwdchange_email: jQuery('#pwdchange_email').val(),
                  },
                  success: function(result){
					  if(result.success=="Successful Update"){
						  window.location.href = "login";
					  }else{
						 jQuery('.alert_pwd').show();
						 jQuery('.alert_pwd').html(result.success);
						 jQuery('.alert_pwd').css("color", "red");
					  }
                  }});
               });




			   jQuery('#submitpayments').click(function(e){
               e.preventDefault();

				$('#success_payment').css("display", "none");

               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
			  var mm="use same address";
			  if(jQuery('#mybilling').is(':checked')){
				mm="My billing address is different from my service address";
			  }
				 
               jQuery.ajax({
                  url: "{{ url('/savepaymentdashboard') }}",
                  method: 'post',
                  data: {
					 card: jQuery('#card').val(),
					 month: jQuery('#month').val(),
					 year: jQuery('#year').val(),
					 cvv: jQuery('#cvv').val(),
					 cardname: jQuery('#cardname').val(),
					 mybilling: mm,
					 paymentmethod_address: jQuery('#paymentmethod_address').val(),
					 paymentmethod_apt: jQuery('#paymentmethod_apt').val(),
					 paymentmethod_zipcode: jQuery('#paymentmethod_zipcode').val(),
					 paymentmethod_city: jQuery('#paymentmethod_city').val(),	
                  },
                  success: function(result){
                     jQuery('.alert_payment').show();
                     jQuery('.alert_payment').html(result.success);
					 if(result.success == "Successful Updated"){
						$('#success_payment').html("Successful Updated, reloading....");
						$('#success_payment').css("display", "block");
						$('#success_payment').css("color", "green");
						$('#success_payment').css("font-size", "24px");
						 
						 //wait 3sec before reload
						 setTimeout(
						  function() 
						  {
							window.location.href = "clientdashboard?page=paymentmethod";
						  }, 3000);
						
							 
					 }
					 else{
						// $('#success_payment').html("just error");
						$('#success_payment').css("display", "block");
						$('#success_payment').css("color", "red");
						$('#success_payment').css("font-size", "16px");
					 }
					 
					 
                  }});
               });

		


			   jQuery('#cleaningpreferences').click(function(e){ 
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });
			  $('#cleaningp').css("display", "none");
               jQuery.ajax({
                  url: "{{ url('/savecleanpreferencesdashboard') }}",
                  method: 'post',
                  data: {
					txtdetergent: jQuery('#txtdetergent').val(),
					txtfabricsofterner: jQuery('#txtfabricsofterner').val(),
					txtoXcleaner: jQuery('#txtoXcleaner').val(),
					txtstarch: jQuery('#txtstarch').val(),
					
                  },
                  success: function(result){
                     jQuery('.alert_cleanigpref').show();
                     jQuery('.alert_cleanigpref').html(result.success);
					 if(result.success == "sucessfull saved"){
						$('#cleaningp').html("Successful Updated");
						$('#cleaningp').css("display", "block");
						$('#cleaningp').css("color", "green");
						$('#cleaningp').css("font-size", "24px");
						myreload();
					 }
					 else{
						$('#cleaningp').css("display", "block");
						$('#cleaningp').css("color", "red");
						$('#cleaningp').css("font-size", "16px");
					 }



                  }});
               });


			   
			   jQuery('#savedeliverypreferences').click(function(e){ 
               e.preventDefault();
               $.ajaxSetup({
                  headers: {
                      'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                  }
              });

			  $('#deliverypref').css("display", "none");

			  var rs="";
			  if(jQuery('#rushservice_washfold').is(':checked')){
				rs="Always use Next -Day";
			  }
			  var rd="";
			  if(jQuery('#rushservice_drycleaning').is(':checked')){
				rd="yes";
			  }
			  var dd="";
			  if(jQuery('#doorbell').is(':checked')){
				dd="Do not ring your doorbell";
			  }

			  
               jQuery.ajax({
                  url: "{{ url('/savedeliverypreferencesdashboard') }}",
                  method: 'post',
                  data: {
					delivery_instructions: jQuery('#delivery_instructions').val(),
					rushservice_washfold: rs,
					rushservice_drycleaning: rd,
					doorbell: dd,

					
                  },
                  success: function(result){
                     jQuery('.alert_deliverypref').show();
                     jQuery('.alert_deliverypref').html(result.success);
					 if(result.success == "successful saved"){
						 $('#deliverypref').html('successfull updated');
						 $('#deliverypref').css("display", "block");
						$('#deliverypref').css("color", "green");
						$('#deliverypref').css("font-size", "24px");;

					 }else{
						$('#deliverypref').css("display", "block");
						$('#deliverypref').css("color", "red");
						$('#deliverypref').css("font-size", "16px");
					 }


                  }});
               });

			   jQuery('#subscribeme').click(function(e){
				   
                      e.preventDefault();
                      $.ajaxSetup({
                          headers: {
                                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                        }
                                    });
									$('#usb').css("display", "none");

                                    /**************** AJAX *************** */
                                    jQuery.ajax({
                                        url: "{{ url('/usersubscription') }}",
                                        method: 'post',
                                        data: { 
                                              
                                        },
                                        success: function(result){ 
                                          jQuery('.alert_usersub').show();
                                          jQuery('.alert_usersub').html(result.success);
										  	  
											   if(result.success == "You subscribed"){
													$('#usb').html('successfull updated...reloading');
													$('#usb').css("display", "block");
													$('#usb').css("color", "green");
													$('#usb').css("font-size", "24px");
												   
												   //wait 3sec before reload
												 setTimeout(
												  function() 
												  {
													window.location.href = "clientdashboard?page=subscription";
												  }, 3000);

												}else{
													$('#usb').css("display", "block");
													$('#usb').css("color", "red");
													$('#usb').css("font-size", "16px");
												}

										  

                                        }});
                                    /*************** END AJAX *********** */
                             });



					  jQuery('#unsubscribe').click(function(e){
                      e.preventDefault();
                      $.ajaxSetup({
                          headers: {
                                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                        }
                                    });

									$('#usbu').css("display", "none");

                                    /**************** AJAX *************** */
                                    jQuery.ajax({
                                        url: "{{ url('/unsub') }}",
                                        method: 'post',
                                        data: { 
                                              
                                        },
                                        success: function(result){
                                          jQuery('.alert_remsub').show();
                                          jQuery('.alert_remsub').html(result.success);
										  if(result.success == "you unsubscribed"){
													$('#usbu').html('successfull');
													$('#usbu').css("display", "block");
													$('#usbu').css("color", "green");
													$('#usbu').css("font-size", "24px");;

											  
												   //wait 3sec before reload
												 setTimeout(
												  function() 
												  {
													window.location.href = "clientdashboard?page=subscription";
												  }, 3000);
											  
											  
												}else{
													$('#usbu').css("display", "block");
													$('#usbu').css("color", "red");
													$('#usbu').css("font-size", "16px");
												}



                                        }});
                                    /*************** END AJAX *********** */
                             });






            });

					//function to reload page
					function myreload(){ 
							e.preventDefault();
							$.ajaxSetup({
                          headers: {
                                  'X-CSRF-TOKEN': $('meta[name="_token"]').attr('content')
                                        }
                                    });


                                    /**************** AJAX ***************/
                                    jQuery.ajax({
                                        url: "{{ url('/savedeliverypreferencesdashboard') }}",
                                        method: 'post',
                                        data: {  
                                        },
                                        success: function(result){ 
                                          jQuery('.alert_deliverypref').show();
                                          jQuery('.alert_deliverypref').html(result.success);
                                        }
										});
                                    /*************** END AJAX *********** */
                          //   });
 

						   
			   }

      </script>
					 
					 
					 
    </body>
</html>

