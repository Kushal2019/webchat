function search(val)
{
	if(val=="")
	{
		//alert('sam');
		window.location.href="../user/addfriend.php";
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