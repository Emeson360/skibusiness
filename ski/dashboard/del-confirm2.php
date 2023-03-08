
<div align="center">

<form method="POST">
    <button class="btn btn-primary" name="yes">YES PROCEED</button>
    <br/>
    <button class="btn btn-danger" name="nope">NO</button>
</form>

</div>

<?php
session_start();
$sch_name = $_SESSION['name'];
if(isset($_POST['yes']))
{

    
$uid = trim($_GET['uid']);


require_once('../db.php');
$sel = $db->query("DELETE FROM students WHERE school_name ='$sch_name' AND uid='$uid'");
if($sel)
{ 
header("location:all_students.php");
} 


}

else if(isset($_POST['nope'])){
header("location:all_students.php");    
}



?>