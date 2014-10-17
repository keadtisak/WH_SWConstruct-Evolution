<?php
session_start();
 include 'connect.php';
 $r = sizeof($_SESSION["sum"]);
 
 ?> 
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>ร้านก๋วยเตี๋ยวต้มยำบ้านลายจุดข้างวัง</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
 <style>
body {
    background-image: url("tomyam.jpg");
}
</style>

  </head>
<body>

<div class="row">
  <div class="col-md-2"  ></div>
  <div class="col-md-8" style ="background-color:#F5ECCE">
  <form class="form_input" method="post" action="calculate.php">
  <div class="row">
  <div class="col-xs-4 col-sm-12"  style ="background-color:#F5DA81;" ><center><h1>ก๋วยเตี๋ยวต้มยำบ้านลายจุดข้างวัง</h1> </center></div>
  <div class="col-xs-4 col-sm-12"  ><h3>รายการสั่งอาหารที่  <?php echo $r+1;?></h3></div>
  <div class="col-xs-4 col-sm-12"  ><h3 >เส้น </h3></div>
   	
   	<div class="col-xs-2 col-sm-3"  > 
         <div class="radio">
  		<label><img src="sanlak.jpg" class="img-rounded" width="75" height="75">
   		 	<input type="radio" name="s"  value="เล้นเล็ก" >เส้นเล็ก
  			</label>
	</div>   
      </div>
      <div class="col-xs-4 col-sm-3">
       <div class="radio">
  		<label><img src="sanmee.jpg" class="img-rounded" width="75" height="75">
   		 	<input type="radio" name="s" value="เส้นหมี่" >เส้นหมี่
  			</label>
		</div>
      </div>
      <div class="col-xs-4 col-sm-3">
        <div class="radio">
  		<label><img src="sanbamee.jpg" class="img-rounded" width="75" height="75">
   		 	<input type="radio" name="s" value="เส้นบะหมี่" >เส้นบะหมี่
  			</label>
	</div>
      </div>
   	 	<div class="col-xs-4 col-sm-3">
        <div class="radio">
  		<label><img src="vunsan.jpg" class="img-rounded" width="75" height="75">
   		 	<input type="radio" name="s"  value="วุ้นเส้น" >วุ้นเส้น
  			</label>
	</div>
      </div>

      <!-- line 2 -->
      <div class="col-xs-4 col-sm-12"  ><h3 >น้ำซุป</h3></div>
      <div class="col-xs-2 col-sm-3"  > 
        <div class="radio">
  		<label><img src="namsai.jpg" class="img-rounded" width="75" height="75">
   		 	<input type="radio" name="n"  value="น้ำใส" >น้ำใส
  			</label>
	</div>
      </div>
      <div class="col-xs-4 col-sm-3">
        <div class="radio">
  		<label><img src="tomyam.jpg" class="img-rounded" width="75" height="75">
   		 	<input type="radio" name="n"  value="ต้มยำ" >ต้มยำ
  			</label>
	</div>
      </div>

     <!-- line 3 -->
       
      <div class="col-xs-4 col-sm-12"  ><h3 >ความเผ็ด</h3></div>
      <div class="col-xs-2 col-sm-3"  > 
        <div class="radio">
  		<label><img src="pad.jpg" class="img-rounded" width="75" height="75">
   		 	<input type="radio" name="r"  value="เผ็ด" >เผ็ด
  			</label>
	</div>
      </div>
      <div class="col-xs-4 col-sm-3">
        <div class="radio">
  		<label><img src="maipad.jpg" class="img-rounded" width="75" height="75">
   		 	<input type="radio" name="r"  value="ไม่เผ็ด" >ไม่เผ็ด
  			</label>
  		</div>
  		
  		</div>
  		
  		 <!-- line 4 -->
      <div class="col-xs-4 col-sm-12"  ><h3 >เครื่องเพื่มเติม </h3></div>
      <div class="col-xs-2 col-sm-3"  > 
        <div class="radio">
  		<label><img src="kai.jpg" class="img-rounded" width="75" height="75">
   		 	<input type="checkbox" name="p1" id="p" value="ไข่มะตูม" >ไข่มะตูม
  			</label>
	</div>
	<select name ="count1" id ="dialog-confirm" class="form-control" style=width:100px>
		<option value="0">-</option>
  		<option value="1">1</option>
  		<option value="2">2</option>
  		<option value="3">3</option>
  		<option value="4">4</option>
  		<option value="5">5</option>
		</select>	
      </div>
      
      <div class="col-xs-4 col-sm-3">
        <div class="radio">
  		<label><img src="shrimp .jpg" class="img-rounded" width="75" height="75">
   		 	<input type="checkbox" name="p2" id="p" value="กุ้ง" >กุ้ง
  			</label>
	</div>
	<select name ="count2" id ="dialog-confirm" class="form-control" style=width:100px>
		<option value="0">-</option>
  		<option value="1">1</option>
  		<option value="2">2</option>
  		<option value="3">3</option>
  		<option value="4">4</option>
  		<option value="5">5</option>
		</select>
      </div>
      
      <div class="col-xs-4 col-sm-3">
        <div class="radio">
  		<label><img src="squid.jpg" class="img-rounded" width="75" height="75">
   		 	<input type="checkbox" name="p3" id="p" value="ปลาหมึก" >ปลาหมึก
  			</label>
  			
	</div><select name ="count3" id ="dialog-confirm" class="form-control" style=width:100px>
		<option value="0">-</option>
  		<option value="1">1</option>
  		<option value="2">2</option>
  		<option value="3">3</option>
  		<option value="4">4</option>
  		<option value="5">5</option>
		</select>
      </div>
      </div>
      
      <div class="col-xs-4 col-sm-12"  ><h3 >อื่นๆ</h3></div>
       <div class="col-xs-4 col-sm-12">
       	<textarea class="form-control" name ="comment" rows="3" cols="50" style="width:400px" ></textarea>
       
       </div><br>
       <div class="col-xs-4 col-sm-12"  ><br></div>
      	<center><input type="submit" class="btn btn-default" value="ยืนยัน" style="width:100px">
      <input type="reset" class="btn btn-default" value="ล้าง" style="width:100px">
      </center> 
      </form><br>
      <form action="bill.php" >
      <center><input type="submit" class="btn btn-default" value="ชำระเงิน" style="width:100px"></center></form>
      </div>
	</div>
   	 <div class="col-md-2"></div>

</body>
</html>
