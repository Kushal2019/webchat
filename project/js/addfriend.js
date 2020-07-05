function friend(email)
{
	$.ajax({
		url:"../ActionPages/addfrienddata.php",
		type:"post",
		data:{id:email},
		success: function(result)
		{
			window.location ="../user/addfriend.php";
		}
	});
}
function massage(email)
{
	$.ajax({
		url:"../ActionPages/chatwith.php",
		type:"post",
		data:{id:email},
		success: function(result)
		{
			window.location ="../user/chatbox.php?email="+email;
		}
	});
}

