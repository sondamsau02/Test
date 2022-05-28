<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
	* {
		padding:0;
		margin: 0;
		font-family: sans-serif;
	}
body{
         background: url('img1/background.jfif')no-repeat;
         background-size: cover ;
}
.Register-Form{
    	width: 350px;
    	top: 50%;
    	left: 50%;
    	transform: translate(-50%,-50%);
    	position: absolute;
    }
    .Register-Form h1{
        font-size: 40px;
        text-align: center;
        text-transform: uppercase;
        margin: 40px 0;
       
    }

    .Register-Form p{
    	font-size: 20px;
    	margin: 15px 0;
     
    }
    .Register-Form input{
    	font-size: 16px;
    	width: 100%;
    	padding: 15px 10px;
    	border: 0;
    	outline: none;
    	border-radius: 5px;
    }
    .Register-Form button{
    	font-size: 18px;
    	font-weight: bold;
    	margin: 20px 0;
    	padding: 10px 15px;
    	width: 40%;
    	border-radius: 5px;
    	border: 0px;
      
      }
     ]
    
</style>
</head>
<body>
	<div class=" Register-Form">
		<h1>Register Form</h1>
		<form  method="POST">
			<p> User id</p>
			<input type="text" name="user_id" class="form-control" >
			<p> UserName</p>
			<input type="text" name="username" class="form-control" >
			<p> PassWord</p>
			<input type="password" name="password" class="form-control">
            
			<button><input   type ="submit" name="register" value="register" class="btn btn-block btn-info"> </button>

			
		</form>
		    <span> you have account ?	  
            <a href="login.php">Loin here</a></span> 
         </div>
	</div>
    






         <?php
$connect = mysqli_connect('localhost','root','','mydb1');
if(!$connect){
echo "Kết nối thất bại";
}

    // Nếu click vào nút login thì mới thực hiện 
    if(isset($_POST['register'])){
     $users_id= $_POST['user_id'];
     $username =$_POST['username'];
     $password =$_POST['password'];
  $sql="INSERT INTO users VALUES('$users_id','$username','$password')";
 $result=mysqli_query($connect,$sql);
if ($result){
     header("location:login.php") ;
}
else{
     echo "add people unsuccessful";
}
     }    
     ?>
</body>
</html>