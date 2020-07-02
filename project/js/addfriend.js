function friend(email)
{
	$.ajax({
		url:"../ActionPages/addfrienddata.php",
		type:"post",
		data:{id:email},
		success: function(result)
		{
			 document.getElementById("bu").innerHTML="<input type='submit' value='send massage' class='btn btn-primary pull-right'>";
		}
	});
}