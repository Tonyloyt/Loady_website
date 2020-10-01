<!DOCTYPE html>
<html>
 <head>
  <title>Loadly - Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
    
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
  @media only screen and ( max-width: 800px){
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

<script>
    function showprofile(){
        reset();
		 document.getElementById("div_profile").style.display="inline-block";
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
         //document.getElementById("div_preferences").style.display="none";
         document.getElementById("div_subscriptions").style.display="none";
         document.getElementById("div_orderhistory").style.display="none";
        
	 }
     function showpreferences(){
        reset();
         document.getElementById("div_prefcleaning").style.display="inline-block"; 
        
	 }
     
     function showsubscriptions(){

        reset();
		 document.getElementById("div_profile").style.display="none";
		 document.getElementById("div_schedule").style.display="none";
         document.getElementById("div_payment").style.display="none";

        // document.getElementById("div_preferences").style.display="none";
         document.getElementById("div_subscriptions").style.display="inline-block";
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
        document.getElementById("div_prefdelivery").style.display="none";
		document.getElementById("div_prefcleaning").style.display="none"; 
        
	 }
     function showderiverypreference(){
        reset();
        document.getElementById("div_prefdelivery").style.display="inline-block";

     }
     

     function reset(){
		 closeNav();
		 document.getElementById("div_profile").style.display="none";
		 document.getElementById("div_schedule").style.display="none";
         document.getElementById("div_payment").style.display="none";
         document.getElementById("div_prefcleaning").style.display="none";
         document.getElementById("div_subscriptions").style.display="none";
         document.getElementById("div_orderhistory").style.display="none";
        document.getElementById("div_prefdelivery").style.display="none";
        
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
			var familytype="{{ $data['familytype']}}";
			var textnotification="{{ $data['textnotification']}}";
			/***start */
			var txtdetergent="{{ $data['txtdetergent'] }}";
			var txtfabricsofterner="{{ $data['txtfabricsofterner'] }}";
			var txtoXcleaner="{{ $data['txtoXcleaner']}}";
			var txtstarch="{{ $data['txtstarch'] }}";
			
			document.getElementById("txtaboutyou").value=familytype;
				
			if(familytype=="A couple"){
				document.getElementById('acouple_r').classList.add("div_selected");
			}else if(familytype=="A family"){
				document.getElementById('afamily_r').classList.add("div_selected");
			}else if(familytype=="Just me"){
				document.getElementById('justme_r').classList.add("div_selected");
			}
			
			
			if(textnotification=="all"){
				document.getElementById('textnotification_all').checked = true;
			}else if(textnotification=="scheduling and service only"){
				document.getElementById('textnotification_scheduling').checked = true;
			}else if(textnotification=="service only"){
				document.getElementById('textnotification_service').checked = true;
			}else if(textnotification=="none"){
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
		  <ul>
				 <font size = "2">
                <li style="padding-top: 10px;"> <a href="javascript:showprofile()"> Profile</a> </li>
                <li style="padding-top: 5px;"> <a href="javascript:showschedule()"> Schedule pickup</a> </li>
                <li style="padding-top: 5px;"> <a href="javascript:showpayment()"> Payment method</a> </li>
                <li style="padding-top: 5px;"> <a href="#"> preferences</a> </li>
                <li style=" margin-left: 0px;"> <a href="javascript:showpreferences()" style="color: #fff; margin-left: 30px;"> Cleaning</a> </li>
                <li style=" margin-left: 0px;"> <a href="javascript:showderiverypreference()" style="color: #fff; margin-left: 30px;"> Delivery</a> </li>
                <li style="padding-top: 5px;"> <a href="javascript:showsubsciptions()"> Subsciptions</a> </li>
                <li style="padding-top: 5px;"> <a href="javascript:showorderhistory()"> Order history </a> </li> 
                <li style="padding-top: 5px;"> <a href="{{ url('/getout')}}"> Logout </a> </li> 
				</font><br /></br></br>
            </ul>
		</div>
		
		
        <div class="loadly_myaccount">
        <div style="padding-left: 30px; padding-top: 20px">
			<a href="{{('../gohome')}}"><img src="../images/logo2.png" width="150"></a><br><br>
            <span class="loadly_titles_sub2"> My Account</span>

        </div>
        <div class="nav nav2" style="padding-left: 30px; padding-top: 20px">
            <ul>
				 <font size = "2">
                <li style="padding-top: 10px;"> <a href="javascript:showprofile()"> Profile</a> </li>
                <li style="padding-top: 5px;"> <a href="{{('../customers/start/schedulepickup')}}"> Schedule pickup</a> </li>
                <li style="padding-top: 5px;"> <a href="javascript:showpayment()"> Payment method</a> </li>
                <li style="padding-top: 5px;"> <a href="#"> preferences</a> </li>
                <li style=" margin-left: 0px;"> <a href="javascript:showpreferences()" style="color: #fff; margin-left: 30px;"> Cleaning</a> </li>
                <li style=" margin-left: 0px;"> <a href="javascript:showderiverypreference()" style="color: #fff; margin-left: 30px;"> Delivery</a> </li>
                <li style="padding-top: 5px;"> <a href="javascript:showsubsciptions()"> Subsciptions</a> </li>
                <li style="padding-top: 5px;"> <a href="javascript:showorderhistory()"> Order history </a> </li> 
                <li style="padding-top: 5px;"> <a href="{{ url('/getout')}}"> Logout </a> </li> 
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
 
	
	
    <div id="div_profile" class="loadly_myaccount_2">
           <div class="loadly_myaccount_3" >

	 <form method="post" action="{{url('updateclientdashboard')}}">	 
					<input type="hidden" name="_token" value="{{ csrf_token() }}">

						
						<div class="loadly_myaccount_4">
							   
								<div style="display: inline-block; margin-right: 20px;"> 
							
									<div style="margin-bottom: 20px"> 
								   			<span class="loadly_titles_sub3" >Profile</span>
						     		</div>
									
									<div class="loadly_myaccount_profile">
										<input id="input__firstname" class="cinput" style="padding-left: 20px;border-color: grey;" name="firstname" type="text" required="required" placeholder="First name" value="{{ $data['fname']}}" />
									<label for="input__firstname" class="floating__label" data-content="First name">
									</div>

									<div class="loadly_myaccount_profile">
										<input id="input__lastname" class="cinput" style="padding-left: 20px;border-color: grey;" name="lastname" type="text" required="required" placeholder="Last name" value="{{ $data['lname']}}" />
									<label for="input__lastname" class="floating__label" data-content="Last name"> 
									</div>

									<div class="loadly_myaccount_profile">
										<input id="input__email" class="cinput" style="padding-left: 20px;border-color: grey;" name="email" type="email" required="required" placeholder="Email" name="email" value="{{ $data['email'] }}" />
									<label for="input__email" class="floating__label" data-content="Email">
									</div>
									<div class="loadly_myaccount_profile">
										<input id="input__phone" class="cinput" style="padding-left: 20px;border-color: grey;" name="phone" type="phone" required="required" placeholder="phone" value="{{ $data['phone']}}"/>
									<label for="input__phone" class="floating__label" data-content="phone">
									</div>

								</div>

										
								 <div style="display: inline-block">
									        <div style="margin-bottom: 20px"> <span class="loadly_titles_sub3" >Address</span></div>

										
											<div style="display: block; padding-top: 7px;">
												<input id="input__address" class="cinput" style="padding-left: 20px;border-color: grey;" name="address" type="address" required="required" placeholder="address"  value="{{ $data['address']}}" />
												<label for="input__address" class="floating__label" data-content="address"> 
											   </div>
											   <div style="display: block; padding-top: 7px;">
												<input id="input__apt" class="cinput" style="padding-left: 20px;border-color: grey;" name="apt" type="apt" placeholder="Apt/suite(optional)" value="{{ $data['apt']}}" />
												<label for="input__apt" class="floating__label" data-content="Apt/suite(optional"> 
											   </div>

											   <div>
												   <div style=" padding-top: 7px;">
													<input id="input__zipcode" class="cinput" style="padding-left: 20px; border-color: grey;"name="zipcode" type="zipcode" required="required" placeholder="zipcode" value="{{ $data['zipcode']}}" />
												<label for="input__zipcode" class="floating__label" data-content="zipcode"> 

												</div>
												   <div style="padding-top: 7px;"> 
													<input id="input__city" class="cinput" style="padding-left: 20px;border-color: grey;" name="city" type="city" placeholder="city" value="{{ $data['phone']}}" />
													<label for="input__city" class="floating__label" data-content="city"> 
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
								

								
								
							   <p class="loadly_myaccount_updatebtn">
							   
								<input type="submit" name="update" class="button" style="width: auto;" value="Update profile" />
							  </p>

	</form>


    <form  method="post" action="{{url('changeclientpassworddashboard')}}" style="width: auto;margin-top: 12%;">
						 
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
						
						
					<input type="hidden" name="_token" value="{{ csrf_token() }}">
							   <div style="margin-top: 12px;"><span class="loadly_titles_sub3" >Change Password</span> </div>

							<div>
								<div style="display: block; padding-top: 7px; width: 30%;">
									
									@if($errors->has('oldpassword'))
										<div class="error">{{ $errors->first('oldpassword') }}</div>
									@endif
									<input id="input__oldpassword" class="cinput" style="padding-left: 20px;border-color: grey;" name="oldpassword" type="text" required="required" placeholder="Old password" />
									<label for="input__oldpassword" class="floating__label" data-content="Old password">
										
								   </div>
									
								   <div style="display: block; padding-top: 7px; width: 30%;">
									   
									@if($errors->has('newpassword'))
										<div class="error">{{ $errors->first('newpassword') }}</div>
									@endif
									<input id="input__oldpassword" class="cinput" style="padding-left: 20px;border-color: grey;" name="newpassword" type="text" required="required" placeholder="New password" />
									<label for="input__newpassword" class="floating__label" data-content="new password"> 
								   </div>
									   
								   <div style="display: block; padding-top: 7px; width: 30%;">
									   
									@if($errors->has('pwdchange_email'))
										<div class="error">{{ $errors->first('pwdchange_email') }}</div>
									@endif
									<input id="input__email" class="cinput" style="padding-left: 20px;border-color: grey;" name="pwdchange_email" type="email" required="required" placeholder="Email" value="" />
									<label for="input__email" class="floating__label" data-content="Email"> 
								   </div> </div>

							<p >
								<input type="submit" name="update" class="button" class="loadly_contents_fonts"value="Update Password" />
							  </p>

					</form>

 			</div>


				
            </div>
        
 
				
				
				
				
			
        <div id="div_schedule" style="display: none; width: 79%; height: 100%; vertical-align:top;"></div>


		<div id="div_payment" class="loadly_paymentmethod">

<form  method="post" action="{{url('savepaymentdashboard')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="loadly_myaccount_payment">
                <div> <span class="loadly_titles_sub2" >Payment Method</span></div>
        
				<div>
					<div style="display: block; padding-top: 7px;">
						<input id="input__card" class="cinput" style="padding-left: 20px;border-color: grey;" name="card" type="address" required="required" placeholder="card no" value="" />
						<label for="input__card" class="floating__label" data-content="card"> 
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
							<input id="input__year" class="cinput" style="padding-left: 20px;border-color: grey;" name="year" type="year" required="required" placeholder="year" value="" />
							<label for="input__year" class="floating__label" data-content="year"> 
						</div>
						<div class="loadly_paymentinput"> 
							<input id="input__cvv" class="cinput" style="padding-left: 20px;border-color: grey;" name="cvv" type="cvv" required="required" placeholder="CVV" value="" />
							<label for="input__cvv" class="floating__label" data-content="CVV"> 
						</div>
					   </div>

				   <div style="display: block; padding-top: 7px;">
					<input id="input__cardname" class="cinput" style="padding-left: 20px;" name="cardname" type="cardname" required="required" placeholder="Name on card" value="" />
					<label for="input__cardname" class="floating__label" data-content="Name on card"> 
				   </div>
            </div>
            <div class="loadly_contents_fonts" style="padding-top: 15px;"> <span> payment data and transactions secured by </span></div>

           
            
			</div>
	
            <div class="loadly_myaccount_payment">
                    <div> <span class="loadly_titles_sub2 loadly_titles_sub44" >Billing Address</span></div>
                    <div style="padding-top: 12px;"> 
                        <input type="checkbox" id="mybilling" style="padding-left: 20px;" name="mybilling" value="mybilling" style="vertical-align: top;">
                        <label for="mybilling" class="loadly_contents_fonts"> My billing address is different from my service address</label>
                    </div>
            
            <div>
                <div>
                    <div style="display: inline-block; padding-top: 16px;">
                     <input id="input__address" class="cinput" style="padding-left: 20px;" name="paymentmethod_address" type="text" required="required"placeholder="Address" value="" />
                 <label for="input__address" class="floating__label" data-content="Address"> 
                 
                 </div>
                 <div style="display: inline-block; padding-top: 16px;"> 
                     <input id="input__apt" class="cinput" style="padding-left: 20px;" name="paymentmethod_apt" type="text" placeholder="Apt (optional)" value="" />
                     <label for="input__apt" class="floating__label" data-content="Apt (optional)"> 
                 </div>
                </div>

                <div>
                    <div style="display: inline-block; padding-top: 16px;">
                     <input id="input__zipcode" class="cinput" style="padding-left: 20px;" name="paymentmethod_zipcode" type="text" required="required" placeholder="Zipcode" value="" />
                 <label for="input__zipcode" class="floating__label" data-content="Zipcode"> 
                 
                 </div>
                 <div style="display: inline-block; padding-top: 16px;"> 
                     <input id="input__city" class="cinput" style="padding-left: 20px;" name="paymentmethod_city" type="text" placeholder="city" value="" />
                     <label for="input__city" class="floating__label" data-content="city"> 
                 </div>
                </div>
                </div>
            
			</div>

			  <p class="loadly_savepayment" >
                <input type="submit" name="update" class="button  loadly_contents_fonts " value="Save payment method" />
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
			</tr>
			@endforeach
			</table>
			</div>
        
        </div>
 	
			<div id="div_prefcleaning" class="loadly_cleanings">
			
<form  method="post" action="{{url('savecleanpreferencesdashboard')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">
			<div>
                <span class="loadly_titles_sub3"> Cleaning</span>
            </div>
            <div class="loadly_contents_fonts"> <span> Your cleaning preferences apply to all Rinse service</span></div>

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
                    <input type="submit" name="cleaningpreferences" class="button" value="Save cleaning preferences" required="required" style="width: auto !important;" />
                </span>

			</div>
	</form>
        
		</div>
		



<div id="div_prefdelivery" class="loadly_rinsedrop">
<form  method="post" action="{{url('savedeliverypreferencesdashboard')}}">
<input type="hidden" name="_token" value="{{ csrf_token() }}">

		<div style="display:block; padding-top:10px;">
			<div class="loadly_rinsedrop1">
				<div> <span class="loadly_contents_fonts">Rinse Drop</span></div> 
				<div style="padding-top: 20px; display: inline-block;" class="loadly_contents_fonts" class="loadly_contents_fonts"><span> When you enable Rinse drop, you won't need to present for your pickups &  deliveries. There is no more convinient way to Rinse </span></div>
				 <div style="padding-top: 30px;" class="loadly_contents_fonts"> <a href="#">Activate Rinse Drop</a></div>
		    </div>
			
			<div class="loadly_rinsedrop2">
				 <div><span class="loadly_contents_fonts"> Rush Service</span></div>
				 
                 <div style="padding-top: 7px;">
                    <input type="checkbox" id="washfold" name="rushservice_washfold" value="washfold" style="vertical-align: top;">
			       <label for="washfold" class="loadly_contents_fonts">Wash & Fold: Always use Next -Day   Rush delivery for my wosh & fold orders<label>
                </div>

                 <div style="padding-top: 7px;">
                 <input type="checkbox" id="drycleaning" name="rushservice_drycleaning" value="none" style="vertical-align: top;">
			     <label for="drycleaning" class="loadly_contents_fonts">Dry cleaning:<label>
				</div>
				
		     </div>
	    </div>

		<div style="display: block; padding-top:30px;">
			<div class="loadly_rinsedrop1">
				 <div style="padding-top: 40px;" class="loadly_contents_fonts"> <span> Delivery Instructions</span></div>
				 <div style="padding-top: 5px;" class="loadly_contents_fonts"> These instructions will be given to your   Vilet every time they stop by.</div>
				 <div style="padding-top: 5px;" >
                        <textarea name="delivery_instructions" id="" cols="30" rows="8" class="loadly_contents_fonts"> Delivery instruction (optional)</textarea>
                 </div>

		    </div>
			<div class="loadly_rinsedrop2">
				<div style="padding-top: 40px;" class="loadly_contents_fonts"> <span> About you</span></div>
				<div style="padding-top: 5px;" class="loadly_contents_fonts">Sleeping children or pet? check the box   below. If you want to ensure that your vilet does not ring your doorbell</div>
				 
				<div style="padding-top: 7px;">
                 <input type="checkbox" id="drycleaning" name="doorbell" value="none" style="vertical-align: top;">
			     <label for="drycleaning" class="loadly_contents_fonts">Do not ring your doorbell<label>
				</div>

		    </div>
		</div>
		
		<div class="loadly_deliverypreferences">
                <span>
                   <input type="submit" name="login" class="button" value="Save Delivery preferences" />
                </span>
			</div>
	</form>


	</div>


        <div id="div_subscriptions" style="display: inline-block; width: 79%; height: 100%; vertical-align:top;"></div>


		<div id="div_orderhistory" style="display: none; width: 100%; height: 100%; vertical-align:top;">
	
							<title>View client history orders</title>

							<table class="lst">
									<tr bgcolor="#1D5481" style="color: #fff;">
										<th>Id</th>
										<th>Scheduled Date</th>
										<th>Is Dry cleaning</th>
										<th>Is Wash & fold</th>
										<th>Is Hang & dry</th>
									</tr>
									@foreach ($clientsorders as $clients)
									<tr>
										<td>{{ $clients->id }}</td>
										<td>{{ $clients->scheduleddate }}</td>
										<td>{{ $clients->drycleaning }}</td>
										<td>{{ $clients->washfold }}</td>
										<td>{{ $clients->hangdry }}</td>
										</tr>
										@endforeach
							 </table>

</div>
</div>	
<!---->

    </body>
</html>

