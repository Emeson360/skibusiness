<?php
session_start();
if(isset($_POST['addteacher']))
{
    $schname = $_SESSION['name'];
    require_once('../../db.php');
    // $uname = valid($_POST['uname']);
    // $upass = valid($_POST['upass']);
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

    $seed = str_split('abcdefghij'
            .'KLMNOPQRSTUVWXYZ'
            .'98765432'); // and any other characters
        shuffle($seed); // probably optional since array_is randomized; this may be redundant
        $tag = '';
        foreach (array_rand($seed, 21) as $k) $tag .= $seed[$k];

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

        $sql = $db->query("SELECT * FROM teachers WHERE school_name='$schname' && username='$uname' && fname='$fname' && lname='$lname'");
		if($sql->num_rows>0)
		{
			 $error = "Record Found";
		}
		else
		{

        $sql = $db->query("INSERT INTO teachers VALUES(0,'$tag','$schname','','','$fname','$lname','$join','$designation','$department','$gender','$phone','$dob','$address','','$education')");
        if($sql)
        {
            $good ="Inserted Successfully";
        }
        else{
            $error = "Error Occured . ".$db->error_no;
        }
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
    echo '<div align="center" class="btn btn-danger"><a href="../" >Back</a></div>';
}
else{
    echo $good;
    echo '<div align="center" class="btn btn-primary"><a href="../" >Back</a></div>';
}