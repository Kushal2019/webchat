function targetmsg(id){ 
	//alert(id);	
	window.location ="../user/chatbox.php?id="+id;
}
function refresh(val)
{
	//val="a1"
	//val=document.getElementById("id").value;
	//alert(val);
	$.ajax({
		url:"chat_header.php",
		type:"post",
		data:{id:val},
		success: function(result)
		{
			 $('#header').html(result);
		}
	});
	// setInterval(function(){
      //          $('#header').load("chat_header.php?id="+val);
  
     //}, 1000);
}
function online(val)
{

$.ajax({
		url:"online.php",
		type:"post",
		data:{id:val},
		success: function(result)
		{
			 $('#online').html(result);
		}
	});
}