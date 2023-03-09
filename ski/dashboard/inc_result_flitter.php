<!-- THIS FILE GETS flittered RESULTS OF STUDENTS OF A SPECIFIC SCHOOL -->
<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
		<thead>
            <tr>
            <tr>
																	
																	<th>S/N</th>
																	<th> Student </th>
																	<th> Reg Number </th>
																	<th>Exam Class </th>
																	<th>  Next Class</th>
																	<th>Status</th>
																	<th>ENG</th>
																	<th>MAT</th>
																	<th>IGB</th>
																	<th>BSC</th>
																	<th>PVS</th>
																	<th>CRS</th>
																	<th>NVL</th>
																	<th>CCA</th>
																	<th>Actions</th>
																</tr>
				
						</thead>
						<tbody>
                        <?php 
						 session_start();
						 
						
                           $sch_name = $_SESSION['name'];
                            $class = trim($_POST['class']);
                             require_once('../db.php');
                             $sel = $db->query("SELECT * FROM student_results WHERE school_name ='$sch_name' AND s_class='$class'");
                             if($sel->num_rows<1)
                             {
                                echo "No Record Found";
                             }
                             else
                             {
                                $count = 1;
    while ($row = $sel->fetch_assoc()) {?>
    <tr>
        <td><?php echo $count++; ?></td>
                           <td> <?php  echo $row['s_name']; ?> </td>
																	<td> <?php  echo $row['student_id']; ?> </td>
																	<td> <?php  echo $row['s_class']; ?> </td>
																	<td> <?php  echo $row['s_next_class']; ?> </td>
																	<td> <?php  echo $row['s_status']; ?> </td>
																	<td> <?php  echo $row['s_eng']; ?> </td>
																	<td> <?php  echo $row['s_mat']; ?> </td>
																	<td> <?php  echo $row['s_igb']; ?> </td>
																	<td> <?php  echo $row['s_bsc']; ?> </td>
																	<td> <?php  echo $row['s_pvs']; ?> </td>
																	<td> <?php  echo $row['s_crs']; ?> </td>
																	<td> <?php  echo $row['s_nvl']; ?> </td>
																	<td> <?php  echo $row['s_cca']; ?> </td>
                           <td>
					<a href="edit_staff.php" class="tblEditBtn">
					<i class="fa fa-pencil"></i>
					</a>
						<a class="tblDelBtn">
						<i class="fa fa-trash-o"></i>
						</a>
						</td>
    </tr>
                            <?php  }
}
?> 
						
						</tbody>
						</table>