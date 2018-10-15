<?php
$var1=$_POST["Ryfan"];
$rep=$_POST["Ryfan2"];
$indo="Indonesia tanah airku tanah tumpah darahku<br>";
echo "Find : ";
$ex = explode(" ", $indo);	
for($i=0;$i<count($ex);$i++){
	if($ex[$i] == $var1){
		echo $ex[$i] = "<b>$var1</b>"." ";
	}
	else{
		echo $ex[$i]. " ";
	}
}
echo "Replace :";
$exo = explode(" ", $indo);	
for($i=0;$i<count($exo);$i++){
	if($exo[$i] == $var1){
		echo $exo[$i] = "<b><font style='color:#ff0000'>$rep</b></font>"." ";
	}
	else{
		echo $exo[$i]. " ";
	}
}



