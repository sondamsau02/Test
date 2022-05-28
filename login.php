<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login Form</title>
	<link rel="stylesheet" type="text/css" href="">
	<style type="text/css">

	* {
		padding:0;
		margin: 0;
		font-family: sans-serif;
	}
	body{
         background: url('img1/background1.jpg')no-repeat;
         background-size: cover ;
	}
    .Login-Form{
    	width: 350px;
    	top: 50%;
    	left: 50%;
    	transform: translate(-50%,-50%);
    	position: absolute;
    }
    .Login-Form h1{
        font-size: 40px;
        text-align: center;
        text-transform: uppercase;
        margin: 40px 0;
        color: white;
    }

    .Login-Form p{
    	font-size: 20px;
    	margin: 15px 0;
      color: white;
    }
    .Login-Form input{
    	font-size: 16px;
    	width: 100%;
    	padding: 15px 10px;
    	border: 0;
    	outline: none;
    	border-radius: 5px;
    }
    .Login-Form button{
    	font-size: 18px;
    	font-weight: bold;
    	margin: 20px 0;
    	padding: 10px 15px;
    	width: 40%;
    	border-radius: 5px;
    	border: 0px;
      
      }
      .Login-Form span{
      	color: whitesmoke;
        }  
        .Login-Form label{
        	color: whitesmoke;
        }
</style>
	</head>
<body>
	<div class=" Login-Form">
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
	 <?php
   
//Kết nối theo Mysqli procedural
$connect = mysqli_connect('localhost','root','','mydb1');
if($connect){
echo "";
}
else{
echo"Kết nối thất bại";
}
    // Nếu click vào nút login thì mới thực hiện 
    if(isset($_POST['login'])){
    	
$username= $_POST['username'];
$password =$_POST['password'];
// Truy vấn từ bảng user cột username = giá trị username nhập từ form và cột password = giá trị password nhập từ form
$sql = "SELECT * FROM users WHERE username ='$username' AND password = '$password'";


// Thực thi truy vấn
$result = mysqli_query($connect, $sql);
// Trả về kết quả , chính là các dòng được truy vấn
$row = mysqli_num_rows($result);
// Nếu $row > 0 --> có trên 1 dòng trong CSDL trùng với dữ liệu nhập vào form -> đăng nhập thành công 
if($row>0){
//echo "Đăng nhập thành công";
  header("location:homepage.php") ;
}
else{
echo"Tên đăng nhập hoặc mật khẩu không đúng";
}
}










  ?>

</body>
</html>