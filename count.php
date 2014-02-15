<?php
set_time_limit(0);
if(empty($_GET['m'])){
    exit('Month is null');
}

$m = $_GET['m'];
$mm = str_replace('-', '', $m);

require 'condb.php';



$sql_file = "select filename from tehn_filename";
$res_file = mysql_query($sql_file);

$arr_file = array();
while ($rw = mysql_fetch_array($res_file)) {
    $arr_file[] = $rw[0];
}

$sql = "select pcucode from tehn_hospital";
$res = mysql_query($sql);

while ($row = mysql_fetch_array($res)) {
echo "processing for  $row[0] ...";
echo "<br>";
    foreach ($arr_file as $tb) {
        echo $sql_insert = "update tehn_count21 set $tb = (select COUNT(pcucode) from $tb  
		where pcucode = '$row[0]' and EXTRACT(YEAR_MONTH FROM importdate)='$mm') 
         where pcucode='$row[0]' and mon='$m'";
        mysql_query($sql_insert);
        echo "<br>";
    }//end for
    echo "<hr>";
}//end while

?>
