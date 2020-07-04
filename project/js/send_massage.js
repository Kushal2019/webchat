function send_msg()
{
	alert('jsbdh');
	 msg=document.getElementById("msg").value;
	 $.ajax({
	 		url:"../ActionPages/send_massage.php",
	 		type:"post",
	 		data:{id:msg},
	 		success: function(result)
	 		{
	 			document.getElementById("allmsg").innerHTML=result;
	 		}
	 });
	}