<?php  

if(!isset($_GET['uid']))
{
    
}
else{
session_start();
$sch_name = $_SESSION['name'];
$uid = trim($_GET['uid']);
 require_once('../db.php');
 $sel = $db->query("SELECT * FROM pin_count_adv WHERE school_name ='$sch_name' AND pin = '$uid'");
 if($sel->num_rows<1)
 {
    echo ' <tr>
<td class="">No Pin Found</td></tr>';
 }
 else
 { 
    while($row = $sel->fetch_assoc()){?>
    <tr>
<!--<td class=""><span class="badge badge-success"><?php //echo $row['uid']; ?></span></td>-->
<td class=""><span class="badge badge-danger"><?php echo strtoupper($row['pin_type']); ?></span></td>
<td class="" style="padding:0px;"><?php echo $row['pin']; ?>
<input type="hidden" value="<?php echo $row['pin']; ?>" name="myInput" id="myInput">
<td class="" ><span class="badge badge-success" >N<?php echo $row['fees']; ?></span></td>
<td > 
<a href="pop/<?php echo $row['pop'];  ?>" class="tblEditBtn">
					<i class="fa fa-eye"></i>
					</a></td>
			
					 
					 	<td > <form action="php/pop.php" method="POST" enctype="multipart/form-data">
					 	    <input type="file" name="image" id="image" class="form-control">
					 	    <input type="hidden" value="<?php echo $row['pin']; ?>" name="pin" >
					 	    <button type="submit" name="btnUpload"  class="btn btn-primary">Upload 
					 	        <i class="fa fa-upload"></i>
					 	    </button>
					 	</form>
					 	<?PHP if(isset($_SESSION['pop'])){echo $_SESSION['pop']; }else{} ?>
					 </td> 
					 </tr>
 <?php  
}
 } } 
 
 
 
 
 
 
 
 
 
 
 
 
 
 ?>
 