function targetmsg(id)
		{ 
	//alert(id);	
	window.location ="../user/chatbox.php?id="+id;
}
/*function targetmsg1(id){ 
	//alert(id);	
	$.ajax({

		url:"../user/chatbox.php",
		type:"get",
		data:{id:id}

	});
}*/
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
		},
		error:function()
		{
			refresh(val);
		}

	});
	// setInterval(function(){
      //          $('#header').load("chat_header.php?id="+val);
  
     //}, 1000);
}
function online(val)
{
	var d = new Date();          
    var n = d.toLocaleString([], { hour12: true});
 	cu_date=n.substring(0,9);
 	//cu_time=n.substring(9,18);	

$.ajax({
		url:"../user/online.php",
		type:"post",
		data:{id:val,cd:cu_date},
		success: function(result)
		{ 
 			//alert(result);
 			if(result==2)
 			{

 			}
			else if(result==1)
			{
				$('#time').html("online");
			}
			else
			{
			$('#time').html(result);
			}
		},
		error:function()
		{
			online(val);
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
  	var date=n.substring(0,9);
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
		},
		error:function()
		{
			massage_send(val);
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

		//	alert(result);
			if(result==1)
			{
				
			}
			else
			{
			$('#msg_receive').html(result);
			$('.card-body').scrollTop(10000000);
			}
		} ,
		error:function()
		{
			massage_recevied(val);
		}
	});
}
function user_chat()
{
	$.ajax({
		url:"../ActionPages/chat_user.php",
		success:function(result)
		{
			//alert(result);
			if(result==1 )
			{
			//alert(result);	
			}
			else if(result==2)
			{

			}
			else
			{
			$('#chat_user').html(result);

			}
		},
		error:function()
		{
			user_chat();
		}
	});
}

function online1(id)
{
	$.ajax({
		url:"../ActionPages/online_icon.php",
		type:"post",
		data:{id:id},
		success: function(result)
		{ 
 			//alert(result);
 		//alert(result);
 			//alert(a);
			if(result=='1')
			{
		// $('#online').html("<span class='online_icon'></span>");
			document.getElementById(id).innerHTML="<span class='online_icon'></span>";
			}
			else if(result=='0')
			{
			document.getElementById(id).innerHTML="<span class='online_icon offline'></span>";
			}
		},
		error:function()
		{
			online1(id);
		}

	});
}
function online2(id)
{ 
	var d = new Date();          
    var n = d.toLocaleString([], { hour12: true});
 	cu_date=n.substring(0,9);
	$.ajax({
		url:"../user/online.php",
		type:"post",
		data:{id:id,cd:cu_date},
		success: function(result)
		{ 
 			//alert(result);
 		
 			//alert(a);
			if(result==1)
			{
			// $('#online').html("<span class='online_icon'></span>");
			document.getElementById(id).innerHTML="<p class='text-muted'>online</p>";
			}
			else
			{
			
			document.getElementById(id).innerHTML="<p class='text-muted'>"+result+"</p>";
			}
		},
		error:function()
		{
			 online2(id);
		}
	});
}
function delete_me(id,mail)
{
	$.ajax({
		url:"../ActionPages/delete_me.php",
		type:"post",
		data:"id="+id+"&mail="+mail,
		success:function(result)
		{
			//alert(result);
		},
		error:function()
		{
			delete_me(id,mail);
		}
	});

}