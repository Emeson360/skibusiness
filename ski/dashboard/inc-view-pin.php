<?php  
session_start();
$sch_name = $_SESSION['name'];
 require_once('../db.php');
 $sel = $db->query("SELECT * FROM pin_count_adv WHERE school_name ='$sch_name'");
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
<!--<button class="badge badge-success" onclick="myFunction()"> copy</button>--></td>
<td class=""><span class="badge badge-success"><?php echo $row['pin_count']; ?></span></td>
<td class=""><span class="badge badge-success"><?php echo $row['pin_count_left']; ?></span></td>
<td class="" ><span class="badge badge-success" >N<?php echo $row['fees']; ?></span></td>
<td class=""><?php echo $row['created_at']; ?></td>
<td class="" ><?php echo strtoupper($row['approved']); ?></td>
<td > 
<a href="viewpin2.php?uid=<?php echo $row['pin'];  ?>" class="tblEditBtn">
					<i class="fa fa-eye">View Students</i>
					</a></td>
				<td > <?php if($row['approved'] == "no"){}else{     ?> 	<a href="new-admit.php?uid=<?php echo $row['pin'];  ?>" class="tblEditBtn">
					<i class="fa fa-plus">Add Students</i>
					</a> <?php  } ?>
					 </td> 
					 
					 	<td > 	<a href="pop.php?uid=<?php echo $row['pin'];  ?>" class="tblEditBtn">
					<i class="fa fa-upload">Upload Proof of Payment</i>
					</a>
					 </td> 
					 </tr>
 <?php  
}
 }  ?>
 