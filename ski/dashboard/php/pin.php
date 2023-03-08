<?php
session_start();
$sch_name = $_SESSION['name'];
function valid($data)
{

    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data);
    return  $data;


}
function pin()
{
     $seed = str_split('98765432'); // and any other characters
        shuffle($seed); // probably optional since array_is randomized; this may be redundant
        $tag = '';
        foreach (array_rand($seed, 7) as $k) $tag .= $seed[$k];
        return strtoupper($tag);
}

function uid()
{
     $seed = str_split('abcdefghij'
            .'KLMNOPQRSTUVWXYZ'
            .'98765432'); // and any other characters
        shuffle($seed); // probably optional since array_is randomized; this may be redundant
        $tag = '';
        foreach (array_rand($seed, 21) as $k) $tag .= $seed[$k];
        return $tag;
}
if(isset($_POST['pinbtn']))
{
    
    if($_POST['pintype'] == 'Select Pin Type'){
        $error = "<div align='center' class='alert alert-success' > Pin Type is Empty</div>";
    }
    if(empty($_POST['numberofstu'])){
        $error = "<div align='center' class='alert alert-success' > No of student is Empty</div>";
    }
    if(empty($_POST['phone'])){
        $error = "<div align='center' class='alert alert-success' > Phone is Empty</div>";
    }
    require_once('../../db.php');
    
    $pin = pin();
    $pintype = valid($_POST['pintype']);
    $numberofstu = valid($_POST['numberofstu']);
    $sch = valid($sch_name);
    $phone = valid($_POST['phone']);
    $uid = uid();
    $pin = pin();
    $date_created = date('Y-m-d H:i');
    $pay = $numberofstu * 500;
      $sql = $db->query("INSERT INTO pin_count_adv VALUES (0,'$uid','$pintype','$pin','$numberofstu','$numberofstu','$sch','$pay','','$date_created','no')");
		if($sql)
		{
		    $good = "<div align='center' class='alert alert-success' >Pin Sent For Approval, You are to pay N$pay </div>";
		}
		else{
		    $error= "<div align='center' class='alert alert-danger' >Pin Wasn't Sent For Approval: $sql->error</div>";
		}
    
    
}
//$sql->affected_rows>0
if(isset($error))
{
    echo $error;
    echo '<div align="center" ><a href="../gen.php" class="btn btn-primary">Back</a></div>';
}
else if(isset($good)){
    echo $good;
    echo '<div align="center" ><a href="../gen.php" class="btn btn-primary">Back</a></div>';
}
?>
<link href="../assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />