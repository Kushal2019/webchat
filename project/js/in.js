function check()
{
	alert("rt");
	 if(document.getElementById("inputFirstName").value=="")   
    {
        document.getElementById("msg1").innerHTML="Plese Enter The first Name";
        document.getElementById("bt").setAttribute("onclick", "javascript:document.getElementById('inputFirstName').focus();");
        document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('inputFirstName').focus();");
        $("#myModal2").modal();
        return false;
    }
    else 
    {
        //alert('r');
            var letters =/^[A-Za-z]+$/;
        if(!document.getElementById("inputFirstName").value.match(letters))   
        {
            document.getElementById("msg1").innerHTML="Please input alphabet characters only";
            document.getElementById("bt").setAttribute("onclick", "javascript:document.getElementById('inputFirstName').focus();");
            document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('inputFirstName').focus();");
            $("#myModal2").modal();
            return false;
           // alert("p");
        }

    }
}