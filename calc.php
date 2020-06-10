<?php
if (!empty($_POST)) {
 $x = !empty($_POST['x']) ? $_POST['x'] : '0';
 $y = !empty($_POST['y']) ? $_POST['y'] : '0';
 
 $operation = !empty($_POST['operation']) ? $_POST['operation']: '';

 switch ($operation) {
 case 'sum':
 $result = $x.'+'.$y.'=' . ($x + $y);
 break;
 case 'diff':
 $result = $x.'-'.$y.'=' . ($x - $y);
 break;
 case 'del':
 $result = $x.'/'.$y.'=' . ($x / $y);
	if( $y==0)
		$result = $x.'/'.$y.'ERROR:  на 0 делить нельзя';
	break;
 case 'proizv':
 $result = $x.'*'.$y.'=' . ($x * $y);
 break;
 default:
 $result = 'Передан неизвестный тип операции';
 }
 echo $result;
 }
