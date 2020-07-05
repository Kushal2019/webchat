function send_msg(email)
{
	 //alert('jsbdh');

	 msg=document.getElementById("msg").value;
	// data='email'+email & 'msg='+msg;
	 $.ajax({
 	 		url:"../ActionPages/send_massage.php",
	 		type:"post",
	 		data: {msg : msg, fri_email : email},
	 		success: function(result)
	 		{
	 			//alert(result);
			window.location ="../user/chatbox.php?email="+email;
	 		//	document.getElementById("allmsg").innerHTML=result;
	 		}
	 });
	}