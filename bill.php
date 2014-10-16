<?php
session_start ();
$summary =0;
if (isset($_SESSION["sum"])){
for($i = 0; $i < count ( $_SESSION ["total"] ); $i ++) {
	$summary = $summary + $_SESSION ["sum"] [$i] ;
}
}

?>
<!DOCTYPE html>
<html lang="en">
  <head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>คำนวนผล</title>
    
</head>

<body>
<div class="row">
  <div class="col-xs-6 col-md-2"></div>
  <div class="col-xs-6 col-md-8" style ="background-color:#F5ECCE">
  	<div class="row">
  		<div class="col-xs-12 col-md-12"><center><h2>รายการอาหารที่สั่ง</h2></center></div>
  		<div class="col-xs-12 col-md-12">
  		<table class="table">
    <thead>
        <tr>
            <th>ลำดับที่ </th>
            <th>รายการ</th>
            <th>ค่าอาหาร</th>
        </tr>
    </thead>
    <?php 
    if (isset($_SESSION["sum"])){
		for($i = 0; $i < count ( $_SESSION ["total"] ); $i ++){
		?>
    <tbody>
        <tr>
		 		<td> <?php echo$i+1;?></td>
		 		<td> <?php echo$_SESSION["total"][$i];?></td>
		 		<td> <?php echo$_SESSION["sum"][$i];?></td>

		 		
		 	</tr>
		 	<?php } 
		 	session_destroy();
		 	
		 	?>
    </tbody>
</table>

<h3><?php echo "รวมเป็นเงินทั้งหมด ".$summary." บาท";
			}else{
		 		echo "<h3>ไม่มีรายการอาหาร</h3>";
			}
		 	?></h3>
<center>
	<form action="tomyam.php">
		<input type="submit" class="btn btn-default" value="สั่งอาหาร" style="width:100px">
	</form>
</center>

  	
       	
  		
  		
  		</div>
  		<div class="col-xs-12 col-md-12"></div>
	</div>
  
  
  </div>
  <div class="col-xs-6 col-md-2"></div>
</div>




</body>
</html>