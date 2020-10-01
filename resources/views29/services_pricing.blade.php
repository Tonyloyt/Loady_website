<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
<title>Loadly - Services Pricing</title>
	
<link href="css/fontawesome/css/all.css" rel="stylesheet">
<link href="css/maincss.css?temp1=01" rel="stylesheet">
	
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
	font-size:3.4em;
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
	font-size:1em; 
	line-height:1.8em;
}
 .loadly_company{font-family: 'Merriweather Sans', sans-serif; color:#453536; font-size:1.2em; font-weight:600}
 .loadly_about{text-decoration:underline; font-family: 'Montserrat', sans-serif; color:#a29a9a; font-size:1.3em; line-height:2em}
 .loadly_div32{margin-top:100px;}
.loadly_footer{display:inline-block; margin-right:20px; width:200px; vertical-align:top} 

 
</style>

<style>
 
 
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
	  color: #e47e1a;
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
	 

	
	  </style>

</head>
	

	
<body>
  
  <div class="loadly_responsive_menu">
	  <span class="nav_responsive" onclick="openNav()">&#9776; </span>
	  <div style="display: inline-block; text-align: center; width: 90%;">
	    <a href="{{('gohome')}}"><img src="images/logo2.png" width="150"></a>
	  </div>
  </div>
	
	<div class="nav loadly_menu_div2" style="z-index: 100">
	  <div style="display: inline-block">
	    <a href="{{('gohome')}}"><img src="images/logo2.png" width="150"></a>
	  </div>
	  <div class="loadly_contents_fonts" style="display: inline-block; font-size: small;">
		<ul>
		  <li> <a href="{{('services_pricing')}}">Service and Pricing</a></li>
		  <li><a href="{{('loadlyrepeate')}}"> Loadly Repeat</a></li>
		  <li> <a href="{{('attheoffice')}}"> At the office</a></li>
		  <li > <a href="{{('location')}}" >Locations</a> 
		  </li>
		</ul>
	  </div>
	  <div class="nav;" style="float:right; font-size: small;">
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
	<div style="background:#f2f0ee; width:100%; position:fixed; top:75px; padding:20px 0 20px 50px; z-index: 100000">
	 <div class="nav">
		  <ul>
			<li class="wash_fold"><a class="active" href="{{('services_pricing')}}">Wash & Fold</a></li>
			<li class="drycleaning"><a href="{{('drycleaning')}}">Dry Cleaning</a></li>
			<li class="otherservices"><a href="{{('otherservices')}}"> Other Services</a></li> 
		  </ul>
	 </div> 
	</div>


<style>
	.sloaddly_washfold{
		display:inline-block; width:30%; margin-left: 0px; margin-top:5px; margin-right:3px; vertical-align:top;
	}
	.sloadly_wvideo{
		display:inline-block; width:45%; margin-left:5px; margin-right:5px; background:#ccc; height:200px; vertical-align:top
	}
	
@media only screen and (max-width: 600px) {
		.sloaddly_washfold{
			display:block; width:100%;
		 }
	  .sloadly_wvideo{
		  margin:100px 0 0 0;
		display:block; width:100%; 
	   }
	}
</style>
	
	
<div style="height:100px; width:100% ; padding-top: 90px;"></div>
<div style="display:relative; margin-top:10px; padding:0 50px 0 50px;">

<div>
		<div class="sloaddly_washfold">
			<div style="padding-right: 50px;">
                   <span class="loadly_titles"> Wash & Fold<br /></span>
                    <span class="loadly_contents_fonts">Everything in The Laundry Bag will be spot treated, sorted by lights and darks, washed on cold, dried on medium, and expertly folded before return.
Our Laundry Bags just might put your washer & dryer out of a job. All items to wash, dry, and fold or household items to wash, dry, and fold go in here. 

			</div>
		</div>
            
		<div class="sloadly_wvideo">
	         <video autoplay muted loop id="myVideo" style="right: 0; bottom: 0; width: 100%; min-height: 100%;">
			  <source src="video/loadlyc.mp4" type="video/mp4">
			</video>
	    </div>
</div><br />
<div style="margin-top: 90px;">
	<div class="sloaddly_washfold"> 
					<div style="padding-right: 50px;">
                   <span class="loadly_titles"> Large bag<br /></span>
                    <span class="loadly_contents_fonts" style="display: block;">What can fit in the large laundry bag?</span>
                    <span class="loadly_contents_fonts" style="display: block;">This bag is most popular for a family of 4-6</span>
                    <span style="display: block; margin-top: 10" class="loadly_contents_fonts"> 
                    	<ul style="list-style-type: none;">
                    	<li> 25 shirts</li>
                    	<li> 10 pairs of pants</li>
                    	<li> 5 pairs of shorts</li>
                    	<li> 20 pairs of underwear</li>
                    	<li> 20 pairs of socks</li>
                    	<li>  2 sets of sheets</li>
                    	<li>  4 towels</li>
                    </ul>
                </span>
                    
			</div>

	</div>
	<div class="sloaddly_washfold"> 
					<div style="padding-right: 50px;">
                   <span class="loadly_titles"> Small bag<br /></span>
                    <span class="loadly_contents_fonts" style="display: block;">What can fit in the small laundry bag?</span>
                   <span  class="loadly_contents_fonts"style="display: block;">This bag is most popular for a family of 1-3</span>
                   <span style="display: block; margin-top: 10" class="loadly_contents_fonts"> 
                    	<ul style="list-style-type: none;">
                    	<li> 15 shirts</li>
                    	<li> 5  pairs of pants</li>
                    	<li> 5  pairs of shorts</li>
                    	<li> 10 pairs of underwear</li>
                    	<li> 10 pairs of socks</li>
                    </ul>
                </span>

			</div>

	</div>
	<div class="sloaddly_washfold"> 
					<div style="padding-right: 2px;">
                   <span class="loadly_titles">All pickups include:<br /></span>
				   <div style="padding-top: 12px;"> 
                        <input type="checkbox" id="freepickup"  name="freepickup" value="freepickup" >
                        <label for="freepickup" class="loadly_contents_fonts"> Free pickup & delivery</label>
                    </div>
					<div style="padding-top: 12px;"> 
                        <input type="checkbox" id="business"  name="business" value="business" >
                        <label for="business" class="loadly_contents_fonts"> 3-4 business day turnaround</label>
                    </div>
					<div style="padding-top: 12px;"> 
                        <input type="checkbox" id="recurring"  name="recurring" value="recurring" >
                        <label for="recurring" class="loadly_contents_fonts"> Recurring or one-time pickups</label>
                    </div>

			</div>

	</div>
	
</div>

<div style="width:100%; margin-top: 150px;">
	<span class="loadly_titles">How it works</span>
</div><br />

<div>
	
	<style>
	  .sloadly_howitworks{
		  display:inline-block; width:23%; margin-right:15px; margin-top:40px; vertical-align:top;
		}
		@media only screen and (max-width: 600px) {
			 .sloadly_howitworks{
					margin:50px 0 0 0;
					display:block; width:100%; 
			}
		}
	</style>
	
	
	
	
        <div class="sloadly_howitworks">
		        <div style="color:teal;">
               <span class="loadly_titles_sub1"> Detailed inspection<br /></span>
			   </div>
            <span class="loadly_contents_fonts"> Your pockets and clothes are inspected so nothing ends up in the wash that shouldn’t.</span>
        </div>
        
        <div class="sloadly_howitworks">
		        <div style="color:purple;">
               <span class="loadly_titles_sub1">Premium cleaning<br /></span>
			   </div>
            <span class="loadly_contents_fonts"> Your lights and darks are separated and all your clothes are washed using cold water to preserve color (and save energy).</span>
        </div>
        
        <div class="sloadly_howitworks">
		        <div style="color:teal;">
               <span class="loadly_titles_sub1">Your preferences<br /></span>
			   </div>
             <span class="loadly_contents_fonts">Need hypoallergenic detergent? Want fabric softener? No problem — just select the laundry preferences that are right for you.</span>
        </div>
        
        <div class="sloadly_howitworks">
		        <div style="color:darkblue;">
               <span class="loadly_titles_sub1">Neatly folded<br /></span>
			    </div>


             <span class="loadly_contents_fonts">Your clothes are crisply folded and your socks are paired, ready to be put away upon delivery.</span>
        </div>

</div><br />

	
	
<div>
        <div class="sloadly_pricingtitle">
            <span class="loadly_titles">Pricing</span>
        </div>
        
        <div class="sloadly_pricingarea">
           <div style="display:inline-block;float:right;background-color:orange;cursor:pointer;favorite styled;color:white;padding:10px;text-align:center; font-size:20px; display: none;"> San Francisco Bay Area</div>
        </div>
</div><br /> 

	
<style>
	.sloadly_pricingtitle{
		display:inline-block; width:45%; margin-left:5px; margin-right:5px; height:20px; vertical-align:top;
	}
	.sloadly_pricingarea{
		display:inline-block; width:45%; margin-left:5px; margin-right:5px; height:20px; vertical-align:top;
	}
	.sloadly_pricing{
		display:inline-block; width:45%; margin-right:30px; height:auto; vertical-align:top 
	}
		@media only screen and (max-width: 600px) {
			 .sloadly_pricing{
					margin:50px 0 0 0;
					display:block; width:100%; 
			}
			.sloadly_pricingtitle{
				margin:50px 0 0 0;
					display:block; width:100%; 
			}
			.sloadly_pricingarea{
				margin:50px 0 0 0;
					display:block; width:100%; 
			}
		}
</style>
	
	
	
	
<div style ="margin-top:50px">
            <div class="sloadly_pricing">
                       <span class="loadly_titles_sub1">
					 <span class="loadly_contents_fonts">Large LoadLy Bag<br /></span>
					 </span>
                       <span class="loadly_contents_fonts">$40 flat rate<br /></span>
                       <span class="loadly_contents_fonts">Holds up to 35 lbs or roughly 4-5 loads<br /></span>
                       <span class="loadly_contents_fonts">Perfect for a family of 4-6 people.</span>
              
                    <div style ="margin-top:50px; display: none;">
					   <div>
					     
                              <div style="background-image:url('images/pricing5.jpg');color:#fff; background-size: cover; height:100px;display:flex;padding:20px; vertical-align:center;align-items: center;">
							  <span class="loadly_titles_sub1">Per bag</span>
							  </div>
                                <div>
						 
                                 <span class="loadly_contents_fonts">
                                     
                                <div style="border-bottom:1px solid #ccc">	 
				                    <div style="display:inline-block;">1 bag / month </div>
								    <div style="display:inline-block; float:right;">$60.00</div>
								 </div>
                                                
								<div style="border-bottom:1px solid #ccc">	 
				                     <div style="display:inline-block;">2 bags / month </div>
									 <div style="display:inline-block; float:right;"> $112.00</div>
								</div>
                                              

								<div style="border-bottom:1px solid #ccc">	 
				                      <div style="display:inline-block;"> 3 bags / month</div>
									  <div style="display:inline-block; float:right;"> $159.00</div>
								</div>
                                               
								<div style="border-bottom:1px solid #ccc">	 
				                      <div style="display:inline-block;"> 4 bags / month </div>
									  <div style="display:inline-block; float:right;"> $200.00</div>
								</div>
									   
									   
                                 </span>
                                </div> 
                           
                             <div style="border:0px solid #999; margin-top:30px;height:auto;">
                             		   <span class="loadly_contents_fonts">
									<div style="display:inline-block;background-color:orange;cursor:pointer;favorite styled;color:white;padding:10px;text-align:center; font-size:20px;height:auto;">Save Up To 56% With Loadly Repeat <br/>
                             		Learn More.</div>
							
                             </div>
                        
                    </div>
					</div>
    
			</div>
            
		<div class="sloadly_pricing">
                   <span class="loadly_titles_sub1"> 
				        <span class="loadly_contents_fonts">Small LoadLy Bag<br /></span>
						</span>
						<span class="loadly_contents_fonts">$30 flat rate <br /></span>
                      <span class="loadly_contents_fonts">Holds up to 20 lbs or roughly 2-3 loads
											Perfect for 1-2 people

                   </span>
                    
                    <div style="display: none;"> 
					           <span class="loadly_titles_sub1">
                            <div style="background-image:url('images/pricing6.jpg'); background-size: cover;color:#fff; height:100px;margin-top:50px; display: flex;padding:20px; vertical-align:center; align-items: center;"> Per pound</div>
                           </span>
                            <span class="loadly_contents_fonts">
							
			                 <div style="border-bottom:1px solid #ccc">	 
                            <div style="display:inline-block;" >Pound </div>
							<div style="display:inline-block; float:right;">$2.25</div>

                            
                    </div>
					
				 
               
            <div>     
                   <div style="border:0px solid #999; margin-top:20px">Except for certain household items:<br /></div>
				   
					<div style="border-bottom:1px solid #ccc">	 
				 <div style="display:inline-block;"> Bath mat</div>
                        <div style="display:inline-block; float:right;">$5.00</div>
						</div>
                      
					<div style="border-bottom:1px solid #ccc">	 
				        <div style="display:inline-block;"> Duvet cover</div>
				        <div style="display:inline-block; float:right;">$15.00</div>
				  </div>
                         
					<div style="border-bottom:1px solid #ccc">	 
				        <div style="display:inline-block;"> Comforter </div>
						<div style="display:inline-block; float:right;">$30.00</div>
						</div>
                         
					    <div style="border-bottom:1px solid #ccc">	 
				        <div style="display:inline-block;">Duvet</div> 
							<div style="display:inline-block; float:right;">$30.00</div>
                   </div> 
             </div>
			 
			</div> <br/> 
            
</div>
<div class="loadly_contents_fonts" style="margin-top: 20px;">Simply fill the bag as full as you would like, ensure the drawstring closes, and you’ll be charged a single flat rate per use.</div>

<div style="width:100%;margin-top:60px;">
	      <span class="loadly_titles_sub2">Delivery</span>
</div>

<style>
  .sloadly_delivery{
	  display:inline-block; width:55%; margin-left:5px; margin-top:20px; margin-right:5px; vertical-align:top
	}
  .sloadly_deliverycont{
	  display:inline-block; width:30%; border:0px solid #999; margin-top:5px;
	}
	.sloadly_banner1{
		display:inline-block; width:40%; margin-left:5px; margin-top:50px; margin-right:5px; vertical-align:top; height:460px; background:#ccc;background-image:url('images/loadlyrepeat.png'); background-size: cover;
	}
	
	@media only screen and (max-width: 600px) {
			 .sloadly_delivery{
					margin:50px 0 0 0;
					display:block; width:100%; 
			}
			.sloadly_deliverycont{
				margin:50px 0 0 0;
					display:block; width:100%; 
			}
			.sloadly_banner1{
				margin:50px 0 0 0;
					display:block; width:100%; 
			}
	}
</style>			
<div>
	<div class="sloadly_delivery">
               <span class="loadly_contents_fonts">
			   We pick up and deliver 7 days a week, always between 8pm and 10pm. Free <br />
               contactless delivery available with Loadly Drop.<br /><br />
			   </span>
        
        
                <div class="sloadly_deliverycont">
				
                       <span class="loadly_titles_sub1">Standard </span>
                       <span class="loadly_contents_fonts">
					   <div style="display:inline-block; float:right;">7.95</div></br>
                    The $7.95 Service Fee covers <br />
                    pickup and delivery with Standard <br />
                    3–4 day turnaround.
					</span>
                </div>
                
                <div class="sloadly_deliverycont" style="float: right">
				   <span class="loadly_contents_fonts">
                    Rush <br /><br />
                    2-day Rush for Dry Cleaning is<br />
                    temporarily unavailable due to<br />
                    COVID-19. Learn more.
					</span>
                </div><br /><br />
	
	
           <div style="display:inline-block; width:90%; margin-left:5px; margin-top:40px; margin-right:5px; height:auto;color:#fff; vertical-align:top; background:#453536; padding: 30px">
                   
				   <div style="width:100%;"><span style="color:#fff;">
				   <span class="loadly_titles_sub1"> Free Delivery <br /></span>
				   </span>

					<span class="loadly_contents_fonts">
                    Get unlimited free pickups and deliveries<br /> 
                    with Loadly Go. Waive the $7.95 Service Fee<br /> 
                    on all your Loadly orders for just $7.95/mo 
                    or $79/yr.
					</span>
					</div>
					
					<div style="color:#fff; float:right; margin:-30px 30px 30px 0; border:1px solid #fff; display: none">
					<div style="display:inline-block;background-color:orange;cursor:pointer;favorite styled;color:white;padding:10px;text-align:center; font-size:20px;">Get Loadly Go</div>
					
					</div>
			</div> 
                
	</div>  
       <div class="sloadly_banner1"></div>            

	  
</div>

                           
<div style="width:100%;  vertical-align:center; height:300px;margin-top:60px; display:flex; align-items: center; background-image:url('images/bumper.jpg'); background-size: cover;   flex-wrap: wrap;">
     	   <div style="width:100%; text-align:center;"><span class="loadly_contents_fonts" style="color:#fff; ">
	Save 3+ hours a week when you leave your dry
     cleaning to the experts
	 
   </span></br>
   </div>
     <div  style="width:100%; text-align:center; ">
		   <span class="loadly_contents_fonts">
		 <div class="nav" style="display:inline-block;background-color:orange;cursor:pointer;favorite styled;color:white;padding:5px 25px 5px 0px;text-align:center; font-size:20px"><ul> <li><a href="{{url('customers/start/schedulepickup')}}" class="nav4" >Schedule a pickup</a></li></ul></div>
		
	</div>
</div><br/>
</div>
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

<div class="loadly_footer" style=" margin-left: 12%;">
    <span class="loadly_company">Download our app</span><br /><br />
	<span class="loadly_contents_fonts">The Loadly mobile app is the most<br />
	               convenient way to enjoy all Loadly<br />
	                services.<br />
	</span>
	<div style="padding-top: 10px;">
	<div style="display: inline-block; vertical-align: top; padding-top:8px;">
	<img src="images/appstore.jpg" width="90px" height="35px">
	</div>
	<div style="display: inline-block; vertical-align: top; margin-left:10px;">
	<img src="images/playstore.jpg"  width="90px" height="45px">
	</div>
	</div>
		</div>
	 
	
</body>
</html> 