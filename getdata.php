<?php

$val=$_GET['selectvalue'];

$framework1=array('laravel','codeigintor','cakephp','phalcon');
$framework2=array('react','angular','node','express');
$framework3=array('tkinter','django','flask','numpy');


switch ($val) {
	case 'PHP': foreach ($framework1 as  $phpvalue1) {
		echo " <option>$phpvalue1</option> ";
		
	
	}
		break;
	  
    case 'JAVASCRIPT': foreach ($framework2 as  $phpvalue2) {
		echo "<option>$phpvalue2</option>";	
	}
		break;

  case 'PYTHON': foreach ($framework3 as  $phpvalue3) {
		echo "<option>$phpvalue3</option>";	
	}
		break;

	default:
		echo "data is not select";
		break;
}





?>