function check()
{
   
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
    if(document.getElementById("inputLastName").value=="")
    {
        document.getElementById("msg1").innerHTML="Plese Enter The Last Name";
        document.getElementById("bt").setAttribute("onclick", "javascript:document.getElementById('inputLastName').focus();");
        document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('inputLastName').focus();");
        $("#myModal2").modal();
        return false; 
    }
    else
    {
         var letters = /^[A-Za-z]+$/;
        if(!document.getElementById("inputLastName").value.match(letters))
        {
            document.getElementById("msg1").innerHTML="Please input alphabet characters only";
            document.getElementById("bt").setAttribute("onclick", "javascript:document.getElementById('inputLastName').focus();");
            document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('inputLastName').focus();");
            $("#myModal2").modal();
            return false;
        }
    }
    if(document.getElementById("inputMobile").value=="")
    {
        document.getElementById("msg1").innerHTML="Plese Enter The Mobile Number";
        document.getElementById("bt").setAttribute("onclick", "javascript:document.getElementById('inputMobile').focus();");
        document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('inputMobile').focus();");
        $("#myModal2").modal();
        return false;
    }
    else
    {
         var letters = /^[0-9]+$/;
        if(!document.getElementById("inputMobile").value.match(letters))
        {
            document.getElementById("msg1").innerHTML="Please input number characters only";
            document.getElementById("bt").setAttribute("onclick", "javascript:document.getElementById('inputMobile').focus();");
            document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('inputMobile').focus();");
            $("#myModal2").modal();
            return false;
        }
       else
       {
          //var letters = /^[0-9]+$/;
        if(document.getElementById("inputMobile").value.length!=10)
        {
            document.getElementById("msg1").innerHTML="Please input 10 digits only";
            document.getElementById("bt").setAttribute("onclick", "javascript:document.getElementById('inputMobile').focus();");
            document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('inputMobile').focus();");
            $("#myModal2").modal();
            return false;
        }
       }
    }
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
    if(document.getElementById("inputConfirmPassword").value=="")
    {
        document.getElementById("msg1").innerHTML="Plese ReEnter The PassWord";
        document.getElementById("bt").setAttribute("onclick", "javascript:document.getElementById('inputConfirmPassword').focus();");
        document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('inputConfirmPassword').focus();");
        $("#myModal2").modal();
        return false;
    }
    if(document.getElementById("inputPassword").value!=document.getElementById("inputConfirmPassword").value)
    {
         document.getElementById("msg1").innerHTML="PassWord Dose Not Match";
         document.getElementById("bt").setAttribute("onclick", "javascript:document.getElementById('inputConfirmPassword').focus();");
         document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('inputConfirmPassword').focus();");
        $("#myModal2").modal();
        return false;
    }
   
    if(document.getElementById("inputveri").value=="")
    {
         document.getElementById("msg1").innerHTML="Enter the Verification Code";
         document.getElementById("bt").setAttribute("onclick", "javascript:document.getElementById('inputveri').focus();");
         document.getElementById("bt1").setAttribute("onclick", "javascript:document.getElementById('inputveri').focus();");
        $("#myModal2").modal();
        return false;
    }
   

}


