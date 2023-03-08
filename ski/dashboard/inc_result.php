<!-- THIS FILE GETS RESULTS OF STUDENTS OF A SPECIFIC SCHOOL -->


						<?php 

						 session_start();

						

                         $sch_name = $_SESSION['name'];

                           

                             require_once('../db.php');

                             $sel = $db->query("SELECT * FROM student_results WHERE school_name ='$sch_name'");

                             if($sel->num_rows<1)

                             {

                                echo 	"<td>No Record Found</td>";

                             }

                             else

                             {   $count = 1;

    while ($row = $sel->fetch_assoc()) {?>

                         <tr>


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

																	<td> <?php  echo $row['s_bsc']; ?>  </td>
																	<td> <?php  echo $row['s_igb']; ?>  </td>
																
																	<td> <?php  echo $row['s_nvl']; ?>  </td>
																	<td> <?php  echo $row['s_pvs']; ?>  </td>
																	<td><?php  echo $row['s_his']; ?>  </td>
																	<td> <?php  echo $row['s_com']; ?> </td>
<td> <?php  echo $row['s_fre']; ?>  </td>
																	<td> <?php  echo $row['s_mor']; ?>  </td>



						   <td>

					<a href="" class="tblEditBtn">

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

					

					