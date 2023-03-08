<?php

function valid($data)
{

    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data);
    return  $data;


}

if(isset($_POST['insert']))
{
    require_once('../../db.php');
    echo $number = count($_POST['eng']);
    
for ($i=0; $i<$number; $i++) {
    if (valid($_POST["eng"][$i] != '')
    ||
    valid($_POST["mat"][$i] != '') 
    || 
    valid($_POST["igb"][$i] != '') 
    ||
    valid($_POST["bsc"][$i] != '') 
    ||
    valid($_POST["pvs"][$i] != '') 
    ||
    valid($_POST["crs"][$i] != '') 
    ||
    valid($_POST["nvl"][$i] != '') 
    ||
    valid($_POST["cca"][$i] != '')
    ||
    valid($_POST["reg"][$i] != '')
    ||
    valid($_POST["class"][$i] != '')
    ||
    valid($_POST["nxtclass"][$i] != '')
    ||
    valid($_POST["status"][$i] != '')
  ) {
           
         $eng = $_POST["eng"][$i];
        $mat = $_POST["mat"][$i];
        $bsc = $_POST["bsc"][$i];
        $igb = $_POST["igb"][$i];
        $nvl = $_POST["nvl"][$i];
        $pvs = $_POST["pvs"][$i];
        $his = $_POST["his"][$i];
        $com = $_POST["com"][$i];
        $fre = $_POST["fre"][$i];
        $mor = $_POST["mor"][$i];
        $total = $_POST["total"][$i];
        $passfail = $_POST["passfail"][$i];

        $uid = $_POST["uid"][$i];
        $sch = $_POST['sch'][$i];
        $studen_name = $_POST["name"][$i];
        $reg = $_POST["reg"][$i];
        $class = $_POST["class"][$i];
        $nxtclass = $_POST["nxtclass"][$i];
        //$status = $_POST["status"][$i];
        
    
        $created_at = date('Y-m-d H:i');
 $sql = $db->query("INSERT INTO student_results VALUES(0,'$uid','$sch','$studen_name','$reg','$class','$nxtclass','','$eng','$mat','$bsc','$igb','$nvl','$pvs','$his','$com','$fre','$mor','$total','$passfail','$created_at','')");
       

        // $sql = $db->query("INSERT INTO student_results VALUES(
        //     0,'$uid','$sch','$studen_name','$reg',
        //     '$class','$nxtclass','$status','$eng',
        //     '$mat','$igb','$bsc','$pvs','$crs',
        //     '$nvl','$cca','$created_at','')");
        if($sql)
        {
            $good ="Inserted Successfully";
          
        }
        else{
            $error = "Error Occured . ".$db->error;
            
        }
    }else{
    $error = "Some Empty Fields";
}
}

 
}


if(isset($error))
{
    echo $error;
    echo '<div align="center" ><a href="../resultsup.php" class="btn btn-primary">Back</a></div>';
}
else if(isset($good)){
    echo $good;
    echo '<div align="center" ><a href="../resultsup" class="btn btn-primary">Back</a></div>';
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>