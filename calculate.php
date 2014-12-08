<?php // TomyamBranchesV1.0.0 
// ส่วนการทดสอบ
session_start();
include_once 'connect.php';
$checks = $_REQUEST['s'];
$checkp1= $_REQUEST['p1'];
$checkp2= $_REQUEST['p2'];
$checkp3= $_REQUEST['p3'];
$checkn= $_REQUEST['n'];
$checkr= $_REQUEST['r'];
$va1 = $_REQUEST['count1'];
$va2 = $_REQUEST['count2'];
$va3 = $_REQUEST['count3'];
$va4 = $_REQUEST['count4'];
$a ="เพิ่ม";
$comment = $_REQUEST['comment'];

if (isset($checks)&&isset($checkn)||isset($checkr)){
	if(isset($checkp1)&&isset($checkp2)&&isset($checkp3)){
		if (isset($va1)||isset($va2)||isset($va3)){
			$cal = (35+(($va1*15)+($va2+$va3)*55))*$va4;
			$disp = "$a$checkp1 $va1 $checkp2 $va2 $checkp3 $va3";
		}
	}elseif (isset($checkp1)&&isset($checkp2)){
		if(isset($va1)||isset($va2)){
			$cal = (35+(($va1*15)+$va2*55))*$va4;
			$disp = "$a$checkp1 $va1 $checkp2 $va2";
		}
	}elseif (isset($checkp1)&&isset($checkp3)){
		if(isset($va1)||isset($va3)){
			$cal = (35+(($va1*15+($va3*55))))*$va4;
			$disp = "$a$checkp1 $va1 $checkp3 $va3";
		}
	}elseif (isset($checkp3)&&isset($checkp2)){
		if(isset($va3)||isset($va2)){
			$cal = (35+(($va3+$va2)*55))*$va4;
			$disp = "$a$checkp2 $va2 $checkp3 $va3";
		}
	}elseif (isset($checkp1)){
		if(isset($va1)){
			$cal = (35+($va1*15))*$va4;
			$disp = "$a$checkp1 $va1";
		}
	}elseif (isset($checkp2)){
		if(isset($va2)){
			$cal = (35+($va2*55))*$va4;
			$disp = "$a$checkp2 $va2";
		}
	}elseif (isset($checkp3)){
		if(isset($va3)){
			$cal = (35+($va3*55))*$va4;
			$disp = "$a$checkp3 $va3";
		}
	}else {
		$cal = 35*$va4;
	}
	
	if (isset ($comment)){
	$_SESSION["total"][] = $checks.$checkn.$checkr.$disp.$comment." จำนวน ".$va4." ชาม";
	$_SESSION["sum"][] = $cal;
	header("Location: /swcon/index.php");
	}else {
	$_SESSION["total"][] = $checks.$checkn.$checkr.$disp." จำนวน ".$va4." ชาม";
	$_SESSION["sum"][] = $cal;
	header("Location: /swcon/index.php");
	}
}header("Location: /swcon/index.php");
?>

