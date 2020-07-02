function search(val)
{
	if(val=="")
	{
		//alert('sam');
		window.location.href="../user/contact.php";
	}
	else
	{
	$.ajax({
		url:"../ActionPages/contact_search.php",
		type:"post",
		data:{id:val},
		success: function(result)
		{
	document.getElementById("con").innerHTML=result;
	//alert(result);
		}
	});
}
}