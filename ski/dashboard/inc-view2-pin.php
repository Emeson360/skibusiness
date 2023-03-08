<?php  
session_start();
$sch_name = $_SESSION['name'];
if(empty($_GET['uid'])){}
else{
    $pin  = $_GET['uid'];

 require_once('../db.php');
  $sel0 = $db->query("SELECT * FROM new_student_lock WHERE  pin='$pin'");
  if($sel0->num_rows<1){
      
  }
  else{
      
      $id = $sel0->fetch_assoc();
      $stident_id = $id['student_id'];
  
 $sel = $db->query("SELECT * FROM students WHERE student_id='$stident_id'");
 if($sel->num_rows<1)
 {
    echo ' <tr><td class="center">No Student Found with the pin <span class="badge badge-danger">'.$uid.'</span></td></tr>';
 }
 else
 { 
    while($row = $sel->fetch_assoc()){?>
    <tr>
<!--<td class="left"><?php //echo $row['uid']; ?></td>-->
<td class="center"><?php echo strtoupper($row['school_name']); ?></td>
<td class="center"><?php echo $row['student_id']; ?></td>
<td class="center"><?php echo $row['s_name']; ?></td>
<td class="center"><?php echo $row['s_dob']; ?></td>
<td class="center"><?php echo $row['s_gender']; ?></td>
<td class="center"><?php echo $row['s_class']; ?></td>
<td class="center"><?php echo $row['s_addmission_date']; ?></td>
<td class="center"><?php echo $row['created_at']; ?></td>

<td> 
<a href="viewpin2.php?uid=<?php echo $row['uid'];  ?>" class="tblEditBtn">
					<i class="fa fa-pencil"></i>
					</a>
					 </td> </tr>
 <?php  
}
 } } } ?>
 