<?php
session_start();
//$sch_name = $_SESSION['name'];
function valid($data)
{

    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data);
    return  $data;


}

if(isset($_POST['addstudent']))
{
    require_once('../../db.php');
    $number = count($_POST['name']);
for ($i=0; $i<$number; $i++) {
    if (valid($_POST["name"][$i] != '') ||
    valid($_POST["dob"][$i] != '') || valid($_POST["reg"][$i] != '') ||
    valid($_POST["gender"][$i] != '') ||
    valid($_POST["class"][$i] != '') ||
    valid($_POST["adminission"][$i] != '') || 
    valid($_POST["sch_name"][$i] != '')) {
            $seed = str_split('abcdefghij'
            .'KLMNOPQRSTUVWXYZ'
            .'98765432'); // and any other characters
        shuffle($seed); // probably optional since array_is randomized; this may be redundant
        $tag = '';
        foreach (array_rand($seed, 21) as $k) $tag .= $seed[$k];
        $name = $_POST["name"][$i];
        $reg = $_POST["reg"][$i];
        $dob = $_POST["dob"][$i];
        $gender = $_POST["gender"][$i];
        $class = $_POST["class"][$i];
        $adminission = $_POST["adminission"][$i];
        $date_created = date('Y-m-d H:i');
        $sch_name= $_POST["sch_name"][$i];

$chk = $db->query("SELECT * FROM students WHERE school_name='$sch_name' && s_name='$name' && student_id='$reg'");
if($chk->num_rows>0)
{
    $error = "Record Existing";
}else{
        $sql = $db->query("INSERT INTO students VALUES(0,'$tag','$sch_name','$reg','$name','$dob','$gender','$class','$adminission','$date_created','')");
       
        if($sql)
        {
            $good ="Inserted Successfully";
          
        }
        else{
            $error = "Error Occured . ".$db->error;
            
        }
}
        
    }else{
    $error = "Some Empty Fields";
}
}

 
}


if(isset($error))
{
    echo $error;
    echo '<div align="center" ><a href="../all_students.php" class="btn btn-primary">Back</a></div>';
}
else if(isset($good)){
    echo $good;
    echo '<div align="center" ><a href="../all_students.php" class="btn btn-primary">Back</a></div>';
}