<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
<title>Loadly - At the office</title>
	
<link href="css/fontawesome/css/all.css" rel="stylesheet">
<link href="css/maincss.css?temp1=11" rel="stylesheet">
	
<script type="text/javascript" src="js/mainjs.js"></script>
	 
<style>
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
<style>
@import url('https://fonts.googleapis.com/css2?family=Merriweather+Sans:wght@300;800&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Asap&display=swap');

@import url('https://fonts.googleapis.com/css2?family=Monoton&display=swap');

.cls_main{
	padding:150px 5% 0 5%;
	position:relative; 
	over-flow:scroll; 
	width:100%; z-index:100; 
}

.default_bg{
	background:rgba(1, 50, 67, 0.4);
}
.trans1{
	background:rgba(1, 50, 67, 0.1);
}
.trans2{
	background:rgba(1, 50, 67, 0.2);
}
.trans3{
	background:rgba(1, 50, 67, 0.3);
}
.trans4{
	background:rgba(1, 50, 67, 0.4);
}
.trans5{
	background:rgba(1, 50, 67, 0.5);
}
.trans6{
	background:rgba(1, 50, 67, 0.6);
}
.trans7{
	background:rgba(1, 50, 67, 0.7);
}
.trans8{
	background:rgba(1, 50, 67, 0.8);
}
.trans9{
	background:rgba(1, 50, 67, 0.9);
}
.trans10{
	background:rgba(1, 50, 67, 1);
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
  from {background-color: rgba(1, 50, 67, 1);}
  to {background-color: #fff;}
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
}
 
.div_menu_class{
  transition: all 1s;
  opacity:0;
}

.div_menu_class2{
opacity:1;
} 
.div_menu_class3{ 
background: linear-gradient(180deg, rgba(255,255,255,1) 0%, rgba(255,255,255,1) 58%, rgba(255,255,255,0) 100%);
}

.nav3{
	}
	
.nav3 a{ 
	color: #453536 !important;
}
	
.div_menu_class4{
opacity:0;
} 
.loadly_company{font-family: 'Merriweather Sans', sans-serif; color:#453536; font-size:1.2em; font-weight:600}
 .loadly_about{text-decoration:underline; font-family: 'Montserrat', sans-serif; color:#a29a9a; font-size:1.3em; line-height:2em}
 .loadly_div32{margin-top:100px;}

.loadly_aboutcompany{
	display:inline-block; width:30%; margin: 10px 5px 0px 5%; height:100px; vertical-align:top
	}
.loadly_aboutyou{
	display:inline-block; width:30%; height:auto; vertical-align:top;
	}
	
.loadly_requestinfo{
	display:block; width:30%; margin-left:3%; margin-right:5px; background:#fff; height:auto; vertical-align:top;
	}
	
.loadly_getintouch{
	display:block; width:98%; margin:40px; 5px 0 5px;  height:auto;
	}
.loadly_learnmore{
	width:20%; margin-left:5px; margin-right:0px;height:auto;
	}
	
	
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
	
	 @media only screen and (max-width: 400px) { 
		 
		.loadly_aboutcompany{
			width: 95%;
			margin: 30px 5px 0px 1%;
			 position: relative;
		 }
		 .loadly_aboutyou{
			 width: 95%;
			 margin: 10px 5px 0px 1%;
			 position: relative;
		 }
		 .loadly_requestinfo{
			 width:90%;
			 margin-left:3%;
			 display: block;
			 position: relative;
		 }
		 .loadly_getintouch{
			 height: auto;
			 margin: 0px;
			 padding: 0px;
			 min-height: 900px; 
			 position: relative;
			 display: block;
		 }
		.loadly_learnmore{
			width: 90%;
		 }
		 
	}
	
	
	
	
	</style>

  <script>
   
		  window.addEventListener("scroll", function() {
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
		    document.getElementById("div_nav").classList.add("nav3");
		    document.getElementById("div_nav2").classList.add("nav3");
		   }else{
		    document.getElementById("div_menu").classList.add("div_menu_class4"); 
		    document.getElementById("div_nav").classList.remove("nav3"); 
		    document.getElementById("div_nav2").classList.remove("nav3"); 
		   }
		   document.getElementById("div_main").style.backgroundColor = "rgba(255,255,255,"+perc+")";
		   
		  
		});
  </script>

</head>
	

	
<body>
		
	
  <div class="loadly_responsive_menu" style="height: 40px;">
	  <span class="nav_responsive" style="width: auto;" onclick="openNav()">&#9776; </span>
	  <div style="width: 90%; text-align: center; display: inline-block; margin-top: -20px; margin-left: 30px;">
	  	<a href="{{('gohome')}}"><img src="images/logo2.png" width="150"></a>
	  </div>
  </div>
	
	
	
	
	<div style="z-index:1; position:fixed; width:100%; background-image:url('{{URL::to('/')}}/images/del.png'); background-size: cover; height:600px; vertical-align:top">
         
</div>

	
  <div id="div_menu" class="div_menu_class loadly_menu">
  </div>
	<div id="mainmenu_m" class="nav loadly_menu_div2" style="background: none;">
	  <div style="display: inline-block">
	    <a href="{{('gohome')}}"><img src="images/logo2.png" width="150"></a>
	  </div>
		
	  <div id="div_nav" class="loadly_contents_fonts" style="display: inline-block; font-size: small;">
		<ul>
		  <li> <a href="{{('services_pricing')}}">Service and Pricing</a></li>
		  <li><a href="{{('loadlyrepeate')}}"> Loadly Repeat</a></li>
		  <li> <a href="{{('attheoffice')}}"> At the office</a></li>
		  <li > <a href="{{('location')}}" >Locations</a> 
		  </li>
		</ul>
	  </div>
	  <div id="div_nav2" class="nav" style="float:right; font-size: small;">
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
	
	
	
	
	
	

<div id="div_main" style="position:relative; z-index:2; padding:100px 0 0 0;">
<div style="width:93%;  height:600px; vertical-align:top; padding: 0 0 0 5%;">
                         <div style="margin-top:0px;vertical-align:top;">
                          <span class="loadly_titles_sub2">A great day at the office starts<br /> 
                        before your people arrive<br /><br /></span>
						</div>
                               <span class="loadly_contents_fonts">
                        Loadly for Business is the first Dry Cleaning<br /> 
                        and Laundry benefit that picks up and <br />
                        delivers @Home and @Work.<br /><br />
                        
                        Give your employees the confidence of clean<br /> 
                        clothes and the time savings they crave.<br /><br />
						
                        </span>
                      <div class="loadly_learnmore">
					   <span class="loadly_titles_sub1">
				 <div style="background-color:orange;cursor:pointer;favorite styled;color:white;padding:10px;text-align:center; font-size:20px; display: none;">Learn more</div>

						  

                        	
                      </div>
                
</div> 


	
<div style="padding: 5%; background: #fff;">

<div style="display:inline-block; width:100%; margin:10px 5px 0 5px; background:#fff;  vertical-align:top">
         <span class="loadly_titles" >Our Services<br/></span>
</div>

<div style="display:inline-block; width:100%; padding:40px 5px 0 5px; vertical-align:top; background:#fff;">
              
    <style>
	  .loadly_ao_ourservices{
		  display:inline-block; width:30%; border:0px solid #999; margin:5px 30px 0 0;
		}
		 @media only screen and (max-width: 400px) { 
			 .loadly_ao_ourservices{
				 width:95%;  margin:30px 0 0 0;
			 }
		}
	</style>
                <div class="loadly_ao_ourservices full">
				     <div style="color:	teal;">
                     <span class="loadly_titles_sub1">Dry Cleaning<br /><br /></span>
					 </div>

                   <span class="loadly_contents_fonts">And Launder & Press. Perfect for <br /></span>
                   <span class="loadly_contents_fonts"> anything you want cleaned, pressed, <br /></span>
                    <span class="loadly_contents_fonts">and returned on a hanger.
					</span>
                </div> &nbsp; 
                
                <div class="loadly_ao_ourservices full">
				        <div style="color:	teal;">
                  	  <span class="loadly_titles_sub1"> Wash & Fold <br /> <br /></span>
					  </div>

                     <span class="loadly_contents_fonts">Perfect for all of your everyday <br /></span> 
                     <span class="loadly_contents_fonts">laundry needs, returned freshly <br /></span> 
                     <span class="loadly_contents_fonts">washed and crisply folded.</span>
                </div>&nbsp; 
                
				<div class="loadly_ao_ourservices full">
				     <div style="color:	teal;">
                      <span class="loadly_titles_sub1"> Hang Dry<br /> <br /> </span>
				    </div>

                     <span class="loadly_contents_fonts">Perfect for delicates and activewear. <br /> </span>
                     <span class="loadly_contents_fonts">Machine-washed, hung to dry, and <br /></span> 
                    <span class="loadly_contents_fonts"> returned crisply folded!</span>
				</div> 
               
                
</div> 

<div style="display:inline-block; width:100%; background:#fff; padding-top:50px; vertical-align:top">
            <span class="loadly_titles_sub1" style="color: teal;"> Our Team<br /> <br /> </span>
            <span class="loadly_contents_fonts">
First, we are advising any employee who feels any sign of the symptoms to stay home for a minimum of 14 days, based on the guidelines communicated from the CDC. With our unlimited vacation policy, our employees can focus on getting healthy and not worry about any financial impact. 

Additionally, we have provided employees with an excess of the items meant to help keep us all safe, including hand sanitizer, gloves, and face masks. We’ve also implemented increased usage of disinfectants to ensure a healthy and clean work environment in our offices and facilities. 

Pursuant to the North Carolina Governor’s reopening plan, all employees have their temperature screened and are asked a series of questions surrounding if they have any symptoms prior to starting work. We have also created more space within our facility to allow our teams to spread out more while working.
</span>
</div>
	
	
    <style>
	  .loadly_ao_delivery{
		 display:inline-block; width:30%; margin-left:5px; margin-right:5px; height:auto; vertical-align:top
		}
		 @media only screen and (max-width: 400px) { 
			 .loadly_ao_delivery{
				 width:95%;  margin:30px 0 0 0;
			 }
		}
	</style>
	
	
<div style="background:#fff; padding-top:150px;">
		<div class="loadly_ao_delivery full">

			<div style="background-image:url('images/track.svg'); background-size: fit; background-repeat:no-repeat; height:100px; vertical-align:top">  </div>
	
           <div style="border:0px solid #999; margin-top:5px">
		            <div style="color:	teal;">
                    <span class="loadly_titles_sub1">Pickup & Delivery<br /><br /></span>
					</div>

                    <span class="loadly_contents_fonts"> Loadly is the only service that will pick <br/></span>
                     <span class="loadly_contents_fonts">up and deliver directly to your <br /></span>
                     <span class="loadly_contents_fonts">employees’ homes (from 8pm to <br /></span>
                     <span class="loadly_contents_fonts">10pm, 7 days a week) and from the <br /></span>
                     <span class="loadly_contents_fonts">office (Monday through Friday, <br /></span>
                    <span class="loadly_contents_fonts"> during the day).</span>
            </div> 
		</div>   
        
        <div class="loadly_ao_delivery full">

			<div style="background-image:url('images/shirt.svg'); background-size: fit; background-repeat:no-repeat;  height:100px; vertical-align:top">  </div>
	
           <div style="border:0px solid #999; margin-top:5px">
		             <div style="color:	teal;">
                     <span class="loadly_titles_sub1">Premium Cleaning<br /><br /></span>
					 </div>

                     <span class="loadly_contents_fonts">Loadly works with local cleaning <br /></span>
                    <span class="loadly_contents_fonts"> partners, vetted for quality. Clothes <br /></span>
                     <span class="loadly_contents_fonts">are cleaned according to their care<br /> </span>
                    <span class="loadly_contents_fonts"> label and the Loadly service that is <br /></span>
                    <span class="loadly_contents_fonts"> chosen</span>.
            </div> 
		</div>   
        
         <div class="loadly_ao_delivery full">

			<div style="background-image:url('images/guarantee.svg'); background-size: fit; background-repeat:no-repeat;  height:100px; vertical-align:top"> </div>
	
           <div style="border:0px solid #999; margin-top:5px">
		            <div style="color:	teal;">
                    <span class="loadly_titles_sub1"> Ultimate Guarantee<br /><br /></span>
					</div>

                      <span class="loadly_contents_fonts"> We’ll take care of your people. If <br /></span>
                       <span class="loadly_contents_fonts">they’re not completely satisfied we’ll <br /></span>
                      <span class="loadly_contents_fonts"> make it right - including recleaning<br /></span> 
                       <span class="loadly_contents_fonts">for free or reimbursement at <br /></span>
                       <span class="loadly_contents_fonts">eplacement value.</span>
            </div> 
		</div>           
            
</div><br/><br/><br/><br/>

	
  <style>
	  .loadly_ao_icons{
		 display:inline-block; width:20%; margin-left:5px; margin-top:20px;
		}
		 @media only screen and (max-width: 400px) { 
			 .loadly_ao_icons{
				 display: block;
				 width:95%;  margin:30px 0 0 0;
			 }
		}
	</style>
	
	
<div style="display:inline-block; width:100%; margin-left:5px; margin-right:5px; margin-top:50px;background:#fff; height:20px; vertical-align:top">
        
         <span class="loadly_titles_sub1"> <div style="color:	teal;">Employees at these leading companies now enjoy Loadly</br></span>
		 </div>
</div><br /><br/><br/>

<div class="loadly_ao_icons" style="display:inline-block; width:100%; margin-left:5px; margin-right:5px;margin-top:50px; background:#fff; height:auto; vertical-align:top">
		<div style="background-image:url('images/twilio.svg');background-size: fit; background-repeat:no-repeat; margin-right:5px; height:55px; vertical-align:top">
          
        </div>
        
        <div class="loadly_ao_icons" style=" background-image:url('images/palantir.svg');background-size: fit; background-repeat:no-repeat; margin-right:5px; height:55px; vertical-align:top">
               
        </div>
        
        <div class="loadly_ao_icons" style=" background-image:url('images/udemy.svg');background-size: fit; background-repeat:no-repeat; margin-right:5px; height:55px; vertical-align:top">
               
        </div>
		

		
        
        <div  class="loadly_ao_icons" style=" background-image:url('images/eventbrite.svg');background-size: fit; background-repeat:no-repeat; margin-right:5px; height:55px; vertical-align:top">
                
        </div>
        
        <div class="loadly_ao_icons" style=" background-image:url('images/Thirdlove.svg');background-size: fit; background-repeat:no-repeat; margin-right:5px; height:55px; vertical-align:top">
              
        </div>
        
        <div class="loadly_ao_icons" style=" background-image:url('images/wonolo.svg');background-size: fit; background-repeat:no-repeat; margin-right:5px; height:55px; vertical-align:top">
              
        </div>
        
        <div class="loadly_ao_icons" style=" background-image:url('images/buzzfeed.svg');background-size: fit; background-repeat:no-repeat; margin-right:5px; height:55px; vertical-align:top">
               
        </div>
        
        <div class="loadly_ao_icons" style=" background-image:url('images/thanx.svg');background-size: fit; background-repeat:no-repeat;margin-right:5px; height:55px; vertical-align:top">
                
        </div>
        
        
</div> 

	
 <style>
	  .loadly_ao_forbusiness{
		 display:inline-block; width:30%; margin-left:5px; margin-right:5px; height:auto; vertical-align:top;
		}
		 @media only screen and (max-width: 400px) { 
			 .loadly_ao_forbusiness{
				 display: block;
				 width:95%;  margin:30px 0 0 0;
			 }
		}
	</style>
	
	
<div style="display:inline-block; width:100%; margin-left:5px; margin-right:5px;margin-top:100px; background:#fff; height:auto; vertical-align:top">
         <span class="loadly_titles_sub2">Why Loadly for Business?<br/></span>
</div>  

<div style="margin-top: 10px">
		<div class="loadly_ao_forbusiness full">

           <div style="border:0px solid #999; margin-top:5px">
		             <div style="color:	teal;">
                     <span class="loadly_titles_sub1">Be different<br /><br /></span>
					 </div>

                      <span class="loadly_contents_fonts">Dare to do more. Dry Cleaning and <br /></span>
                      <span class="loadly_contents_fonts">Laundry service is a highly requested <br /></span>
                     <span class="loadly_contents_fonts"> and differentiated perk.<br /></span>
            </div> 
		</div>   
        
        <div class="loadly_ao_forbusiness full">
	
           <div style="border:0px solid #999; margin-top:5px">
		             <div style="color:	teal;">
                     <span class="loadly_titles_sub1">Stay focused<br /><br /></span>
					 </div>
                    
                      <span class="loadly_contents_fonts">You value your team’s time. Loadly<br /></span> 
                     <span class="loadly_contents_fonts"> wants to protect it. We can save each <br /></span>
                     <span class="loadly_contents_fonts"> employee several hours a week.<br /></span>
            </div> 
		</div>   
        
         <div class="loadly_ao_forbusiness full">
	
           <div style="border:0px solid #999; margin-top:5px">
		           <div style="color:	teal;">
                   <span class="loadly_titles_sub1">Track it all<br /><br /></span>
				   </div>

                 <span class="loadly_contents_fonts"> Managing a perk has never been so <br /></span>
                  <span class="loadly_contents_fonts">easy. Get usage data, billing, and<br /> </span>
                  <span class="loadly_contents_fonts">reporting in a simple dashboard.<br /></span>
            </div> 
		</div>           
            
</div> 
<div style="display:inline-block; width:100%; margin-left:5px; margin-top:70px; margin-right:5px; vertical-align:top; height:500px; background:#ccc;background-image:url('{{URL::to('/')}}/images/ps.png'); background-size: cover; background-repeat:no-repeat; ">
</div><br /><br /> 

<div style="display:inline-block; width:100%; margin-left:5px; margin-right:5px; background:#fff; height:20px; vertical-align:top">
                <span class="loadly_contents_fonts">The Loadly for Business dashboard: manage your laundry & dry cleaning services from one convenient place.<br/></span>
</div><br /><br/><br/><br/> 

	 <style>
	  .loadly_ao_bayarea{
		 display:inline-block; width:10%; margin-left:5px; margin-right:30px; background:#fff; height:auto; vertical-align:top
		}
		 @media only screen and (max-width: 400px) { 
			 .loadly_ao_bayarea{
				 display: block;
				 width:95%;  margin:30px 0 0 0;
			 }
		}
	</style>
	
<div style="display:none; width:100%; margin-left:5px; margin-right:5px; background:#fff; height:auto; vertical-align:top"> 
         <span class="loadly_titles_sub2">
            The largest<br /> 
            service footprint <br /> 
            in the Bay Area<br /> <br /> <br /> 
			
			</span>
			
			 <span class="loadly_contents_fonts"> 
            We've got your people <br /> 
            covered, @Work and @Home<br /> <br /> <br />
			</span>
               </span>			
        
        <div class="loadly_ao_bayarea" style="width: auto;">
        		
			<div class="nav" style="background-color:orange;cursor:pointer;favorite styled;color:white;padding:10px;text-align:center;">
				<ul >
					<li >
						<a href="{{url('accounts/login')}}">Get started</a>
					</li>
				</ul>
			</div>
				</span>		 
				 
		</div><br /><br/><br/><br/> 
            <span class="loadly_contents_fonts">
            Not in the Bay Area?<br /><br />
            We also serve Los Angeles, Chicago, <br />
            Washington DC, Northern Virginia, and Boston.<br /><br /><br />
			</span>
            
            

</div> 

<div style="display:inline-block; width:100%; margin:100px 5px 0 5px; background:#fff; height:auto; vertical-align:top">
        <span class="loadly_titles_sub2"> Get in touch <br/></span>
</div> 

<div class="loadly_getintouch full">
		<div class="loadly_aboutyou full">
		        <div style="color:	teal;">
                <span class="loadly_titles_sub1">About you<br /><br /> </span>
				</div>
			 
					<div style="display: block;">
					<input id="input__usfername" class="floating__input cinput" name="firstname" type="text" placeholder="First Name" />
					<label for="input__username" class="floating__label" data-content="First Name"> 
				   </div>

					<div style="display: block; margin-top: 30px;">
					<input id="input__password" class="floating__input cinput" name="lastname" type="text" placeholder="Last Name"  style="width: 100%;"/>
					<label for="input__username" class="floating__label" data-content="Last Name"> 
				   </div>
						
					<div style="display: block; margin-top: 30px;">
					<input id="input__usfername" class="floating__input cinput" name="job" type="text" placeholder="Job Title" />
					<label for="input__username" class="floating__label" data-content="Job Title"> 
				   </div>

					<div style="display: block; margin-top: 30px;">
					<input id="input__password" class="floating__input cinput" name="email" type="text" placeholder="E-Mail"  style="width: 100%;"/>
					<label for="input__username" class="floating__label" data-content="E-Mail"> 
				   </div>
						

					<div style="display: block; margin-top: 30px;">
					<input id="input__password" class="floating__input cinput" name="phonenumber" type="text" placeholder="Phone Number"  style="width: 100%;"/>
					<label for="input__username" class="floating__label" data-content="Phone Number"> 
				   </div>
						 
                    
		</div>
					
      <div class="loadly_aboutcompany full">
		        <div style="color:	teal;">
                  <span class="loadly_titles_sub1">Your Company<br /><br /> </span>
				</div>
 
					<div style="display: block;">
					<input id="input__usfername" class="floating__input cinput" name="companyname" type="text" placeholder="Company Name" />
					<label for="input__username" class="floating__label" data-content="Company Name"> 
				   </div>

					<div style="display: block; margin-top: 30px;">
					<input id="input__password" class="floating__input cinput" name="numberofemployees" type="number" placeholder="Number of Employees"  style="width: 100%;"/>
					<label for="input__username" class="floating__label" data-content="Number of Employees"> 
				   </div>
						
						
					<div style="display: block; margin-top: 30px; width: 50%;">
					<input id="input__password" class="floating__input cinput" name="zipcode" type="text" placeholder="Zip Code"  style="width: 100%;"/>
					<label for="input__username" class="floating__label" data-content="Zip code"> 
				   </div>
						
					<div style="display: block; margin-top: 30px;">
					<textarea rows="4" cols="50" class="cinput" placeholder="Describe yourself here..." style="height: 100px;"></textarea>
				   </div>
<div class="clearfix mobile"></div>
				  
                    
		</div>
 
<div class="clearfix mobile"></div>
</div>

 
<div class="loadly_requestinfo full"> 
		   <div class="button" style="height: 40px; margin-top: 40px;">Request information</div>
		 
</div>



<!-- <div style="margin-left:80px;">
	<div class="loadly_div32">

	 <div class="loadly_footer">
	  <span class="loadly_company">Company</span><br><br>
	<span class="loadly_about">About<br>
	Careers<br>
	Contact<br>
	FAQs<br>
	Privacy<br>
	Terms<br>
	</span>
	 </div>  

	 <div class="loadly_footer ">
	  <span class="loadly_company">Connect</span><br>
	<span class="loadly_about">
	Blog<br>
	Facebook<br>
	Instagram<br>
	Twitter<br>
	</span>
	 </div> 


	 <div class="loadly_footer">
	  <span class="loadly_company">More Loadly</span><br>
	<span class="loadly_about">
	How it works<br>
	Guarantee<br>
	Share Loadly<br>
	Gift Cards<br>
	CA Do Not Sell My Info<br>
	</span>
	 </div>

<div class="loadly_footer loadly_footerright">
    <span class="loadly_company">Download our app</span><br /><br />
	<span class="loadly_account">The Loadly mobile app is the most convenient way to enjoy all Loadly services. 
	</span>
	<div style="padding-top: 10px;">
	<div style="display: inline-block; vertical-align: top; padding-top:8px;">
	<img src="images/appstore.jpg" height="35px">
	</div>
	<div style="display: inline-block; vertical-align: top; margin-left:10px;">
	<img src="images/playstore.jpg" height="47px">
	</div>

	</div>
	
-->   @include('footer')</div>

	</div>
</div>	

</div>

</body>
</html> 