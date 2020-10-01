<!DOCTYPE html>
<html>
 <head>
  <title>Simple Login System in Laravel</title>
   
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
  width:100%;
  height:100px; 
  padding:0 30px;
  margin-top:60px;
  font-family:helvetica;
  overflow:hidden;
  position:relative;
  z-index:99; 
}
.arrow {
  display:block;
  width:30px;
  height:100px;
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
  padding:0 20px;
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

 .hscroll{
	  background:#fff; 
	  border:1px solid #000; 
	  margin-left:10px; 
	  border-radius: 2px;
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
	
	
</script>
 </head>
 <body>

	 
	 
   <div style="width:100%; height: 100px; background: #ccc;"></div>
	
   <div id="div_zipcode" style="padding: 20px 60px 0 60px;"> 
	   <div style="display: inline-block; width: 45%;">
		 <p class="loadly_titles">Clean clothes,<br> the easy way</p> 
		 <p class="loadly_contents_fonts" style="width: 60%; font-size: 20px; margin-top: 25px;">
			 Picked up dirty. Returned clean - straight to your door. It’s not magic, but it is magical.
		   </p>

	   </div>

	   <div style="display: inline-block; width: 45%">
		 
	   </div>
 </div> 
	 

   <div id="div_schedulepickup" style="display: block; padding: 20px 60px 0 60px;"> 
	 <form action = "{{url('insertorder')}}" method = "post">
		   <div style="display: inline-block; width: 40%; position: fixed">
			 <p class="loadly_titles">Schedule <br>a pickup</p> 
			 <p class="loadly_contents_fonts" style="width: 80%; font-size: 20px; margin-top: 25px;">
				 Rinse serves your neighborhood!
			 </p>

		   </div>

		   <div style="display: inline-block; right: 50px; position: fixed">
			 <ul style="list-style: circle; direction: rtl; list-style-position: inside;">
			  <li style="list-style: disc; font-size: 25px;"><span style="font-size: 16px;">Schedule</span></li>
			  <li style="list-style: circle; font-size: 25px;"><span style="font-size: 16px;">Account</span></li>
			  <li style="list-style: circle; font-size: 25px;"><span style="font-size: 16px;">More Info</span></li>
			  <li style="list-style: circle; font-size: 25px;"><span style="font-size: 16px;">About you</span></li>
			</ul>
		   </div>


		   <div style="display: inline-block; width: 45%; margin-left: 40%;">
			 <p class="loadly_p">Choose an evening for your pickup</p>

			   <div class="box_shadow" style="width: 400px;">
				   <div id="wrapper">
					  <span   class="arrow" onClick="javascript:r()">&lt;</span>
					  <span   class="arrow" onClick="javascript:l();">&gt;</span>
					  <ul id="nav">
						<li class="box_shadow hscroll" >List 1</li>
						<li class="box_shadow hscroll">List 2</li>
						<li class="box_shadow hscroll">List 3</li>
						<li class="box_shadow hscroll">List 4</li>
						<li class="box_shadow hscroll">List 5</li>
						<li class="box_shadow hscroll">List 6</li>
						<li class="box_shadow hscroll">List 7</å>
						<li class="box_shadow hscroll">List 8</li>
						<li class="box_shadow hscroll">List 9</li>
						<li class="box_shadow hscroll">List 10</li>
						<li class="box_shadow hscroll">List 11</li>
						<li class="box_shadow hscroll">List 12</li>
						<li class="box_shadow hscroll">List 13</li>
					  </ul>
					</div>
			   </div>

		   <p class="loadly_p" style="margin-top: 25px;">Which Rinse services are you planning to use?</p>
		   <div class="box_shadow" style="width: 80%; height: 120px; margin-top: 20px;">Dry Cleaning</div>
		   <div class="box_shadow" style="width: 80%; height: 120px; margin-top: 10px; z-index: 10;">Wash & Fold</div>
		   <div class="box_shadow" style="width: 80%; height: 120px; margin-top: 10px; z-index: 11">Hang Dry</div>

		   <br><br><br><br>
		 @if (session('status'))
<div class="alert alert-success" role="alert">
	<button type="button" class="close" data-dismiss="alert">×</button>
	{{ session('status') }}
</div>
@elseif($message = Session::get('error'))
		  
	   <div class="alert alert-danger alert-block">
		<button type="button" class="close" data-dismiss="alert">×</button>
		<strong>{{ $message }}</strong>
	   </div>
	   @endif
		 
			   <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>"><br>
			   <input type='text' name='scheduledate' /><br>
			   <input type='text' name='servicetype' /><br>
			   <input type='text' name='status' />
		   <br><br><br><br>

		   <p>
		 <input type = 'submit' value = "Continue" class="button"/>
		 </p>
		   <p style="margin-top: 50px"></p>
		 </div>
	   </form>
 </div> 
	  
	
   <div id="div_account" style="display: none; padding: 20px 60px 0 60px;"> 
	   <div style="display: inline-block; width: 40%; position: fixed">
		 <p class="loadly_titles">Create your<br> account</p> 
		 <p class="loadly_contents_fonts" style="width: 80%; font-size: 20px; margin-top: 25px;">
			 Let’s finish setting up your account to confirm your pickup for Sunday, September 6th.
		 </p>

	   </div>

	   <div style="display: inline-block; right: 50px; position: fixed">
		 <ul style="list-style: circle; direction: rtl; list-style-position: inside;">
		  <li style="list-style: circle; font-size: 25px;"><span style="font-size: 16px;">Schedule</span></li>
		  <li style="list-style: disc; font-size: 25px;"><span style="font-size: 16px;">Account</span></li>
		  <li style="list-style: circle; font-size: 25px;"><span style="font-size: 16px;">Account</span></li>
		  <li style="list-style: circle; font-size: 25px;"><span style="font-size: 16px;">More Info</span></li>
		  <li style="list-style: circle; font-size: 25px;"><span style="font-size: 16px;">About you</span></li>
		</ul>
	   </div>
	   
	   
	   <div style="display: inline-block; width: 45%; margin-left: 40%;">
		 <p class="loadly_p">Let’s set up your account</p>
		  
		   <div>
			    <div style="display: inline-block;">
				<input id="input__username" class="floating__input" name="firstname" type="text" placeholder="First Name" />
				<label for="input__username" class="floating__label" data-content="First Name"> 
			   </div>
					
			    <div style="display: inline-block;">
				<input id="input__username" class="floating__input" name="lastname" type="text" placeholder="Last Name" />
				<label for="input__username" class="floating__label" data-content="Last Name"> 
			   </div>
					

			</div>
					
	   <p><a href="#" class="button">Continue</a></p>
	   <p style="margin-top: 50px"></p>
	   </div>
			   
 </div> 
	

</body>
</html>