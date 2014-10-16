<?php 
include 'connect.php';
$checks = $_REQUEST['s'];
$checkp1= $_REQUEST['p1'];
$checkp2= $_REQUEST['p2'];
$checkp3= $_REQUEST['p3'];
$checkn= $_REQUEST['n'];
$checkr= $_REQUEST['r'];
$va1 = $_REQUEST['count1'];
$va2 = $_REQUEST['count2'];
$va3 = $_REQUEST['count3'];
$a ="เพิ่ม";

	if(isset($checkp1)&&isset($checkp2)&&isset($checkp3)){
		if (isset($va1)||isset($va2)||isset($va3)){
			$cal = 35+(($va1+$va2+$va3)*15);
			$disp = "$a$checkp1 $va1 $checkp2 $va2 $checkp3 $va3";
		}
	}elseif (isset($checkp1)&&isset($checkp2)){
		if(isset($va1)||isset($va2)){
			$cal = 35+(($va1+$va2)*15);
			$disp = "$a$checkp1 $va1 $checkp2 $va2";
		}
	}elseif (isset($checkp1)&&isset($checkp3)){
		if(isset($va1)||isset($va3)){
			$cal = 35+(($va1+$va3)*15);
			$disp = "$a$checkp1$va1$checkp3$va3";
		}
	}elseif (isset($checkp3)&&isset($checkp2)){
		if(isset($va3)||isset($va2)){
			$cal = 35+(($va3+$va2)*15);
			$disp = "$a$checkp2$va2$checkp3$va3";
		}
	}elseif (isset($checkp1)){
		if(isset($va1)){
			$cal = 35+($va1*15);
			$disp = "$a$checkp1$va1";
		}
	}elseif (isset($checkp2)){
		if(isset($va2)){
			$cal = 35+($va2*15);
			$disp = "$a$checkp2$va2";
		}
	}elseif (isset($checkp3)){
		if(isset($va3)){
			$cal = 35+($va3*15);
			$disp = "$a$checkp3$va3";
		}
	}else {
		$cal = 35;
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
  <div class="col-xs-6 col-md-8">
  	<div class="row">
  		<div class="col-xs-12 col-md-12"><br></div>
  		<div class="col-xs-12 col-md-12"><h2><?php echo $checks.$checkn.$checkr.$disp." ราคา ".$cal." บาท";?></h2></div>
  		<div class="col-xs-12 col-md-12"></div>
	</div>
  
  
  </div>
  <div class="col-xs-6 col-md-2"></div>
</div>




</body>
</html>
