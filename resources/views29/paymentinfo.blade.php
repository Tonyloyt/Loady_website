<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
  
<link rel="stylesheet" type="text/css" href="{{ URL::to('css/maincss.css?temp=03') }}">	
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300;800&display=swap" />	
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Asap&display=swap" />	
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Monoton&display=swap" />	
<!--<script type="text/javascript" src="{{ URL::to('js/jquery.min.js') }}"></script>-->
	
<style>
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
	
 
 
/****************************/


.cls_main{
	padding:150px 5% 0 5%;
	position:relative; 
	over-flow:scroll; 
	width:100%; z-index:100; 
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
		   }else{
		    document.getElementById("div_menu").classList.add("div_menu_class4"); 
		    document.getElementById("mainmenu").classList.remove("nav3"); 
		   }
}
</script>
	
</head>

<body>

<!-- MENU SECTION --->
  <div id="div_menu" class="div_menu_class" style="height:50px;  margin-right: 5px; width:100%; position:fixed; top:-5px; verticle-align:center; padding: 20px 6px 25px 5px; z-index: 101;">
  </div>
  <div  style="height:40px; width:85%; position:fixed; top:-5px; verticle-align:center; padding: 20px 6px 25px 15px; z-index: 101; ">
   <div id="mainmenu" class="nav" style="display: inline-block; font-size: small;">
      <ul>
        <li> <a href="{{url('services_pricing')}}">Service and Pricing</a></li>
        <li><a href="loadlyrepeat.html"> Loaadly Repeat</a></li>
        <li> <a href="attheoffice.html"> At the office</a></li>
        <li > <a href="location_sanfrancisco.html" >Locations</a> 
        </li>
      </ul>
    </div>
    <div class="nav" style="float:right; font-size: small;">
      <ul >
      <li >
      <a href="#">Log in</a>
      </li>
      <li>
      <a href="#" >
      <span style="background-color: orange; color:#fff; padding: 15px 35px 15px 7px;" >
      Schedule a pickup
      </span>
      </a>
      </li>
      </ul>
      </div>
  </div>
	
 <div style="position:fixed;  width:100%; z-index:99 " >
<video autoplay muted loop id="myVideo" style="right: 0; bottom: 0; min-width: 100%; min-height: 100%;">
  <source src="http://localhost/wordpress/wp-content/video/loadlyc.mp4" type="video/mp4">
</video>
</div>

<div id="div_main" class="cls_main default_bg">
<br><br><br><br>
<span style="font-family: 'Merriweather Sans', sans-serif; color:#fff; font-size:5em; font-weight:800">Your Dry Cleaning <br>and Laundry. Done.</span>
<div  style="margin-top: 20px; font-family: 'Asap', sans-serif; color:#fff; font-size:2em; font-weight:500">
   Loadly picks up, cleans, and delivers.<br>
   Now you have time for what really matters.
</div>


<div style="font-family: 'Asap', sans-serif; font-size:20px; color:#fff; width:300px; margin-top:60px; padding:10px; background:#f5ab35; text-align:center; letter-spacing:0.1em"> Schedule a pickup</div>




<!-- why loadly ---------------------------->

<div style="margin-top:300px">
 <span style="font-family: 'Merriweather Sans', sans-serif; color:#fff; font-size:4.5em; font-weight:800">Why use Loadly for your <br>dry cleaning and laundry?</span>
</div>



<div style="margin-top:100px;">

 <div style="display:inline-block; width:28%;vertical-align:top">
 <span style="font-family: 'Monoton', cursive; color:#fff; font-size:3em;">Convenience</span><br>
 <span style="font-family: 'Montserrat', sans-serif; color:#fff; font-size:1.5em; line-height:2em">We pick up and deliver 7 days a week, always between 8pm and 10pm. Complete a Loadly even when you’re not home, with Loadly Drop.</span>
 </div>


<div style="display:inline-block; width:28%; margin-left:5%;vertical-align:top">
 <span style="font-family: 'Monoton', cursive; color:#fff; font-size:3em;">Value</span><br>
 <span style="font-family: 'Montserrat', sans-serif; color:#fff; font-size:1.5em; line-height:2em">Our award-winning services are priced comparably to other high-quality cleaners.</span>
 </div>




<div style="display:inline-block; width:28%; margin-left:5%;vertical-align:top">
 <span style="font-family: 'Monoton', cursive; color:#fff; font-size:3em;"> Quality </span><br>
 <span style="font-family: 'Montserrat', sans-serif; color:#fff; font-size:1.5em; line-height:2em">Our Co-founder, James Joun, grew up in the business and knows what it takes.</span>
 </div>


</div>
<!-- end why loadly ------------------------->



<div style="margin:150px 0 100px 0;">
<span  style="font-family: 'Asap', sans-serif; color:#fff; font-size:2em; font-weight:500">
   We’ll take great care of your clothing, guaranteed.
</span>
</div>




<!-- how works ---------------------------->
<div style="margin-top:300px">
 <span style="font-family: 'Merriweather Sans', sans-serif; color:#fff; font-size:4.5em; font-weight:800">How Loadly works</span>
</div>

<div style="margin-top:50px;">

 <div style="display:inline-block; width:28%;vertical-align:top">
 <span style="font-family: 'Monoton', cursive; color:#fff; font-size:3em;">Schedule</span><br>
 <span style="font-family: 'Montserrat', sans-serif; color:#fff; font-size:1.5em; line-height:2em">Schedule via text message, Loadly.com, or our apps before 5pm for same-day service.</span>
 </div>


<div style="display:inline-block; width:28%; margin-left:5%;vertical-align:top">
 <span style="font-family: 'Monoton', cursive; color:#fff; font-size:3em;">Clean</span><br>
 <span style="font-family: 'Montserrat', sans-serif; color:#fff; font-size:1.5em; line-height:2em">Your clothes are expertly cleaned according to the Loadly service you select.</span>
 </div>




<div style="display:inline-block; width:28%; margin-left:5%;vertical-align:top">
 <span style="font-family: 'Monoton', cursive; color:#fff; font-size:3em;"> Deliver </span><br>
 <span style="font-family: 'Montserrat', sans-serif; color:#fff; font-size:1.5em; line-height:2em">Standard turnaround time is 3–4 days  , with 1–2 day Rush Delivery* available for a fee.</span>
 </div>


</div>
<!-- end how works ------------------------->


<div style="width:80%; z-index:99; margin-top:100px " >
<video autoplay muted loop id="myVideo" style="right: 0; bottom: 0; width: 100%; min-height: 100%;">
  <source src="http://localhost/wordpress/wp-content/video/loadlyc.mp4" type="video/mp4">
</video>
</div>



<div style="margin-top:150px;">
 
<div style="font-family: 'Merriweather Sans', sans-serif; font-size:2em; width:80%; color: #b2d9e3; font-weight: 800;">
Pressed and on hangers, or neatly folded?
</div>
 
<div style="font-family: 'Merriweather Sans', sans-serif; color:#fff; font-size:4em; font-weight:800; margin-top:20px;">Your Loadly bags. Your choice.</div>

</div>


<div style="width:100%; margin-top: 100px">

<div style="width:30%; background:#f0f4fc; display:inline-block; vertical-align:top">
<div style="padding:40px">
  <span style="font-family: 'Merriweather Sans', sans-serif; color:#eb9d00; font-size:2em; font-weight:600;  ">Dry Cleaning ><br> </span><br>
<span style="font-family: 'Montserrat', sans-serif; color:#776e64; font-size:18px; line-height:1.5em">Clothes in this bag are Dry&nbsp;Cleaned or Laundered (according to their care label), ironed, and returned on hangers.</span>

<div style="font-family: 'Montserrat', sans-serif; color:#453536; font-size:20px; line-height:1em; margin:40px 0 20px 0;"><strong>Priced per item - $2.95 to $9.00+</strong></div>

<span style="font-family: 'Montserrat', sans-serif; color:#776e64; font-size:18px; line-height:1.5em;">
That’s roughly $40 for an order of a few shirts and blouses and a couple of pants or a dress.
</span>
</div>

<div style="bottom:-5px">
<img src="images/dry.jpg" alt="guaranteed" width="100%" >
</div> 
</div>

<div style="width:30%; height:auto; background:#f0f4fc; display:inline-block; margin-left:5%; vertical-align:top">
<div style="padding:40px">
<span style="font-family: 'Merriweather Sans', sans-serif; color:#eb9d00; font-size:2em; font-weight:600">Wash & Fold ><br> </span><br>
<span style="font-family: 'Montserrat', sans-serif; color:#776e64; font-size:18px; line-height:1.5em">perfct for every day laundry, items in this bag are returned crisply folded - including paired socks!</span>
 
<div style="font-family: 'Montserrat', sans-serif; color:#776e64; font-size:18px; line-height:1.5em; margin:40px 0 20px 0;">
For wash & Fold, we offer per-pound price at <span style="font-family: 'Montserrat', sans-serif; color:#453536; font-size:1.2em;  ">$2.25/lb</span>, or customers can sign up for our subscription laundry service, <span style="font-family: 'Montserrat', sans-serif; color:#453536; font-size:1.2em;">Loadly Repeat</span>, and pay by the bag to save. 
</div>
</div>

<div style="bottom:-5px; padding-top:20px;">
<img src="images/bag.jpg" width="100%">
</div>
</div> 

</div>



<!-- save with our laundry ---------------------------->
<div style="padding:250px 0 0 " id="div_savewithus">
 <span style="font-family: 'Merriweather Sans', sans-serif; color:#453536; font-size:3.5em; font-weight:800">Save with our laundry and <br>delivery subscriptions</span>
</div>


<div style="margin: 50px 0 0 0;">

<div style="width:30%; height:auto; background:#e8e9e7; display:inline-block; vertical-align:top">
    <div style="padding: 40px;">
			<span style="font-family: 'Merriweather Sans', sans-serif; color:#453536; font-size:2em; font-weight:600">Wash & Fold, charged by the bag </span><br><br>
			<span style="font-family: 'Montserrat', sans-serif; color:#776e64; font-size:18px; line-height:1.5em;"> 
			One bag. One price per bag. If it fits, it’ll get washed! Next-Day Rush Delivery available.
			Plans start at only $50/month.
			</span>
	</div>
	<div style="margin-top:20px;">
       <img src="images/pack.jpg" width="100%">
	</div>
</div>

<div style="width:30%; height:auto; background:#fbfcfd; display:inline-block; vertical-align:top;margin-left:5%;">
	<div style="padding: 40px;">
		  <span style="font-family: 'Merriweather Sans', sans-serif; color:#453536; font-size:2em; font-weight:600">Unlimited pickups & deliveries </span><br><br>
		<span style="font-family: 'Montserrat', sans-serif; color:#776e64; font-size:18px; line-height:1.5em">
		Loadly Go means no Service Fee ($7.95/order). If you use us once a month or more, you’ll save! $79/year, or $7.95/month
		</span>
	</div>
	
	<div style="margin-top:20px;">
       <img src="images/deliver.jpg" width="100%">
	</div>
	
</div>

</div>

<!--  save with our laundry ------------------------------------>



<div style="margin-top:150px">
<img src="http://localhost/wordpress/wp-content/uploads/2020/09/guarantee.png" alt="guaranteed" width="200px">
</div>


<div style="margin-top:50px">
 <span style="font-family: 'Merriweather Sans', sans-serif; color:#453536; font-size:3.5em; font-weight:800">The best guarantee<br> in the business</span>
</div>

<div style="width:60%; font-family: 'Montserrat', sans-serif; color:#a09a93; font-size:1.5em; line-height:1.5em; margin: 20px 0 0 0; word-spacing: 0.1em">
We will do everything we can to return your clothes to you in great shape. In the rare instance that an item goes missing or is damaged during the cleaning process, we’ll reimburse you up to the full value of the item with a $1,000 maximum per order.
</div>

<div style="font-family: 'Montserrat', sans-serif; color:#a09a93; font-size:1.5em; line-height:1.5em; margin: 20px 0 0 0; word-spacing: 0.1em">
<div style="margin-top:100px;width:60; font-family: 'Montserrat', sans-serif; color:#776e64; font-size:1.8em; line-height:1.5em">
The most trusted brand in clothing care since 2013
	</div>
	
<div class="box_shadow" style="display:inline-block; width:23%; padding:20px;font-family: 'Montserrat', sans-serif; font-size:0.8em; line-height:1.5em">
 Millions of pickups and<br>deliveries completed
</div>

<div class="box_shadow" style="display:inline-block; width:23%; padding:20px; margin-left:20px;font-family: 'Montserrat', sans-serif; font-size:0.8em; line-height:1.5em">
 Millions of clothes<br> cleaned and pressed
</div>

<div class="box_shadow" style="display:inline-block; width:23%; padding:20px; margin-left:20px;font-family: 'Montserrat', sans-serif; font-size:0.8em; line-height:1.5em">
 10M+ gallons of<br> laundry water saved
</div>

</div>



<div style="font-family: 'Asap', sans-serif; font-size:20px; color:#fff; width:300px; margin-top:60px; padding:10px; background:#f5ab35; text-align:center; letter-spacing:0.1em"> Schedule a pickup</div>


<div style="margin-top:100px">

<div style="color:#a29a9a; font-family: 'Montserrat', sans-serif; font-size:2em; width:80%; font-weight: 800; margin: 0 0 20px 0;">
You’ve got questions?
</div>
 
<div style="font-family: 'Merriweather Sans', sans-serif; color:#453536; font-size:3em; font-weight:800">We’ve got answers</div>
 
<div style="margin: 50px 0 0 0;">
	 <div style="display:inline-block; width:28%;vertical-align:top">
	 <span style="font-family: 'Merriweather Sans', sans-serif; color:#453536; font-size:2em; font-weight:600">How do I schedule my first Loadly?</span><br><br>
	 <span style="font-family: 'Montserrat', sans-serif; color:#776e64; font-size:18px; line-height:2em">Once you’ve created your account you can schedule online or via our mobile app (available on iOS and Android) You can also text “Y” to 746-73 (LOADLY) before 4pm for a pickup that same evening.</span>
	 </div>


	<div style="display:inline-block; width:28%; margin-left:5%;vertical-align:top">
	 <span style="font-family: 'Merriweather Sans', sans-serif; color:#453536; font-size:2em; font-weight:600">Can I receive a delivery if I’m not home?</span><br><br>
	 <span style="font-family: 'Montserrat', sans-serif; color:#776e64; font-size:18px; line-height:2em">No problem! We can pick up and drop off right from your doorstep or concierge. Email care@loadly.com to set your contactless preferences.</span>
	 </div>




	<div style="display:inline-block; width:28%; margin-left:5%;vertical-align:top">
	 <span style="font-family: 'Merriweather Sans', sans-serif; color:#453536; font-size:2em; font-weight:600"> How do I get my Loadly bags? </span><br><br>
	 <span style="font-family: 'Montserrat', sans-serif; color:#776e64; font-size:18px; line-height:2em">Your Valet will bring your personalized Loadly bags to your first pickup. They’re yours to use for all future Loadly orders!</span>
	 </div>
</div>
	
	
 
</div>






<div style="margin-top:100px; ">

 <div style=" display:inline-block; width:200px;vertical-align:top">
  <span style="font-family: 'Merriweather Sans', sans-serif; color:#453536; font-size:1.2em; font-weight:600">Company</span><br><br>
<span style="text-decoration:underline; font-family: 'Montserrat', sans-serif; color:#a29a9a; font-size:1.5em; line-height:2em">About<br>
Careers<br>
Contact<br>
FAQs<br>
Privacy<br>
Terms<br>
</span>
 </div>  

 <div style=" display:inline-block; margin-left:20px; width:200px; vertical-align:top">
  <span style="font-family: 'Merriweather Sans', sans-serif; color:#453536; font-size:1.2em; font-weight:600">Connect</span><br>
<span style="text-decoration:underline; font-family: 'Montserrat', sans-serif; color:#a29a9a; font-size:1.5em; line-height:2em">
Blog<br>
Facebook<br>
Instagram<br>
Twitter<br>
</span>
 </div> 
 

 <div style=" display:inline-block; margin-left:20px; width:200px;vertical-align:top">
  <span style="font-family: 'Merriweather Sans', sans-serif; color:#453536; font-size:1.2em; font-weight:600">More Loadly</span><br>
<span style="text-decoration:underline; font-family: 'Montserrat', sans-serif; color:#a29a9a; font-size:1.5em; line-height:2em">
How it works<br>
Guarantee<br>
Share Loadly<br>
Gift Cards<br>
CA Do Not Sell My Info<br>
</span>
 </div>

</div>


</div>
	
</body>
</html> 

