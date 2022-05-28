<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">

</style>
</head>
<body>


<div class="product-group">
            <div class="row">            
            <?php
            $sql = "SELECT * FROM song WHERE song_id ='$song_id' AND song_name = '$song_price' AND song_price ='$song_price' AND song_audio = '$song_aduio' AND '$song_image '                    ";

            $result = mysqli_query($connect, $sql);
            // Trả về kết quả dạng 1 mảng
            while ($row_song = mysqli_fetch_array($result)){
                $song_id = $row_song['song_id'];
                $song_name = $row_song['song_name'];
                $song_price = $row_song['song_price'];
                $song_audio = $row_song['song_audio'];
                $song_image = $row_song['song_image'];
                ?>
                <div class="col-md-3 col-sm-6 col-12">
                    <div class="card card-product mb-3">
                      <img class="card-img-top" src="Images/<?php echo"$song_image"?>">
                      <div class="card-body">
                        <h5 class="card-title"><?php echo"$song_name"?></h5>
                         <h5 class="card-title"><?php echo"$song_id"?></h5>
                       <audio controls controlsList="nodownload" ontimeupdate="myAudio(this)" style="width: 250px;">
                           <source src="Audio/<?php echo $song_audio?>" type="audio/mpeg">
                       </audio>
                       <script type="text/javascript">
                           function myAudio(event){
                               if(event.currentTime>10){
                                   event.currentTime=0;
                                   event.pause();
                                   alert("Bạn phải trả phí để nghe cả bài")
                               }
                           }
                       </script>
                       <?php
                       echo"
                        <a href='detail.php?id=$song_id' class='btn btn-primary'>Details</a> "?>
                      </div>
                    </div>
                </div>
                <?php
            }
                ?>
               
            </div>
        </div>
 
 
 
</body>
</html></h5>