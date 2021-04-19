<?php
header('Content-Type:text/json;charset=utf-8');
$query = $_SERVER["QUERY_STRING"];
parse_str($query);
parse_str($query, $query); 
$fp = @fsockopen($h,$p,$errno,$errstr,0.1);
if (!$fp) {
	$result = "Closed";
    }else{
	$result = "Open";
}
$feedback = array
       (
          'host'=>$h,
          'port'=>$p,
          'result'=>$result
       );
$jsonback = json_encode($feedback);
echo $jsonback;
?>
