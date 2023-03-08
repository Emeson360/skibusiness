<?php
 
session_start();
$sch_name = $_SESSION['name'];


header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="sample.csv"');



 require_once('../../db.php');//AND s_class='$class'
 $sel = $db->query("SELECT * FROM students WHERE school_name ='$sch_name' LIMIT 10  ");
 
 if($sel->num_rows<1)
 {
    echo "No Student Found";
 }
 else
 { 
    while($row = $sel->fetch_assoc()){
        $data = array(
        $row['s_name'],$row['student_id'],
      
);


$fp = fopen('php://output', 'wb');
foreach ( $data as $line ) {
    $val = explode(",", $line);
    fputcsv($fp, $val);
}
fclose($fp);

    }
     
     
 }
    



?>