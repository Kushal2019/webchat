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
        document.getElementById("bt2").setAttribute("onclick", "javascript:document.getElementById('ip1').focus();");
        document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('ip1').focus();");
        $("#myModal2").modal();
		return false;	
	}
	if(ph=='')
	{
		document.getElementById("msg1").innerHTML="Plese Enter The mobile number";
        document.getElementById("bt2").setAttribute("onclick", "javascript:document.getElementById('ip2').focus();");
        document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('ip2').focus();");
        $("#myModal2").modal();
		return false;	
	}
	else
	{
		if (ph.length!=10) {
			document.getElementById("msg1").innerHTML="Plese Enter The correct mobile number";
        document.getElementById("bt2").setAttribute("onclick", "javascript:document.getElementById('ip2').focus();");
        document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('ip2').focus();");
        $("#myModal2").modal();
		return false;		
		}
	}
}
function check2()
{
	let oldp=document.getElementById("ip5").value;
	let newp=document.getElementById("ip6").value;
	let rnewp=document.getElementById("ip7").value;
	if(oldp=='')
	{
		document.getElementById("msg1").innerHTML="Plese Enter The Old Password";
        document.getElementById("bt2").setAttribute("onclick", "javascript:document.getElementById('ip5').focus();");
        document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('ip5').focus();");
        $("#myModal2").modal();
		return false;	
	}
	if(newp=='')
	{
		document.getElementById("msg1").innerHTML="Plese Enter The New Password";
        document.getElementById("bt2").setAttribute("onclick", "javascript:document.getElementById('ip6').focus();");
        document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('ip6').focus();");
        $("#myModal2").modal();
		return false;	
	}
	else
	{
		if (newp.length<6) {
		document.getElementById("msg1").innerHTML="Password Requerd Minimum 6 Digit";
        document.getElementById("bt2").setAttribute("onclick", "javascript:document.getElementById('ip6').focus();");
        document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('ip6').focus();");
        $("#myModal2").modal();
		return false;		
		}
	}
	if(rnewp=='')
	{
		document.getElementById("msg1").innerHTML="Plese Repeat The New Password";
        document.getElementById("bt2").setAttribute("onclick", "javascript:document.getElementById('ip7').focus();");
        document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('ip7').focus();");
        $("#myModal2").modal();
		return false;	
	}
	else
	{
		if (rnewp.length<6) {
			document.getElementById("msg1").innerHTML="Password Requerd Minimum 6 Digit";
        document.getElementById("bt2").setAttribute("onclick", "javascript:document.getElementById('ip7').focus();");
        document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('ip7').focus();");
        $("#myModal2").modal();
		return false;		
		}
	}
	if(newp!=rnewp)
	{
		document.getElementById("msg1").innerHTML="New Password And Repeat Password Are Not Match.";
        document.getElementById("bt2").setAttribute("onclick", "javascript:document.getElementById('ip6').focus();");
        document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('ip6').focus();");
        $("#myModal2").modal();
		return false;	
	}
}