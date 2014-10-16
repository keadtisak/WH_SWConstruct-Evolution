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
<?php
 include 'connect.php';
?> 

<div class="row">
  <div class="col-md-2"></div>
  <div class="col-md-8" style = "background-color: #E0F2F7">
  
  <div class="row">
  <div class="col-xs-4 col-sm-12"  >qwe </div>
  <div class="col-xs-4 col-sm-12"  ><h3>รายการที่สั่ง</h3></div>
  <div class="col-xs-4 col-sm-12"  ><h3 >เส้น </h3></div>
   	<form class="form_input" method="get">
   	<div class="col-xs-2 col-sm-3"  > 
         <div class="radio">
  		<label>
   		 	<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>เล้นเล็ก
  			</label>
	</div>   
      </div>
      <div class="col-xs-4 col-sm-3">
       <div class="radio">
  		<label>
   		 	<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>เส้นหมี่
  			</label>
		</div>
      </div>
      <div class="col-xs-4 col-sm-3">
        <div class="radio">
  		<label>
   		 	<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>เส้นบะหมี่
  			</label>
	</div>
      </div>
   	 	<div class="col-xs-4 col-sm-3">
        <div class="radio">
  		<label>
   		 	<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>วุ้นเส้น
  			</label>
	</div>
      </div>
   </form>
      <!-- line 2 -->
      <form class="form_input2" method="post">
      <div class="col-xs-4 col-sm-12"  ><h3 >เครื่องเพื่มเติม </h3></div>
      <div class="col-xs-2 col-sm-3"  > 
        <div class="radio">
  		<label>
   		 	<input type="checkbox" name="checkbox1" id="checkbox1" value="1" checked>ไข่มะตูม
  			</label>
	</div>
	<?php if(isset($_POST['checkbox1'])){ $checkb1  = $_POST['checkbox1']?>
	<select class="form-control" style=width:75px>
  		<option>1</option>
  		<option>2</option>
  		<option>3</option>
  		<option>4</option>
  		<option>5</option>
		</select>
		<?php }?>
      </div>
      <div class="col-xs-4 col-sm-3">
        <div class="radio">
  		<label>
   		 	<input type="checkbox" name="optionsRadios" id="optionsRadios1" value="option1" checked>กุ้ง
  			</label>
  		
	</div>
      </div>
      <div class="col-xs-4 col-sm-3">
        <div class="radio">
  		<label>
   		 	<input type="checkbox" name="optionsRadios" id="optionsRadios1" value="option1" checked>ปลาหมึก
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
  		
   	 	</form>
   	 	
      <!-- line 3 -->
       <form class="form_input3" method="get">
      <div class="col-xs-4 col-sm-12"  ><h3 >น้ำซุป</h3></div>
      <div class="col-xs-2 col-sm-3"  > 
        <div class="radio">
  		<label>
   		 	<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>น้ำใส
  			</label>
	</div>
      </div>
      <div class="col-xs-4 col-sm-3">
        <div class="radio">
  		<label>
   		 	<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>ต้มยำ
  			</label>
	</div>
      </div>
     </form>
     <!-- line 3 -->
       <form class="form_input4" method="get">
      <div class="col-xs-4 col-sm-12"  ><h3 >ความเผ็ด</h3></div>
      <div class="col-xs-2 col-sm-3"  > 
        <div class="radio">
  		<label>
   		 	<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>เผ็ด
  			</label>
	</div>
      </div>
      <div class="col-xs-4 col-sm-3">
        <div class="radio">
  		<label>
   		 	<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>ไม่เผ็ด
  			</label>
	</div>
      </div>
      </form>
      
      
      
   	 	</div>
   	 		</div> 
   	 		
   	 		
   	 		 <div class="col-md-2"></div>
  </div>
  
<?php echo $checkb1;



?>
</body>
</html>