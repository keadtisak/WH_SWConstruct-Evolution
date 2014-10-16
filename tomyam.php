<?php
 include 'connect.php';
 
 ?> 


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> ร้านต้มยำ</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
  </head>
<body>


<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8" style = "background-color: #E0F2F7">
  <form class="form_input" method="post" action="calculat.php">
  <div class="row">
  <div class="col-xs-4 col-sm-12"  > </div>
  <div class="col-xs-4 col-sm-12"  ><h3>รายการที่สั่ง</h3></div>
  <div class="col-xs-4 col-sm-12"  ><h3 >เส้น </h3></div>
   	
   	<div class="col-xs-2 col-sm-3"  > 
         <div class="radio">
  		<label>
   		 	<input type="radio" name="s"  value="เล้นเล็ก" checked>เล้นเล็ก
  			</label>
	</div>   
      </div>
      <div class="col-xs-4 col-sm-3">
       <div class="radio">
  		<label>
   		 	<input type="radio" name="s" value="เส้นหมี่" checked>เส้นหมี่
  			</label>
		</div>
      </div>
      <div class="col-xs-4 col-sm-3">
        <div class="radio">
  		<label>
   		 	<input type="radio" name="s" value="เส้นบะหมี่" checked>เส้นบะหมี่
  			</label>
	</div>
      </div>
   	 	<div class="col-xs-4 col-sm-3">
        <div class="radio">
  		<label>
   		 	<input type="radio" name="s"  value="วุ้นเส้น" checked>วุ้นเส้น
  			</label>
	</div>
      </div>
      <!-- line 2 -->
      <div class="col-xs-4 col-sm-12"  ><h3 >เครื่องเพื่มเติม </h3></div>
      <div class="col-xs-2 col-sm-3"  > 
        <div class="radio">
  		<label>
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
  		<label>
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
  		<label>
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

      <!-- line 3 -->
      <div class="col-xs-4 col-sm-12"  ><h3 >น้ำซุป</h3></div>
      <div class="col-xs-2 col-sm-3"  > 
        <div class="radio">
  		<label>
   		 	<input type="radio" name="n"  value="น้ำใส" checked>น้ำใส
  			</label>
	</div>
      </div>
      <div class="col-xs-4 col-sm-3">
        <div class="radio">
  		<label>
   		 	<input type="radio" name="n"  value="ต้มยำ" checked>ต้มยำ
  			</label>
	</div>
      </div>

     <!-- line 3 -->
       
      <div class="col-xs-4 col-sm-12"  ><h3 >ความเผ็ด</h3></div>
      <div class="col-xs-2 col-sm-3"  > 
        <div class="radio">
  		<label>
   		 	<input type="radio" name="r"  value="เผ็ด" checked>เผ็ด
  			</label>
	</div>
      </div>
      <div class="col-xs-4 col-sm-3">
        <div class="radio">
  		<label>
   		 	<input type="radio" name="r"  value="ไม่เผ็ด" checked>ไม่เผ็ด
  			</label>
  		</div>
  		
  		</div>
  		
      </div>
      <input type="submit" class="btn btn-default" value="ยืนยัน">
      <input type="reset" class="btn btn-default" value="ล้าง">
      </form>
      </div>
	</div>
      
 		
   	 		 <div class="col-md-2"></div>

</body>
</html>