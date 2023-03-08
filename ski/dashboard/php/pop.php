<?php

if(isset($_POST['btnUpload'])){
session_start();
require_once("../../db.php");

  $sch_name = $_SESSION['name'];
  $pin = trim($_POST['pin']);
    
    //   $chk = $db->query("SELECT * FROM result_temp WHERE school_name ='$sch_name'");
    //   if($chk->num_rows>0)
    //   {
    //       echo " Already Added";
    //   }
    //   else{
           
           
           $file_name = $_FILES['image']['name'];
       
      $errors= array();
      $file_name = $_FILES['image']['name'];
      $file_size = $_FILES['image']['size'];
      $file_tmp = $_FILES['image']['tmp_name'];
      $file_type = $_FILES['image']['type'];
      $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
      
      $extensions= array("jpg","jpeg","png");
      
      if(in_array($file_ext,$extensions)=== false){
         $errors[]="extension not allowed, please choose a JPEG, JPG and PNG FILES ONLY.";
      }
      
    //   if($file_size > 2097152) {
    //      $errors[]='File size must be excately 2 MB';
    //   }
      
      if(empty($errors)==true) {
          $fi = $file_name;
         move_uploaded_file($file_tmp,"../pop/".$fi);
         $date_created = date('Y-m-d H:i');
        //   $c = $db->query("SELECT * FROM pin_pop_adv WHERE pin='$pin' AND school_name='$sch_name'");
        //   if($c->num_rows>0)
        //   {
              
        //   }
         $chk = $db->query("UPDATE pin_count_adv SET pop='$fi' WHERE pin='$pin' AND school_name='$sch_name'");
         if($chk)
         {
         $good = "Successful";
         }
         else{
              $error = "Unsuccessful";
         }
      }else{
         print_r($errors);
      }
           
      // }
       
       
       
     if(isset($error))
{
    echo $error;
    echo '<div align="center" ><a href="../pop.php?uid='.$pin.'" class="btn btn-danger">Back</a></div>';
}
else if(isset($good)){
    echo $good;
    echo '<div align="center" ><a href="../pop.php?uid='.$pin.'" class="btn btn-primary">Back</a></div>';
}
  
       
       
   
     
   }
?>