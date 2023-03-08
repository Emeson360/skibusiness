<?php  
session_start();
$sch_name = $_SESSION['name'];
 require_once('../db.php');
 $sel = $db->query("SELECT * FROM students WHERE school_name ='$sch_name'");
 if($sel->num_rows<1)
 {
    echo "No Student Found";
 }
 else
 { 
    while($row = $sel->fetch_assoc()){?>
    <tr>
<td class="left"><?php echo $row['s_name']; ?></td>
<td class="center"><?php echo $row['student_id']; ?></td>
<td class="center"><?php echo $row['s_class']; ?></td>
<td class="center"><?php echo $row['s_gender']; ?></td>
<td class="center"><?php echo $row['s_addmission_date']; ?></td>
<td class="center"><?php echo $row['s_dob']; ?></td>
<td> 
<a href="edit_student.php?uid=<?php echo $row['uid'];  ?>" class="tblEditBtn">
					<i class="fa fa-pencil"></i>
					</a>
						<a href="del-confirm2.php?uid=<?php echo $row['uid'];  ?>&&who=students" class="tblDelBtn">
						<i class="fa fa-trash-o"></i>
						</a>  </td> </tr>
 <?php  
}
 }  ?>
 