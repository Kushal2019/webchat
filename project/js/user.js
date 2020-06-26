function enable() {
document.getElementById("ip1").disabled = false;
document.getElementById("ip2").disabled = false;
document.getElementById("ip3").disabled = false;
document.getElementById("update").style.display ='block';
return false;
}
function check1()
{
	let name=document.getElementById("ip1").value;
	let ph=document.getElementById("ip2").value;
	let prof=document.getElementById("ip3").value;
	if(name=='')
	{
		document.getElementById("msg1").innerHTML="Plese Enter The Name";
        document.getElementById("bt").setAttribute("onclick", "javascript:document.getElementById('ip1').focus();");
        document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('ip1').focus();");
        $("#myModal2").modal();
		return false;	
	}
	if(ph=='')
	{
		document.getElementById("msg1").innerHTML="Plese Enter The mobile number";
        document.getElementById("bt").setAttribute("onclick", "javascript:document.getElementById('ip2').focus();");
        document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('ip2').focus();");
        $("#myModal2").modal();
		return false;	
	}
	else
	{
		if (ph.length!=10) {
			document.getElementById("msg1").innerHTML="Plese Enter The correct mobile number";
        document.getElementById("bt").setAttribute("onclick", "javascript:document.getElementById('ip2').focus();");
        document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('ip2').focus();");
        $("#myModal2").modal();
		return false;		
		}
	}
}