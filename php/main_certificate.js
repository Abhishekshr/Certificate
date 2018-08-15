 function validateEmail($email)
 {
  var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
  return emailReg.test( $email );
}

function valid()
{

if($("#name").val()=="")
{

alert(' Your name is mandatory ');

$("#name").focus();
return false;
}
 
 else if($("#email").val()=="")
{
	alert('Please enter your email-id');
	$("#email").focus();
	return false;
}
 else if(!validateEmail($("#email").val()))
{
	alert('Invalid email-id');
	$("#email").focus();
	return false;
}
//var a= $("#ph-number").val();
 else if($("#ph_number").val().length<10 || $("#ph_number").val().length>10)
{
	alert('invalid phone number length');
	$("#ph_number").focus();
	return false;
}
else
{
  
  
  $.ajax({
type: "POST",
url: "search_certificate.php", 

data: {name: $("#name").val(),email:$("#email").val(),phone:$("#ph_number").val()},

beforeSend: function()
 {
$("#loading").fadeIn();

},
success:function(response)
{

$("#loading").fadeOut();
$('#result').html(response);
if($("#no1").val()=="no1" && $("#no2").val()=="no1" && $("#no3").val()=="no1" && $("#no4").val()=="no1" && $("#no5").val()=="no1" && $("#no6").val()=="no1")
{
	alert("no result found");
	$("#name").val('');
$("#email").val('');
$("#ph_number").val('');

}


	
	


 }
});

  
  
 }

}
