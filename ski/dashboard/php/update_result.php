<?php

function valid($data)
{

    $data = trim($data);
    $data = htmlspecialchars($data);
    $data = htmlentities($data);
    return  $data;


}

if(isset($_POST['upresult']))
{
    require_once('../db.php');
    
    

    if (valid($_POST["eng"] != '')
    ||
    valid($_POST["mat"]!= '') 
    || 
    valid($_POST["igb"] != '') 
    ||
    valid($_POST["bsc"] != '') 
    ||
    valid($_POST["pvs"] != '') 
    ||
    valid($_POST["crs"] != '') 
    ||
    valid($_POST["nvl"] != '') 
    ||
    valid($_POST["cca"] != '')
    ||
    valid($_POST["reg"] != '')
    ||
    valid($_POST["class"]!= '')
    ||
    valid($_POST["nxtclass"] != '')
    )
   {
           
        $eng = $_POST["eng"];
        $mat = $_POST["mat"];
        $bsc = $_POST["bsc"];
        $igb = $_POST["igb"];
        $nvl = $_POST["nvl"];
        $pvs = $_POST["pvs"];
        $his = $_POST["his"];
        $com = $_POST["com"];
        $fre = $_POST["fre"];
        $mor = $_POST["mor"];
        $total = $_POST["total"];
        $passfail = $_POST["passfail"];

        $uid = $_POST["uid"];
       $nxtclass = $_POST["nxtclass"];
        //$status = $_POST["status"];
        
    
        $updated_at = date('Y-m-d H:i');


        $sql = $db->query("UPDATE student_results SET s_eng='$eng',
            s_mat='$mat',s_bsc='$bsc',s_igb='$igb',
            s_nvl='$nvl',s_pvs='$pvs',s_his='$his',s_com='$com',s_fre='$fre',s_mor='$mor',s_total='$total',s_pass_fail='$passfail',s_next_class='$nxtclass',updated_at='$updated_at' WHERE uid='$uid' ");
        if($sql)
        {
            $good ="Updated Successfully";
          
        }
        else{
            $error = "Error Occured . ".$db->error;
            
        }
    }else{
    $error = "Some Empty Fields";
}
}

 



if(isset($error))
{
    echo $error;
    echo '<div align="center" ><a href="../dashboard/resultsup.php?uid='. $uid .'" class="btn btn-primary">Reload</a></div><br/>';
    echo '<div align="center" ><a href="../dashboard/resultsup.php" class="btn btn-primary">Refresh Page</a></div><br/>';
}
else if(isset($good)){
    echo $good;
    echo '<div align="center" ><a href="../dashboard/resultsup.php?uid='. $uid .'" class="btn btn-danger">Reload</a></div>';
     echo '<div align="center" ><a href="../dashboard/resultsup.php" class="btn btn-danger">Refresh Page</a></div><br/>';
}
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>