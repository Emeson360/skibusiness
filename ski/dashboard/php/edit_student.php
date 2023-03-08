<?php
session_start();
if(isset($_POST['editstudent']))
{
    $sch_name = $_SESSION['name'];
    require_once('../../db.php');
    $uid = valid($_POST['uid']);
    $regno = valid($_POST['regno']);
    $fname = valid($_POST['fname']); 
    $dob = valid($_POST['dob']);
    $gender = valid($_POST['gender']);
    $class = valid($_POST['class']);
    $join = valid($_POST['join']);
    
    
   
    

    // $seed = str_split('abcdefghij'
    //         .'KLMNOPQRSTUVWXYZ'
    //         .'98765432'); // and any other characters
    //     shuffle($seed); // probably optional since array_is randomized; this may be redundant
    //     $tag = '';
    //     foreach (array_rand($seed, 21) as $k) $tag .= $seed[$k];

    if(empty($regno))
    {
        $error = "Reg No is Empty";
    }
    if(empty($fname))
    {
        $error = "Name is Empty";
    }
    if(empty($dob))
    {
        $error = "Date of Birth is Empty";
    }
    if(empty($gender))
    {
        $error = "Gender is Empty";
    }
    if(empty($class))
    {
        $error = "Class is Empty";
    }
    if(empty($join))
    {
        $error = "Admission Date is Empty";
    }
    
    else{
        $updated_at =date('Y-m-d H:i');
        $sql = $db->query("UPDATE students SET student_id='$regno',s_name='$fname',s_dob='$dob',s_gender='$gender',
           s_class='$class',s_addmission_date='$join',updated_at='$updated_at' WHERE uid='$uid' AND school_name='$sch_name'");
        if($sql)
        {
            $good ="Inserted Successfully";
        }
        else{
            $error = "Error Occured . ".$db->error;
        }
    }

}

function valid($data)
{

    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data);
    return  $data;


}
if(isset($error))
{
    echo $error;
}
else{
    echo $good;
    //header("location:../all_teachers.php");
    echo '<div align="center" ><a href="../all_students.php" class="btn btn-primary">Back</a></div>';
}
