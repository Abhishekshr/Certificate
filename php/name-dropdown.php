 <!DOCTYPE html>
<html lang="en">
<head>
  <title>Selection Menu</title>
  <meta charset="utf-8">
  <link rel="shortcut icon" href="wt.png">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" src="link/boot.css">
  <script src="link/ajax.js"></script>
  <script src="link/pop.js"></script>
  <script src="link/boot2.js"></script>
  <style>
  body{
  background-image:url("Blue-Background-HQ-Desktop-Wallpaper-16270.jpg");
  background-repeat:no-repeat;
  background-size:cover;
  }
  
  .a{
  font-size:16px;
  padding-left:2%;
  padding-right:2%;
  padding-top:3px;
  padding-bottom:3px;
  
  
  }
  
   td {
    padding-top: 7.5px;
	padding-bottom: 7.5px;
	padding-left:25px;
		
}
.row{
padding-left:2%;
}

  
  </style>
  <script src='main_certificate.js'></script>
  <script type="text/javascript">
window.onresize = resize;
// resize function for internet exlporer
function resize()
{
 if ($(window).width() < 800) {

  
		$('#con').css("width","100%");	
		$('#b1').css("right","10px");
		$('#b2').css("right","10px");
		$('#b3').css("right","10px");
		$('#b4').css("right","10px");
		$('#b5').css("right","10px");
		$('#b6').css("right","10px");
		
       		
}
else {

  
		$('#con').css("width","60%");
		$('#b1').css("right","-120px");
		$('#b2').css("right","-120px");
		$('#b3').css("right","-120px");
		$('#b4').css("right","-120px");
		$('#b5').css("right","-120px");
		$('#b6').css("right","-120px");
		
}
}	

// another resize function for chrome and safari
	$( document ).ready(function()
	{
    var mobile = (/iphone|ipod|android|blackberry|mini|windows\sce|palm/i.test(navigator.userAgent.toLowerCase()));  
    if (mobile) { 
        
        
		$('#con').css("width","100%");
		 $('#b1').css("right","10px");
		 $('#b2').css("right","10px");
		 $('#b3').css("right","10px");
		 $('#b4').css("right","10px");
		 $('#b5').css("right","10px");
		 $('#b6').css("right","10px");
		 
        	
}
     
	else
	{
	
		$('#con').css("width","60%");
		
		$('#b1').css("right","-120px");
		$('#b2').css("right","-120px");
		$('#b3').css("right","-120px");
		$('#b4').css("right","-120px");
		$('#b5').css("right","-120px");
		$('#b6').css("right","-120px");
		
	}
	
	});
	
	</script>

  </head>
  <body onload="$('#loading').fadeOut();" oncontextmenu="return false" onselectstart="return false" >
<div id="loading" style="color:white;position:fixed;display:block;width:100%;height:100%;background:rgba(0,0,0,0.6);z-index:1366;">
<br><br><br>

<br><br><br><br><br><br><br><br><br><br>
<center>

<img src="loading.gif" style="height:100px; width:100px;">
<br>
<h5>Loading...</h5>
</center>
</div>
	<header><div align="right" style="padding-right: 2%" >
<img src="wt.png" style=" height: 150px; width: 150px;" class="img-fluid" id="img-id" >
</div>
</header>

<div style= "background:rgba(225,225,225,0.1);width:60%;"   class="container" id="con">
 <h1 style="color:#ffffff">Form Selection</h1>
     <hr style="border-style:solid;width:100%;border-width:1px;border-color:grey"></hr>
	 <div class="row">
      <div class="col-sm-4 bg">
       <label for="name" style="color:#ffffff;" >Enter Full Name</label>
       <input type="name" class="form-control a" id="name"  name="name" onkeydown="return ((event.keyCode > 64 && event.keyCode < 91) ||  event.keyCode == 8 || event.keyCode == 32)" onpaste="return false">
	   </div>
	   <div class="col-sm-4 bg">
       <label for="name" style="color:#ffffff;" >Enter Email-ID</label>
       <input type="email" class="form-control a" id="email"  name="name"  onpaste="return false">
	   </div>
	   <div class="col-sm-4 bg">
      <label for="number" style="color:#ffffff;">Enter Phone Number</label>
      <input  type="number" class="form-control a" name="phone" maxlength = "10" 
	  oninput="javascript: if (this.value.length > this.maxLength) this.value = this.value.slice(0, this.maxLength);" onkeydown="return FilterInput(event)" onpaste="handlePaste(event)" id="ph_number" 
	  required>
	  </div>
	   
	   </div>
	   <br>
	   <div class="row">
	   <button type="button" class="btn btn-default" style="background-color:#88C9C9; margin-left:18px;" onclick="valid();">Search</button>
	   </div>
<br><br>
	   <div class="row">
	   <div class="col-sm-12 bg">
	   <label for="name" style="color:#ffffff;" >Please select form to be generated :</label><br><br>
	   <div id="result" style="overflow-y:scroll; width=100%; height=400px;background:rgba(225,225,225,0.3);color:#ffffff;">
	   
	   </div>
	    
	   <br>
  
  </div>
  </div>
  </div>

  <br>
  <footer>
	<center><b><b><h4 style="color:#ffffff;">WT IT SOLUTIONS (P) Ltd</b></b></h4>
<i><h6 style="color:#FDA400;">Ensure success on web</i></h6>
<p style="color: #ffffff">(2017 All Rights Reserved)</p></center>
</footer>
  
  </body>
  </html>