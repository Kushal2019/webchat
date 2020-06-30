function search(val)
{
	if(val=="")
	{
		windows.location="../user/addfriend.php";
	}
	else
	{
	$.ajax({
		url:"../ActionPages/search.php",
		type:"post",
		data:{id:val},
		success: function(result)
		{
	 document.getElementById("se").innerHTML=result;
		}
	});
}
}