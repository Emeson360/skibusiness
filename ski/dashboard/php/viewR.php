<!-- THIS FILE GETS RESULTS OF STUDENTS OF A SPECIFIC SCHOOL -->
<form method="POST" action="">
<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
<?php 


if(isset($_GET['uid_del']))
{
	$id= $_GET['uid_del'];
require_once('../db.php');
       $sel = $db->query("DELETE FROM  student_results WHERE uid='$id'");
       
       if($sel)
       {
       	echo "<b class='alert alert-success'>Deleted</b>";
       	 echo '<div align="center" ><a href="resultsup.php" class="btn btn-primary">Back</a></div>';
       }
       else{
       	echo "<b class='alert alert-danger'>Error Deleting</b>";
       	 echo '<div align="center" ><a href="resultsup.php" class="btn btn-primary">Back</a></div>';
       }

} else{



						
						
                   $sch_name = trim($_POST['school']);
						$class = trim($_POST['class']);
                           
                             require_once('../db.php');
                             $sel = $db->query("SELECT * FROM student_results WHERE school_name ='$sch_name' AND s_class='$class' ");
                             if($sel->num_rows<1)
                             {
                                echo "No Record Found";
                             }
                             else
                             {   $count = 1;
    while ($row = $sel->fetch_assoc()) {?>
    	<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                         
					 <thead>
            <tr><th>S/N</th>
                <th>Student Name</th>
                <th>Student Id</th>
                <th>Current Class</th>
                 <th>Next Class</th>
                <th>Total</th>
                <th>Pass || Fail</th>
                <th>ENG </th>
                 <th>MAT</th>
                </tr>
                 </thead>
																<tbody><tr>	
						 <td><?php echo $count++; ?></td>
																	<td> <?php  echo $row['s_name']; ?>
																	  </td>
																	<td> <?php  echo $row['student_id']; ?>
																	 </td>
																	<td> <?php  echo $row['s_class']; ?>
																	 </td>
																	<td> <?php  echo $row['s_next_class']; ?> 
																	</td>
																	<td> <?php  echo $row['s_total']; ?> 
																	 </td>
																	 <td> <?php  echo $row['s_pass_fail']; ?> 
																	 </td>
																	 <td> <?php  echo $row['s_eng']; ?> 
																	 </td>
																	 <td> <?php  echo $row['s_mat']; ?> 
																	 </td>
																	</tr></tbody>


														<!--<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">-->
															<thead>
                <tr>
               
                
               
                <th>BSC</th>
                <th>IGB</th>
                <th>REL|NAT</th>
                <th>PRE|VOCAT</th>
                <th>HIS|GEO</th>
                <th>COM</th>
                <th>FRE</th>
                <th>MOR|REL</th>
                
            </tr>
        </thead>
															<tbody>
																<tr>
																	<td> <?php  echo $row['s_bsc']; ?>  </td>
																	<td> <?php  echo $row['s_igb']; ?>  </td>
																
																	<td> <?php  echo $row['s_nvl']; ?>  </td>
																	<td> <?php  echo $row['s_pvs']; ?>  </td>
																	<td><?php  echo $row['s_his']; ?>  </td>
																	<td> <?php  echo $row['s_com']; ?> </td>
<td> <?php  echo $row['s_fre']; ?>  </td>
																	<td> <?php  echo $row['s_mor']; ?>  </td>
						   <td>
						  
					<a href="?uid=<?php  echo $row['uid']; ?>" class="tblEditBtn">
					<i class="fa fa-pencil"></i>
					</a>
					<a href="?uid_del=<?php  echo $row['uid']; ?>" class="tblEditBtn">
					<i class="fa fa-trash"></i>
					</a>
						

						</td>
	   <td>
						  
					
						
						</td>
                            <?php  }
}

}
?>
 
					
						</tbody>
						</table>
						<hr>
						 
</form>