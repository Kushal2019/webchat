function login() 
{
if(document.getElementById("inputEmailAddress").value=="")
    {
        document.getElementById("msg1").innerHTML="Plese Enter The Email";
        document.getElementById("bt").setAttribute("onclick", "javascript:document.getElementById('inputEmailAddress').focus();");
        document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('inputEmailAddress').focus();");
        $("#myModal2").modal();
        return false;
    }
    else
    {
        var mailformat =/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
        if(mailformat.test(document.getElementById("inputEmailAddress").value)==false)
        {
            document.getElementById("msg1").innerHTML="Plese Enter valid email address";
            document.getElementById("bt").setAttribute("onclick", "javascript:document.getElementById('inputEmailAddress').focus();");
            document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('inputEmailAddress').focus();");
            $("#myModal2").modal();
            return false;
        }
    }
    if(document.getElementById("inputPassword").value=="")
    {
        document.getElementById("msg1").innerHTML="Plese Enter The PassWord";
        document.getElementById("bt").setAttribute("onclick", "javascript:document.getElementById('inputPassword').focus();");
        document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('inputPassword').focus();");
        $("#myModal2").modal();
        return false;
    }
}