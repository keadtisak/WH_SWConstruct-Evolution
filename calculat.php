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

	if(isset($checkp1)&&isset($checkp2)&&isset($checkp3)){
		if (isset($va1)||isset($va2)||isset($va3)){
			$cal = 35+(($va1+$va2+$va3)*15);
		}
	}elseif (isset($checkp1)&&isset($checkp2)){
		if(isset($va1)||isset($va2)){
			$cal = 35+(($va1+$va2)*15);
		}
	}elseif (isset($checkp1)&&isset($checkp3)){
		if(isset($va1)||isset($va3)){
			$cal = 35+(($va1+$va3)*15);
		}
	}elseif (isset($checkp3)&&isset($checkp2)){
		if(isset($va3)||isset($va2)){
			$cal = 35+(($va3+$va2)*15);
		}
	}elseif (isset($checkp1)){
		if(isset($va1)){
			$cal = 35+($va1*15);
		}
	}elseif (isset($checkp2)){
		if(isset($va2)){
			$cal = 35+($va2*15);
		}
	}elseif (isset($checkp3)){
		if(isset($va3)){
			$cal = 35+($va3*15);
		}
	}

echo $checks.$checkn.$checkr."เพิ่ม ".$checkp."จำนวน ".$va1."ราคา".$cal;

?>

<!DOCTYPE html>
<html lang="en">
  <head>
 <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <title>ข้อมูลคณะ</title>
    
</head>

<body>



</body>
</html>
