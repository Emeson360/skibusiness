<?php
session_start();
if(isset($_POST['editteacher']))
{
    $sch_name = $_SESSION['name'];
    require_once('../../db.php');
    $uid = valid($_POST['uid']);
    $uname = valid($_POST['uname']);
    $upass = valid($_POST['upass']);
    $fname = valid($_POST['fname']);
    $lname = valid($_POST['lname']);
    $join = valid($_POST['join']);
    $designation = valid($_POST['designation']);
    $department = valid($_POST['department']);
    $gender = valid($_POST['gender']);
    $phone = valid($_POST['phone']);
    $dob = valid($_POST['dob']);
    $address = valid($_POST['address']);
    $education = valid($_POST['education']);

    // $seed = str_split('abcdefghij'
    //         .'KLMNOPQRSTUVWXYZ'
    //         .'98765432'); // and any other characters
    //     shuffle($seed); // probably optional since array_is randomized; this may be redundant
    //     $tag = '';
    //     foreach (array_rand($seed, 21) as $k) $tag .= $seed[$k];

    if(empty($uname))
    {
        $error = "User Name is Empty";
    }
    if(empty($upass))
    {
        $error = "Password is Empty";
    }
    if(empty($fname))
    {
        $error = "First Name is Empty";
    }
    if(empty($lname))
    {
        $error = "Last Name is Empty";
    }
    if(empty($join))
    {
        $error = "First Name is Empty";
    }
    if(empty($designation))
    {
        $error = "Designation is Empty";
    }
    if(empty($department))
    {
        $error = "Department is Empty";
    }
    if(empty($gender))
    {
        $error = "gender is Empty";
    }
    if(empty($phone))
    {
        $error = "Phone Number is Empty";
    }
    if(empty($dob))
    {
        $error = "Date of Birth is Empty";
    }
    if(empty($address))
    {
        $error = "Address is Empty";
    }
    if(empty($education))
    {
        $error = "Education is Empty";
    }
    else{

        $sql = $db->query("UPDATE teachers SET school_name ='$sch_name',username='$uname',
        password='$upass',fname='$fname',lname='$lname',joing_date='$join',designation='$designation',
        department='$department',gender='$gender',phone='$phone',dob='$dob',address='$address', 
        education='$education' WHERE uid='$uid' AND school_name='$sch_name'");
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
    echo '<div align="center" ><a href="../all_teachers.php" class="btn btn-primary">Back</a></div>';
}
