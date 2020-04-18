<!DOCTYPE html>
<html>
<head>
	<title>Webchat</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style >
		.w3-bar .w3-button {
  padding: 16px;
}
		.login-container{
    margin-top: 5%;
    margin-bottom: 5%;
}
.login-form-1{
    padding: 5%;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-1 h3{
    text-align: center;
    color: #333;
}
.login-form-2{
    padding: 5%;
    background: #0062cc;
    box-shadow: 0 5px 8px 0 rgba(0, 0, 0, 0.2), 0 9px 26px 0 rgba(0, 0, 0, 0.19);
}
.login-form-2 h3{
    text-align: center;
    color: #fff;
}
.login-container form{
    padding: 10%;
}
.btnSubmit
{
    width: 50%;
    border-radius: 1rem;
    padding: 1.5%;
    border: none;
    cursor: pointer;
}
.login-form-1 .btnSubmit{
    font-weight: 600;
    color: #fff;
    background-color: #0062cc;
}
.login-form-2 .btnSubmit{
    font-weight: 600;
    color: #0062cc;
    background-color: #fff;
}
.login-form-2 .ForgetPwd{
    color: #fff;
    font-weight: 600;
    text-decoration: none;
}
.login-form-1 .ForgetPwd{
    color: #0062cc;
    font-weight: 600;
    text-decoration: none;
}
body,h1,h2,h3,h4,h5,h6 {font-family: "Raleway", sans-serif
 height: 100%;
  line-height: 1.8;}
#hm1
{
	  text-decoration: none; 
}
	</style>

	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>
	<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">
    <a href="<?=base_url()?>" class="w3-bar-item w3-button w3-wide" id="hm1">WebChat</a>
  </div>
</div>

	<div class="container login-container">
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3>Sign In</h3>
                    <form method="post" action="<?=base_url('Home/Login_Check')?>" >
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email/Phone Number*" name="username" value="<?=set_value('username')?>" />
                            <?=form_error('username','<div class="error" style="color:red;">',' </div>');?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *"
                            name="password" value="<?=set_value('password')?>" />
                            <?=form_error('password','<div class="error" style="color:red;">',' </div>');?>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                        <div class="form-group">
                            <a href="#" class="ForgetPwd">Forget Password?</a>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 login-form-2">
                    <h3>Sign Up</h3>
                    <form method="post" action="<?=base_url('Home/Reg_Check')?>" name='Register'>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your  Name*" value="<?=set_value('fname')?>" 
                            name="fname" />
                             <?=form_error('fname','<div class="error" style="color:red;">',' </div>');?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Email *" value="<?=set_value('email')?>"
                            name="email"  />
                             <?=form_error('email','<div class="error" style="color:red;">',' </div>');?>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Phone Number*" value="<?=set_value('Phone')?>" 
                            name="Phone" maxlength="10" />
                             <?=form_error('Phone','<div class="error" style="color:red;">',' </div>');?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Your Password *" value="<?=set_value('rpassword')?>" 
                            name="rpassword" />
                             <?=form_error('rpassword','<div class="error" style="color:red;">',' </div>');?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" placeholder="Confirm Password *" value="<?=set_value('cpassword')?>" 
                            name="cpassword" />
                             <?=form_error('cpassword','<div class="error" style="color:red;">',' </div>');?>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Register" />
                        </div>
                        <div class="form-group">
                            <div class="error" style="color:white;">
                                <?php
                                    $msg=$this->input->get('msg');
                                    if($msg==md5('Done'))
                                    {
                                        echo "Registration Successful";
                                    }
                                ?>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
</body>
</html>