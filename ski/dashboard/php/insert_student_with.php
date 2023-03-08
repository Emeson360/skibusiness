<?php
session_start();
$sch_nam = $_SESSION['name'];
function valid($data)
{

    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data);
    return  $data;


}

if(isset($_POST['addstudentwith']))
{
    $ar = array();
    require_once('../../db.php');
    $number = count($_POST['name']);
    
    if($number < 1){
        $error= '<div align="center"class="alert alert-danger" >Empty Fields, Please fill up the forms.</div>';
    }
    else{
    
for ($i=0; $i<$number; $i++) {
    if (valid($_POST["name"][$i] != '') ||
    valid($_POST["dob"][$i] != '') || valid($_POST["reg"][$i] != '') ||
    valid($_POST["gender"][$i] != '') ||
    valid($_POST["class"][$i] != '') ||
    valid($_POST["adminission"][$i] != '') ||
    valid($_POST["pin"][$i] != '') || 
    valid($_POST["sch_name"][$i] != '')) {
            $seed = str_split('abcdefghij'
            .'KLMNOPQRSTUVWXYZ'
            .'98765432'); // and any other characters
        shuffle($seed); // probably optional since array_is randomized; this may be redundant
        $tag = '';
        foreach (array_rand($seed, 21) as $k) $tag .= $seed[$k];
      echo  $name = $_POST["name"][$i];
        $reg = $_POST["reg"][$i];
        $dob = $_POST["dob"][$i];
        $gender = $_POST["gender"][$i];
        $class = $_POST["class"][$i];
        $adminission = $_POST["adminission"][$i];
        $date_created = date('Y-m-d H:i');
        $pin = $_POST["pin"][$i];
         $sch_name= $_POST["sch_name"][$i];
         
         if(empty($name))
         {
             $error = "Name field is Empty";
         }
         if(empty($dob))
         {
             $error = "Date of birth is Empty";
         }
         if(empty($adminission))
         {
             $error = "Addmission date is Empty";
         }
         else{
         
         
         
         
         
         
           
//   $chkPin = $db->query("SELECT * FROM pin_count_adv WHERE school_name='$sch_nam' AND approved='yes' AND pin='$pin'");
//   $f = $chkPin->fetch_assoc();
//   $totalPin = $f['pin_count'];
//   $left_pin = $f['pin_count_left'];
   
//   if($left_pin == 0){
//       echo "Pin has been exhuasted!!";
//   }
//   elseif($left_pin < $number) //if the total number of students is greater than the avialable pin slot error should display
//   {
//       echo "Check the number of students added!!";
//   }
//   else{}
   
         
         
    
$chk = $db->query("SELECT * FROM pin_gen_stu WHERE 1");// pin ='$pin' AND name='$name' AND school='$sch_name'
if($chk->num_rows<1)
{
    $error = "No Record Found";
}else{

$chk = $db->query("SELECT * FROM students WHERE school_name='$sch_name' && s_name='$name' && student_id='$reg'");
if($chk->num_rows>0)
{
    $error = "Record Existing";
}else{
        $sql = $db->query("INSERT INTO students VALUES(0,'$tag','$sch_name','$reg','$name','$dob','$gender','$class','$adminission','$date_created','')");
        $update = $db->query("UPDATE pin_gen_stu SET name='$name' WHERE pin='$pin'");
        if($sql && $update)
        {
            $good ="Inserted Successfully";
            $update = $db->query("UPDATE pin_gen_stu SET used='yes', used_by='$sch_name' WHERE pin='$pin'");
          
        }
        else{
            $error = "Error Occured . ".$db->error;
            
        }
     }
    }
      }
}
else{
     $error = "Some Empty Fields";
}

 }
}
}

if(isset($error))
{
    echo $error;
    echo '<div align="center" ><a href="../admit.php" class="btn btn-primary">Back</a></div>';
}
else if(isset($good)){
    echo $good;
    echo '<div align="center" ><a href="../admit.php" class="btn btn-primary">Back</a></div>';
}
?>
	<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />