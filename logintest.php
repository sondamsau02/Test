<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	 <style type="text/css">

	 .Login-Form input{
    	font-size: 40px;
    	width: 100%;
    	padding: 15px 20px;
    	border: 0;
    	outline: none;
    	border-radius: 10px;
    }
	</style>
</head>
<body>
<form method="POST" action="dang-nhap.php">
	<div class="Login-From">
	   <h1>Login Form</h1>
		<form  method="POST">
			<p> UserName</p>
			<input type="text" name="username" class="form-control" >
			<p> PassWord</p>
			<input type="password" name="password" class="form-control">
            
			<button><input   type ="submit" name="login" value="Login" class="btn btn-block btn-info"> </button>

			<label> <input type="checkbox" checked="checked" name="remember"> Remember Me
            </label>
		</form>
		    <span> Don't have an account?	  
            <a href="register.php">Resigter Here</a></span> 
         </div>
	
  </div>

</body>
</html>