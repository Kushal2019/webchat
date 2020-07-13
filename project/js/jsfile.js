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
			var d = new Date();          
            var n = d.toLocaleString([], { hour12: true});
 			cu_data=n.substring(0,8);
 			cu_time=n.substring(9,18);	
 			//alert(cu_data);
			if(result==1)
			{
				 $('#online').html("<span class='online_icon'></span>");
				 $('#time').html("online");
			}
			else
			{
				$('#online').html("<span class='online_icon offline'></span>");
				de_data=result.substring(0,8);
 				de_time=result.substring(10,23);
 				//alert(de_time);
 				if(cu_data.substring(2,3)==de_data.substring(2,3))
 				{
 					$('#time').html("lastseen ".de_time);
 				}
 				else
 				{
					$('#time').html("yesterday "+de_time);
				}

			}
		}
	});
}
function massage_send(val)
{
	var msg =document.getElementById('msg1').value;
	if(msg=='')
	{

	}
	else
	{
	var d = new Date();          
    var n = d.toLocaleString([], { hour12: true});
  	var date=n.substring(0,8);
 	var time=n.substring(10,23);
	$.ajax({

		url:"../ActionPages/massage_send.php",
		type:"post",
		data:"id="+val+"&msg="+msg+"&time="+time+"&date="+date,
		success:function(result)
		{
			//alert("text area reset");
			//$('#msg1').html("jsjsfajhfs");
			document.getElementById('msg1').value="";
		}
	});
}
}
function massage_recevied(val)
{
	$.ajax({
		url:"../ActionPages/chat_massage_send.php",
		type:"post",
		data:{id:val},
		success:function(result)
		{
			//alert(result);
			$('#msg_receive').html(result);

			$('.card-body').scrollTop(10000000);
		}
	});
}
