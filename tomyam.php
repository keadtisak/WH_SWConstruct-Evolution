<?php
 include 'connect.php';

 
 
 ?> 




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap ร้านต้มยำ</title>
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">

  </head>
<body>


<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8" style = "background-color: #E0F2F7">
  
  <div class="row">
  <div class="col-xs-4 col-sm-12"  >qwe </div>
  <div class="col-xs-4 col-sm-12"  ><h3>รายการที่สั่ง</h3></div>
  <div class="col-xs-4 col-sm-12"  ><h3 >เส้น </h3></div>
   	<form class="form_input" method="post" action="too.php">
   	<div class="col-xs-2 col-sm-3"  > 
         <div class="radio">
  		<label>
   		 	<input type="radio" name="s" id="optionsRadios1" value="เล้นเล็ก" checked>เล้นเล็ก
  			</label>
	</div>   
      </div>
      <div class="col-xs-4 col-sm-3">
       <div class="radio">
  		<label>
   		 	<input type="radio" name="s" id="optionsRadios1" value="เส้นหมี่" checked>เส้นหมี่
  			</label>
		</div>
      </div>
      <div class="col-xs-4 col-sm-3">
        <div class="radio">
  		<label>
   		 	<input type="radio" name="s" id="optionsRadios1" value="เส้นบะหมี่" checked>เส้นบะหมี่
  			</label>
	</div>
      </div>
   	 	<div class="col-xs-4 col-sm-3">
        <div class="radio">
  		<label>
   		 	<input type="radio" name="s" id="optionsRadios1" value="วุ้นเส้น" checked>วุ้นเส้น
  			</label>
	</div>
      </div>
      <!-- line 2 -->
      <div class="col-xs-4 col-sm-12"  ><h3 >เครื่องเพื่มเติม </h3></div>
      <div class="col-xs-2 col-sm-3"  > 
        <div class="radio">
  		<label>
   		 	<input type="checkbox" name="p" id="checkbox1" value="ไข่มะตูม" checked>ไข่มะตูม
  			</label>
	</div>
      </div>
      <div class="col-xs-4 col-sm-3">
        <div class="radio">
  		<label>
   		 	<input type="checkbox" name="p" id="optionsRadios1" value="กุ้ง" checked>กุ้ง
  			</label>
  		
	</div>
      </div>
      <div class="col-xs-4 col-sm-3">
        <div class="radio">
  		<label>
   		 	<input type="checkbox" name="p" id="optionsRadios1" value="ปลาหมึก" checked>ปลาหมึก
  			</label>
	</div>
      </div>
     <div class="col-xs-4 col-sm-3" >
      <select class="form-control" style=width:100px>
  		<option>1</option>
  		<option>2</option>
  		<option>3</option>
  		<option>4</option>
  		<option>5</option>
		</select>
  		</div>
  		
   	 	
   	 	
      <!-- line 3 -->
      <div class="col-xs-4 col-sm-12"  ><h3 >น้ำซุป</h3></div>
      <div class="col-xs-2 col-sm-3"  > 
        <div class="radio">
  		<label>
   		 	<input type="radio" name="n" id="optionsRadios1" value="น้ำใส" checked>น้ำใส
  			</label>
	</div>
      </div>
      <div class="col-xs-4 col-sm-3">
        <div class="radio">
  		<label>
   		 	<input type="radio" name="n" id="optionsRadios1" value="ต้มยำ" checked>ต้มยำ
  			</label>
	</div>
      </div>

     <!-- line 3 -->
       
      <div class="col-xs-4 col-sm-12"  ><h3 >ความเผ็ด</h3></div>
      <div class="col-xs-2 col-sm-3"  > 
        <div class="radio">
  		<label>
   		 	<input type="radio" name="r" id="optionsRadios1" value="เผ็ด" checked>เผ็ด
  			</label>
	</div>
      </div>
      <div class="col-xs-4 col-sm-3">
        <div class="radio">
  		<label>
   		 	<input type="radio" name="r" id="optionsRadios1" value="ไม่เผ็ด" checked>ไม่เผ็ด
  			</label>
  		</div>
  		</div>
  		<input type="submit" class="btn btn-default" value="ยืนยัน">
      </form>
      </div>
      
      </div>
	</div>
      
   	 	
   	 		
   	 		
   	 		
   	 		 <div class="col-md-2"></div>

  
<?php echo $checkb1;



?>
</body>
</html>