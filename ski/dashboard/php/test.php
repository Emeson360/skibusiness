

<?php  
session_start();
$sch_name = $_SESSION['name'];
//$class = $_POST['class'];

header('Content-Type: text/csv');
// header('Content-Disposition: attachment; filename="sample.csv"');



 require_once('../../db.php');//AND s_class='$class'
 $sel = $db->query("SELECT * FROM students WHERE school_name ='$sch_name' LIMIT 10  ");
 
 if($sel->num_rows<1)
 {
    echo "No Student Found";
 }
 else
 { 
    while($row = $sel->fetch_assoc()){
        
        
    $ar = array(
        $row['s_name'],$row['student_id']
        );
   // print_r($ar);
    
   
   $out = array_values($ar);
$r = json_encode($out);
    $filename = 'stock.csv';
    // open csv file for writing
$f = fopen($filename, 'a');

if ($f === false) {
	die('Error opening the file ' . $filename);
}

// write each row at a time to a file
foreach ($r as $row) {
	fputcsv($f, $row);
}

//close the file
fclose($f);
}







 }  ?>
 
 
 

													