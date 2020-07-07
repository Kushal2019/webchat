function targetmsg(id){ 
	//alert(id);	
	window.location ="../user/chatbox.php?id="+id;
}
function refresh(val)
{
	$.ajax({
		url:"chat_header.php",
		type:"post",
		data:{id:val},
		sucess: function(result)
		{
			 $('#header').html(result);
		}
	});
	 setInterval(function(){
                $('#header').load("chat_header.php");
  
     }, 1000);
}