<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
<form method="POST" enctype="multipart/form-data">
	<table>
		<tr>
         	<td>song ID</td>
         	<td><input type="text" name="song_id"></td>
         </tr>

         <tr>
         	<td>song Name </td>
         	<td><input type="text" name="song_name"></td>
         </tr>
         
         <tr>
         	<td>song Img </td>
         	<td><input type="file" name="song_img"></td>
         </tr>
         <tr>
         	<td>song audio </td>
         	<td><input type="file" name="song_audio"></td>
         </tr>
          <tr>
         	<td> </td>
         	<td><input type="submit" name="add_song" value="Add"></td>
         </tr>
	</table>


</form>
<?php
      $connect = mysqli_connect('localhost','root','','mydb1');
          if(!$connect){
            echo "Kết nối thất bại";
       }
       else{
          echo" succesful";
       }
       if(isset($_POST['add_song'])){

       	$song_id= $_POST['song_id'];
        $song_name =$_POST['song_name'];
         $song_audio=$_FILES['song_audio']['name'];
            //lấy ảnh từ thư mục bất kì của máy tính
        $song_img=$_FILES['song_img']['name'];
           // di chuuyển anh từ thư muc bất kỳ sang thư mục tmp
        $song_img_tmp=$_FILES['song_img']['tmp_name'];
          // đưa ảnh từ thư mục tmp sang thư mục lưu
        $song_audio_tmp=$_FILES['song_audio']['tmp_name'];


          move_uploaded_file($song_img_tmp, "Img1/$song_img");
         // thêm sản phẩm vào cơ sở dữ liệu

        $sql = "INSERT INTO product VALUES('$song_id','$song_name','$song_audio','$song_img')";
        $result= mysqli_query($connect,$sql);
        if($result){
        	echo"<script>alert ('Add song Successful')</script>";
        	echo"<script>window.open('homepage.php','_self')</script>";
        	
        }
         else{
           
        	echo"<script>alert ('Add Img Unsuccessful')</script>";
         }         	
         
       }
       ?>
</body>
</html>