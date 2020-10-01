<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
<title>Loadly Laundry</title>
  
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/maincss.css?temp=08') }}">	
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300;800&display=swap" />	
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Asap&display=swap" />	
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" />
<script type="text/javascript" src="js/mainjs.js"></script>	
<!--<script type="text/javascript" src="{{ URL::to('js/jquery.min.js') }}"></script>-->
	
<style>
body {
	margin-left: 0px !important;
	margin-top: 0px !important;
	margin-right: 0px !important;
	margin-bottom: 0px !important;
	padding: 0px !important;
}
	
 
 
/****************************/


.cls_main{
	padding:150px 5% 0 5%;
	position:relative; 
	over-flow:scroll; 
	width:90%; 
	z-index:100; 
}

.default_bg{
	background:rgba(29, 96, 118, 0.4);
}
.trans1{
	background:rgba(29, 96, 118, 0.1);
}
.trans2{
	background:rgba(29, 96, 118, 0.2);
}
.trans3{
	background:rgba(29, 96, 118, 0.3);
}
.trans4{
	background:rgba(29, 96, 118, 0.4);
}
.trans5{
	background:rgba(29, 96, 118, 0.5);
}
.trans6{
	background:rgba(29, 96, 118, 0.6);
}
.trans7{
	background:rgba(29, 96, 118, 0.7);
}
.trans8{
	background:rgba(29, 96, 118, 0.8);
}
.trans9{
	background:rgba(29, 96, 118, 0.9);
}
.trans10{
	background:rgba(29, 96, 118, 1);
}

.white_bg { 
	padding:150px 5% 0 5%; 
	position:relative; 
	over-flow:scroll; 
	width:100%; z-index:100; 
  animation: changetowhite 1s;
  background: #fff;
}

@keyframes changetowhite {
  from {background-color: rgba(29, 96, 118, 1);}
  to {background-color: #fff;}
}
	
	
	
/****************************************/

.div_menu_class{
  transition: all 1s;
  opacity:0;
}

.div_menu_class2{
opacity:1;
} 
.div_menu_class3{ 
   background: rgba(255,255,255,0.9);
   color: #000000 !important;
}
.div_menu_class4{
   background: rgba(255,255,255,0);
   color: #fff;
} 
	
	
</style>
	 
	

<script>

var white_on=false;
var prevperc="";
function showIt() {
 
    const scrolled = window.scrollY;
    var wh = window.innerHeight;

    var perc=(scrolled/wh); 
    perc = perc.toFixed(1);
 
if(perc<0.4){
  perc=0.4;
} 
perc=perc*10;
if(perc>10){
perc=10;
}
var divmain = document.getElementById("div_main");
 
if(white_on==false){ 
//divmain.style.backgroundColor='rgba(29, 96, 118, '+perc+')';
 }

//detect when scroll reaches certain point
var bodyRect = document.body.getBoundingClientRect();
var element=document.getElementById("div_savewithus");
var rect = element.getBoundingClientRect();

var offset   = rect.top - bodyRect.top;

  if(scrolled>offset){
     white_on=true;
     document.getElementById("div_main").classList.add('white_bg');
     document.getElementById("div_main").classList.remove('cls_main');
     document.getElementById("myVideo").style.display="none";
  }else{ 

     document.getElementById("myVideo").style.display="block";

     white_on=false;
     document.getElementById("div_main").classList.add('cls_main');
     var pr=perc-1;
      
     

     if(prevperc==""){prevperc=perc;}

     document.getElementById("div_main").classList.add('trans'+perc);
     document.getElementById("div_main").classList.remove('white_bg');      
     
     if(prevperc!=perc){ 
       document.getElementById("div_main").classList.remove('trans'+prevperc);
     } 
     prevperc=perc;
     document.getElementById("div_main").classList.remove('default_bg'); 
 
	  menubg();
}
    
}

window.addEventListener('scroll', showIt);
 
function menubg(){
	var h=document.body.clientHeight;
		   var perc=window.scrollY/h;
		   perc=(10*(parseFloat(perc).toFixed(2)))*1.5; // i did x1.5 that it can change 1.5 faster than scroll
		  
		   var perc2=0;
		    
		   if(perc>1){
		    perc=1;
		   }
	 
		   if(perc>0){ 
		    document.getElementById("div_menu").classList.remove("div_menu_class4");
		    document.getElementById("div_menu").classList.add("div_menu_class2"); 
		    document.getElementById("div_menu").classList.add("div_menu_class3");
		    document.getElementById("mainmenu").classList.add("nav3");
		    document.getElementById("mainmenu2").classList.add("nav3");
		    document.getElementById("loadly_logo_inner").classList.add("loadly_logo_inner");
		   }else{
		    document.getElementById("div_menu").classList.add("div_menu_class4"); 
		    document.getElementById("mainmenu").classList.remove("nav3"); 
		    document.getElementById("mainmenu2").classList.remove("nav3"); 
		    document.getElementById("loadly_logo_inner").classList.remove("loadly_logo_inner"); 
		   }
}
</script>

		
	<style>
	 .loadly_menu{
		 height:50px;  
		 margin-right: 5px; 
		 width:100%; 
		 position:fixed; 
		 top:-5px; 
		 verticle-align:center; 
		 padding: 20px 6px 25px 5px; 
		 z-index: 101;
		}
	 
	 .loadly_menu_div2{
		 height:40px; 
		 width:85%; 
		 position:fixed; 
		 top:-5px; 
		 verticle-align:center; 
		 padding: 20px 6px 25px 15px; 
		 z-index: 101;
		}
		
		.loadly_mainmenu{ 
		     display: inline-block; 
			 font-size: small;
			 }
		 .loadly_menual{
				 float:right; 
				 font-size: small;
			 }
		 .loadly_schedule{
				background-color: orange;
				color:#fff;
				padding: 15px 35px 15px 7px;	
			}
			.loadly_cleaning{
				font-family: 'Merriweather Sans; 
				sans-serif; color:#fff; 
				font-size:5em; 
				font-weight:800;
			}
			.loadly_matters{
				margin-top: 20px;
				font-family: 'Asap', sans-serif;
				color:#fff; 
				font-size:2em; 
				font-weight:500;	
			}
			.loadly_Schedule_pickup{
				font-family: 'Asap', sans-serif; 
				font-size:20px; 
				color:#fff; 
				width:300px;
				margin-top:60px;
				padding:10px; 
				background:#f5ab35; 
				text-align:center; 
				letter-spacing:0.1em;
			}
			.loadly_laundry1{
				margin-top:300px;
			}
			.loadly_laundry2{
				font-family: 'Merriweather Sans', sans-serif;
				color:#fff;
				font-size:6em;
				font-weight:800;
			}
			.loadly_Convenience1{
				margin-top:100px;
				
			}
			.loadly_Convenience2{
				font-family: 'Monoton', cursive;
				color:#fff; 
				font-size:3em;	
			}
			.loadly_week{
			font-family: 'Montserrat', sans-serif; 
			color:#fff; 
			font-size:1.0em;
			line-height:2em	
			}
			.loadly_value2{
				font-family: 'Monoton', cursive;
				color:#fff; 
				font-size:3em;
			}
			.loadly_winning{
				font-family: 'Montserrat', sans-serif;
				color:#fff; font-size:1em;
				line-height:2em;
			}
			.loadly_quality2{
				font-family: 'Monoton', cursive; 
				color:#fff; 
				font-size:3em;
			}
			.loadly_founder{
				font-family: 'Montserrat', sans-serif;
				color:#fff; 
				font-size:1em; 
				line-height:2em;
			}
			.loadly_quaranteed{
				font-family: 'Asap', sans-serif; 
				color:#fff; 
				font-size:2em;
				font-weight:500
			}
			.loadly_work{
				font-family: 'Merriweather Sans', sans-serif;
				color:#fff;
				font-size:4.5em;
				font-weight:800;
			}
			.loadly_Schedulee{
				font-family: 'Monoton', cursive; 
				color:#fff; 
				font-size:3em;
			}
			.loadly_clean{font-family: 'Monoton', cursive; color:#fff; font-size:3em;}
			.loadly_select{font-family: 'Montserrat', sans-serif; color:#fff; font-size:1em; line-height:2em}
			.loadly_deliver{font-family: 'Monoton', cursive; color:#fff; font-size:3em;}
		    .loadly_standard{font-family: 'Montserrat', sans-serif; color:#fff; font-size:1em; line-height:2em}
			
			.loadly_dry_cleaning{font-family: 'Merriweather Sans', sans-serif; color:#eb9d00; font-size:2em; font-weight:600;  }
			.loadly_clothes{font-family: 'Montserrat', sans-serif; color:#776e64; font-size:18px; line-height:1.5em}
			.loadly_priced{font-family: 'Montserrat', sans-serif; color:#453536; font-size:20px; line-height:1em; margin:40px 0 20px 0;}
			.loadly_dress{font-family: 'Montserrat', sans-serif; color:#776e64; font-size:18px; line-height:1.5em;}
			.loadly_wash{font-family: 'Merriweather Sans', sans-serif; color:#eb9d00; font-size:2em; font-weight:600}
			.loadly_perfect{font-family: 'Montserrat', sans-serif; color:#776e64; font-size:18px; line-height:1.5em}
			.loadly_customers{font-family: 'Montserrat', sans-serif; color:#color:#776e64;; font-size:1em;}
			
			.loadly_save{font-family: 'Merriweather Sans', sans-serif; color:#453536; font-size:3.5em; font-weight:800}
			.loadly_wash_fold{font-family: 'Merriweather Sans', sans-serif; color:#453536; font-size:2em; font-weight:600}
			.loadly_one_bag{font-family: 'Montserrat', sans-serif; color:#776e64; font-size:18px; line-height:1.5em;}
			.loadly_unlimited{font-family: 'Merriweather Sans', sans-serif; color:#453536; font-size:2em; font-weight:600}
			.loadly_loadly_Go{font-family: 'Montserrat', sans-serif; color:#776e64; font-size:18px; line-height:1.5em}
			
			.loadly_best{font-family: 'Merriweather Sans', sans-serif; color:#453536; font-size:3.5em; font-weight:800font-family: 'Merriweather Sans', sans-serif; color:#453536; font-size:3.5em; font-weight:800}
			.loadly_return{width:60%; font-family: 'Montserrat', sans-serif; color:#a09a93; font-size:1.5em; line-height:1.5em; margin: 20px 0 0 0; word-spacing: 0.1em}
			.loadly_millions{display:inline-block; width:23%; padding:20px;font-family: 'Montserrat', sans-serif; font-size:0.8em; line-height:1.5em}
			.loadly_pickup{font-family: 'Asap', sans-serif; font-size:20px; color:#fff; width:300px; margin-top:60px; padding:10px; background:#f5ab35; text-align:center; letter-spacing:0.1em}
			.loadly_question{color:#a29a9a; font-family: 'Montserrat', sans-serif; font-size:2em; width:80%; font-weight: 800; margin: 0 0 20px 0;}
		    .loadly_answers{font-family: 'Merriweather Sans', sans-serif; color:#453536; font-size:3em; font-weight:800}
			.loadly_how{font-family: 'Merriweather Sans', sans-serif; color:#453536; font-size:1em; font-weight:600}
			.loadly_account{font-family: 'Montserrat', sans-serif; color:#776e64; font-size:18px; line-height:2em}
			.loadly_trusted{margin-top:100px;width:60; font-family: 'Montserrat', sans-serif; color:#776e64; font-size:1.8em; line-height:1.5em}
			
			.loadly_company{font-family: 'Merriweather Sans', sans-serif; color:#453536; font-size:1.2em; font-weight:600}
			.loadly_about{text-decoration:underline; font-family: 'Montserrat', sans-serif; color:#a29a9a; font-size:1.3em; line-height:2em}
			
			.loadly_divis{position:fixed;  width:100%; z-index:99}
			.loadly_video{right: 0; bottom: 0; min-width: 100%; min-height: 100%;}
			
			 .loadly_div{margin:150px 0 100px 0;}
			 .loadly_div3{margin-top:300px}
			 .loadly_div4{margin-top:50px;}
		
			 .loadly_howworks{
				 display:inline-block; 
				 width:28%;
				 vertical-align:top;
				 margin-right:5%;
		     }
		 
			 .loadly_div7{width:80%; z-index:99; margin-top:100px }
		
			 .loadly_div8{margin-top:150px;}
			 .loadly_div9{width:100%; margin-top: 100px}
			 
			 .loadly_pressed{font-family: 'Merriweather Sans', sans-serif; font-size:2em; width:80%; color: #b2d9e3; font-weight: 800;}
			 .loadly_loadly_bag{font-family: 'Merriweather Sans', sans-serif; color:#fff; font-size:4em; font-weight:800; margin-top:20px;}
			 
			 .loadly_div11{padding:40px}
			.loadly_div12{bottom:-5px}
		
			.loadly_bagss{
				width:30%; 
				height:auto; 
				background:#f0f4fc; 
				display:inline-block; 
				margin-right:3%; 
				vertical-align:top;
		    }  
		
			.loadly_div14{padding:40px}
			.loadly_div15{font-family: 'Montserrat', sans-serif; color:#776e64; font-size:18px; line-height:1.5em; margin:40px 0 20px 0;}
			.loadly_div16{bottom:-5px; padding-top:20px;}
			.loadly_div17{padding:250px 0 0 }
			.loadly_div18{margin: 50px 0 0 0;}
			.loadly_div20{padding: 40px;}
			.loadly_div21{margin-top:20px;}
		
		    .loadly_savewithus{
				width:30%; height:auto; background:#fbfcfd; display:inline-block; vertical-align:top;margin-right:5%;
		     }
			.loadly_div22{background:#e8e9e7;} 
		
			.loadly_div23{padding: 40px;}
			.loadly_div24{margin-top:20px;}
			.loadly_div25{margin-top:150px}
			.loadly_div26{font-family: 'Montserrat', sans-serif; color:#a09a93; font-size:1.5em; line-height:1.5em; margin: 20px 0 0 0; word-spacing: 0.1em}
			.loadly_div27{margin-top:100px}
			.loadly_div28{margin: 50px 0 0 0;}
			.loadly_div29{display:inline-block; width:28%;vertical-align:top; margin-right: 20px;}
			.loadly_div30{font-family: 'Merriweather Sans', sans-serif; color:#453536; font-size:1em; font-weight:600}
			.loadly_div31{font-family: 'Montserrat', sans-serif; color:#776e64; font-size:18; line-height:2em}
			
			.loadly_div32{margin-top:100px;}
		
		 
			
		
		
			.loadly_whychooseus{
				display:inline-block; 
				width:28%;
				vertical-align:top;
				margin-right:5%;
		    }
		 
		
	 
.loadly_logo_inner{
	padding: 10px; border-radius: 5px; background: #1d5f76; width: 160px; display: inline-block;
	  }		
			
 @media only screen and (max-width: 600px) {
  .loadly_div29 {
    display: block;
	width: 100%;
	margin: 35px 0 0 0;
  }
	 
  .loadly_menu_div2{
	  display: none;
	 }
 
	 
	 .loadly_whychooseus{
		 display: block;
		 width: 100%;
	     margin: 35px 0 0 0;
	 }
	 
	 .loadly_howworks{
		 display: block;
		 width: 100%;
	     margin: 35px 0 0 0; 
	 }
	 
	 .loadly_bagss{
		 display: block;
		 width: 98%;
	     margin: 35px 5px 0 5px;  
	 }
	 .loadly_savewithus{
		 display: block;
		 width: 100%;
	     margin: 35px 5px 0 5px;  
	 }
	 .loadly_return{
		 width: 100%;
	 }
	 .loadly_millions{
		 display: block;
		 width:  88%;
	     margin: 35px 5px 0 5px;  
	 }
	 .loadly_footer{
	     margin: 35px 1% 0 0; 
		 width: 48%;
	 }
	 .loadly_cleaning{
		 font-size: 3em;

	 }
	 .cls_main{
	   padding:150px 1% 0 1%;
	   margin: 0 0 0 0;
	   width: 98%;
	 }
	 
	 .white_bg { 
	    padding:150px 1% 0 1%; 
	 }
	 .loadly_laundry1{
		margin-top:180px;	 
	 }
	 .loadly_laundry2{
		 font-size: 1em;
	 }
	 .loadly_save{
		font-size: 2.5em; 
	 }
	 .loadly_Convenience2{
		 font-size: 0.9em;
	 }
	 .loadly_div17{
		 padding-top: 100px;
	 }
	 .loadly_Convenience1{
		 margin-top:  5px;
	 }
	 .loadly_div3{
		margin-top:  90px;
	 }
	 .loadly_div{
		margin-top:  90px;
	 }
	 .loadly_div9{
		margin-top:  10px;
	 }
	 .loadly_unlimited{
		 font-size: 1.7em;
	 }
}	
			
	</style>
	
 
	
</head>

<body>

	
  <div class="loadly_responsive_menu" style="height: 45px; background: #1d5f76;">
	  <span class="nav_responsive" onclick="openNav()">&#9776; </span>
	  <div style="display: inline-block; text-align: center; width: 90%;">
	    <a href="{{('gohome')}}"><img src="images/logo2.png" width="150"></a>
	  </div>
  </div>
	
	
<!-- MENU SECTION --->
  <div id="div_menu" class="div_menu_class loadly_menu">
	  
  </div>
  <div class="loadly_menu_div2" style="background: none;">
  	  <div id="loadly_logo_inner" style="display: inline-block">
  		<a href="{{('gohome')}}"><img src="images/logo2.png" width="150"></a>
	  </div>
   <div id="mainmenu" class="nav loadly_mainmenu">
      <ul>
        <li> <a href="{{('services_pricing')}}">Service and Pricing</a></li>
        <li><a href="{{('loadlyrepeate')}}"> Loadly Repeat</a></li>
        <li> <a href="{{('attheoffice')}}"> At the office</a></li>
		  <li > <a href="{{('location')}}" >Locations</a></li>
      </ul>
    </div>
    <div id="mainmenu2" class="nav loadly_menual">
      <ul >
      <li >
      <a href="{{url('accounts/login')}}">Log in</a>
      </li>
      <li>
      <a href="{{url('customers/start/schedulepickup')}}" >
      <span class="loadly_schedule" >
      Schedule a pickup
      </span>
      </a>
      </li>
      </ul>
      </div>
  </div>
	
<div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="{{('gohome')}}">Home</a>
  <a href="{{('services_pricing')}}">Service & Pricing</a>
  <a href="{{('loadlyrepeate')}}">Loadly Repeat</a>
  <a href="{{('attheoffice')}}">At the office</a>
  <a href="{{('location')}}">Locations</a>
  <a href="{{url('accounts/login')}}">Log in</a>
  <a href="{{url('customers/start/schedulepickup')}}" >Schedule a pickup </a>
</div>
	
	
<div id="main" >	
	
	 <div class="loadly_divis" >
	<video autoplay muted loop id="myVideo loadly_video">
	  <source src="video/loadlyc.mp4" type="video/mp4">
	</video>
	</div>
	
<!---->
<div id="div_main" class="cls_main default_bg">
	 
	<span class="loadly_cleaning" style="display: block;">YOUR LAUNDRY.
</span>
<span class="loadly_cleaning" style="display: block;">OUR PRIORITY. </span>
	<div  class="loadly_matters">
	   Loadly picks up, cleans, and delivers. <br>
	   Now you have time for what really matters.
	</div>
 
  
	<div class="nav loadly_Schedule_pickup"> <ul> <li><a href="{{url('customers/start/schedulepickup')}}" class="nav4" >Schedule a pickup</a></li></ul>
		</div>
  



	<!-- why loadly ---------------------------->

	<div class="loadly_laundry1">
	 <span class="loadly_laundry2">Why use LoadLy for your dry cleaning and laundry needs?</span>
	</div>



	<div class="loadly_Convenience1">

	 <div class="loadly_whychooseus">
	 <span class="loadly_Convenience2">Convenient Service</span><br>
	 <span class="loadly_week">We pick up and deliver 7 days a week, between 7am and 7pm. Request a Load service even when you are NOT home with our Contactless Delivery! So, sit back and relax and let us take care of your dirty work!</span>
	 </div>


	<div class="loadly_whychooseus">
	 <span class="loadly_Convenience2">Quality Centered</span><br>
	 <span class="loadly_winning">Our Team of laundry experts know what it takes to get the job done! Here at LoadLy, superior Quality will always be our top priority. Our Quality Assurance Associates will ensure all services are performed up to standards.</span>
	 </div>




	<div class="loadly_whychooseus">
	 <span class="loadly_Convenience2"> Integrity Focused </span><br>
	 <span class="loadly_founder">At LoadLy, we believe it is critically important for our teammates to understand and embrace our vision, mission, and our values. The foundation for our success is our reputation for adhering to the highest standards for safety, quality and integrity. We are committed to building lifelong trustworthy relationships with our customers.</span>
	 </div>


	</div>
	<!-- end why loadly ------------------------->



	<div class="loadly_div">
	<span  class="loadly_quaranteed">
	   We’ll take great care of your clothing, guaranteed.
	</span>
	</div>




	<!-- how works ---------------------------->
	<div class="loadly_div3">
	 <span class="loadly_laundry2">How LoadLy Works</span>
	</div>

	<div class="loadly_div4">

	 <div class="loadly_howworks">
	 <span class="loadly_Convenience2">Schedule</span><br>
	 <span class="loadly_week">SCHEDULE via text message, or loadlylaundry.com before 5:00 pm for same-day service.</span>
	 </div>


	<div class="loadly_howworks">
	 <span class="loadly_Convenience2">Clean</span><br>
	 <span class="loadly_select">Your clothes are expertly cleaned according to the LoadLy service you select.</span>
	 </div>




	<div class="loadly_howworks">
	 <span class="loadly_Convenience2"> Deliver </span><br>
	 <span class="loadly_standard">Standard turnaround time is 3–4 days with 1–2 day Rush Delivery available for a fee.</span>
	 </div>


	</div>
	<!-- end how works ------------------------->


	<div class="loadly_div7">
	<video autoplay muted loop id="myVideo" style="right: 0; bottom: 0; width: 100%; min-height: 100%;">
	  <source src="video/loadlyc.mp4" type="video/mp4">
	</video>
	</div>



	<div class="loadly_div8">

	<div class="loadly_pressed">
	Pressed and on hangers, or neatly folded?
	</div>

	<div class="loadly_laundry2">Your Loadly bags. Your choice.</div>

	</div>


	<div class="loadly_div9">

	<div class="loadly_bagss">
	<div class="loadly_div11">
	  <span class="loadly_dry_cleaning">Dry Cleaning <br> </span><br>
	<span class="loadly_clothes">Clothes in this bag are Dry&nbsp;Cleaned or Laundered (according to their care label), ironed, and returned on hangers.</span>

	<div class="loadly_priced"><strong>Priced per item - $3 to $12+</strong></div>

	<span class="loadly_dress">
	That’s roughly $40 for an order of a few shirts and blouses and a couple of pants or a dress.
	</span>
	</div>

	<div class="loadly_div12">
	<img src="images/dry.jpg" alt="guaranteed" width="100%" >
	</div> 
	</div>

	<div class="loadly_bagss">
	<div class="loadly_div14">
	<span class="loadly_wash">Wash & Fold <br> </span><br>
	<span class="loadly_perfect">perfct for every day laundry, items in this bag are returned crisply folded - including paired socks!</span>

	<div class="loadly_div15">
	For wash & Fold, we offer per-pound price at <span class="loadly_customers">$1.5/lb</span>, or customers can sign up for our subscription laundry service, <span style="font-family: 'Montserrat', sans-serif; color:#453536; font-size:1.2em;">Loadly Repeat</span>, and pay by the bag to save. 
	</div>
	</div>

	<div class="loadly_div16">
	<img src="images/bag.jpg" width="100%">
	</div>
	</div> 

	<div class="loadly_bagss">
	<div class="loadly_div14">
	<span class="loadly_wash">LoadLy Loyalty <br> </span><br>
	<span class="loadly_perfect">LoadLy LoyalTy offers a recurring monthly subscription service that offers a pickup and delivery option at a discounted rate. With this signature service you will receive an additional $10 off each bag ordered. Order more and save big! </span>

	<div class="loadly_div15">
 <span style="font-family: 'Montserrat', sans-serif; color:#453536; font-size:1.2em; display: block;" class="loadly_priced"><strong>Pricing - $ 29.99 monthly.</strong>  </span> 
  <span class="loadly_customers" style="display: none;"> create an account & Subscribe today! Already a member? Login to complete subscription! </span>
	</div>
	</div>

	<div class="loadly_div16">
	<img src="images/bag.jpg" width="100%">
	</div>
	</div>

	</div>



	<!-- save with our laundry ---------------------------->
	<div class="loadly_div17" id="div_savewithus">
	 <span class="loadly_save" style="display: block;">Save with our laundry </span>
	 <span class="loadly_save" style="display: block;">subscription service</span>
	</div>


	<div class="loadly_div18">

	<div class="loadly_savewithus loadly_div22">
		<div class="loadly_div20">
				<span class="loadly_unlimited">Wash & Fold, charged by the bag </span><br><br>
				<span class="loadly_one_bag"> 
				One bag. One price per bag. If it fits, it’ll get washed! Next-Day Rush Delivery available.
				Plans start at only $50/month.
				</span>
		</div>
		<div class="loadly_div21">
		   <img src="images/pack.jpg" width="100%">
		</div>
	</div>

	<div class="loadly_savewithus">
		<div class="loadly_div23">
			  <span class="loadly_unlimited">Unlimited pickups & deliveries </span><br><br>
			<span class="loadly_loadly_Go">
			Loadly Go means no Service Fee ($7.95/order). If you use us once a month or more, you’ll save! $79/year, or $7.95/month
			</span>
		</div>

		<div class="loadly_div24">
		   <img src="images/deliver.jpg" width="100%">
		</div>

	</div>

	</div>

	<!--  save with our laundry ------------------------------------>



	<div class="loadly_div25">
	<img src="images/guaranteeblue 2.png" alt="guaranteed" width="200px">
	</div>


	<div class="loadly_div25">
	 <span class="loadly_save">The best guarantee  in the business</span>
	</div>

	<div class="loadly_return">
	We will do everything we can to return your clothes to you in great shape. In the rare instance that an item goes missing or is damaged during the cleaning process, we’ll reimburse you up to the full value of the item with a $1,000 maximum per order.
	</div>

	<div class="loadly_div26">
	<div class="loadly_trusted">
	The most trusted brand in clothing care since 2013
		</div>

	<div class="box_shadow loadly_millions">
	 Millions of pickups and<br>deliveries completed
	</div>

	<div class="box_shadow loadly_millions">
	 Millions of clothes<br> cleaned and pressed
	</div>

	<div class="box_shadow loadly_millions">
	 10M+ gallons of<br> laundry water saved
	</div>

	</div>



	<div class="nav loadly_pickup"><ul> <li><a href="{{url('customers/start/schedulepickup')}}" class="nav4" >Schedule a pickup</a></li></ul></div>


	<div class="loadly_div27">

	<div class="loadly_question">
	You’ve got questions?
	</div>

	<div class="loadly_save">We’ve got answers</div>

	<div class="loadly_div28">
		 <div class="loadly_div29">
		 <span class="loadly_how">Do I have to sort or pre-treat stains?</span><br><br>
		 <span class="loadly_account">Nope. Simply fill the bag before pickup and we will take it from there. We sort all lights and darks into separate piles and pre-treat stains before items go in the washer.
Please check your pockets for personal items before filling the bag. We will do our best to check, but your help is appreciated!
</span>
		 </div>


		<div class="loadly_div29">
		 <span class="loadly_how">Can I customize my cleaning preferences?</span><br><br>
		 <span class="loadly_account">Yes. During signup, you can select which detergent and fabric softener (if any) that you would like to use. We have scented and hypoallergenic options for detergent. Our hypoallergenic option is perfect for sensitive skin and baby safe. You can change these preferences per pickup in your online account.</span>
		 </div>




		<div class="loadly_div29">
		 <span class="loadly_div30"> Can I request special folding or sorting by household member? </span><br><br>
		 <span class="loadly_div31">For your convenience, we offer two different sized Wash, Dry, Fold Bags.
Our large bag is 22.5” x 33” and holds 4-5 loads or ~35 lb. of laundry. It’s comparable in size to a standard laundry basket or hamper. This is a great option for couples or small families.
Our small bag is 20” x 28” and holds 2-3 loads or ~20 lb. of laundry. This bag is recommended for individual use.
</span>
		 </div>

      <div class="loadly_div29">
		 <span class="loadly_div30"> How big are the bags and how much can they fit? </span><br><br>
		 <span class="loadly_div31">Right now, we do not have the ability to request special folds or sorting by household member. However, all items will be folded, sorted by item type, and stacked with similar sizes to the best of our ability. Our goal is to make the “putting away” process easy. Who knows, maybe one day we will do that for you!</span>
		 </div>

	</div>



	</div>





      @include('footer')
	

	</div>
	
	</div>
	 
	
</body>
</html> 

