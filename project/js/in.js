 function check()
{ 
   if(document.getElementById("inputFirstName").value=="")   
    {
        document.getElementById("msgshow").innerHTML="Plese Enter The first Name";
        return false;
    }
    if(document.getElementById("inputEmailAddress").value=="")
    {
        document.getElementById("msgshow").innerHTML="Plese Enter The Email Id";
        return false;
        
    }
    else
    {
       let field=document.getElementById("inputEmailAddress").value;
            if(!((field.indexOf(".") > 0) && (field.indexOf("@") > 0)) || /[^a-zA-Z0-9.@_-]/.test(field))        
            {
              document.getElementById("msgshow").innerHTML="Plese the Valid Email Id";
              return false; 
            }
    }
    if(document.getElementById("Subject").value=="")
    {
        document.getElementById("msgshow").innerHTML="Plese Enter The Subject";
        return false;
    }
    if(document.getElementById("Message").value=="")
    {
       document.getElementById("msgshow").innerHTML="Plese Enter The Messege Body";
        return false;
    }
}