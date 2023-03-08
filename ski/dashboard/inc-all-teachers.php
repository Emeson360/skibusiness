<?php  

 require_once('../db.php');
 $sel = $db->query("SELECT * FROM teachers WHERE school_name ='$sch_name'");
 if($sel->num_rows<1)
 {
    echo "No Record Found";
 }
 else
 { 
    while($row = $sel->fetch_assoc()){?>
 <tr class="odd gradeX">
 <td class="patient-img"><img src="assets/img/user/user1.jpg" alt=""><br>
<?php echo $row['fname'].' '.$row['lname']; ?></td>
<td class="center"><?php echo $row['designation']; ?></td>
<td class="center"><?php echo $row['phone']; ?></td>
<td class="center"><?php echo $row['address']; ?></td>
<td class="center"><?php echo $row['joing_date']; ?></td>
<td class="center"><a href="teacher-profile.php?uid=<?php echo $row['uid'];  ?>&&sch=<?php echo $sch_name;  ?>" >
						<i class="fa fa-user-o"></i>
						</a></td>
<td>

<a href="edit_teacher.php?uid=<?php echo $row['uid'];  ?>" class="tblEditBtn">
					<i class="fa fa-pencil"></i>
					</a>
						<a href="del-confirm.php?uid=<?php echo $row['uid'];  ?>&&who=teacher" class="tblDelBtn">
						<i class="fa fa-trash-o"></i>
						</a>
               
               </td> </tr>
 <?php  
}
 }  ?>


																	
																	