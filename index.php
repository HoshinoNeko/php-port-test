<?php
header('Content-Type:text/json;charset=utf-8');
$query = $_SERVER["QUERY_STRING"];
parse_str($query);
parse_str($query, $query); 
$fp = @fsockopen($h,$p,$errno,$errstr,1);
if (!$fp) {
	$test_result = "Closed";
    }else{
	$test_result = "Open";
}
$result = array
       (
          'host'=>$h,
          'port'=>$p,
          'result'=>$test_result
       );
$result_json = json_encode($result);
echo $result_json;
?>
