
<!-- THIS FILE GETS RESULTS OF STUDENTS OF A SPECIFIC SCHOOL -->
<form method="POST">
<div class="table-responsive">
<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
		<thead>
            <tr>
			
																	
																	<th>S/N</th>
																	<th> Student </th>
																	<th> Reg Number </th>
																	<th>Exam Class </th>
																	<th>  Next Class</th>
																    <th>Total</th>
                                                                    <th>Pass || Fail</th>	
                                                                    <th>ENG</th>
																	<th>MAT</th>
                                                                    </tr>
                                                                    </thead>
                                                                    <thead>
                                                                   
						<tbody>
						<?php 
						
					$uid = trim($_GET['uid']);
						 
                           
                             require_once('../db.php');
                             $sel = $db->query("SELECT * FROM student_results WHERE  uid='$uid' ");
                             if($sel->num_rows<1)
                             {
                                echo "No Record Found";
                             }
                             else
                             {   $count = 1;
    $row = $sel->fetch_assoc();?>
	<input type="hidden" name="uid" value="<?php  echo $row['uid']; ?> " required class="form-control">
                                                                   
                         <tr>
                            						 <td><?php echo $count++; ?></td>
																	<td> <?php  echo $row['s_name']; ?> </td>
																	<td> <?php  echo $row['student_id']; ?> </td>
																	<td> <?php  echo $row['s_class']; ?> </td>
																	<td> 
																	<select class="form-control" name="nxtclass" required>
																			
																				<option value="primary 1">Primary 1</option>
																				<option value="primary 2">Primary 2</option>
																				<option value="primary 3">Primary 3</option>
																				<option value="primary 4">Primary 4</option>
																				<option value="primary 5">Primary 5</option>
																				<option value="primary 6">Primary 6</option>
																			</select>
																		Selected: 	<?php  echo $row['s_next_class']; ?>
																	</td>
				<td><input type="text" class="form-control" required name="total" value="<?php  echo $row['s_total']; ?>"></td>
                <td><input type="text" class="form-control" required name="passfail" value="<?php  echo $row['s_pass_fail']; ?>"></td>
                <td> <input type="text" name="eng" value="<?php  echo $row['s_eng']; ?>" required class="form-control"> </td>
                <td> <input type="text" name="mat" value="<?php  echo $row['s_mat']; ?>" required class="form-control"> </td>

                                                                    </tr>
                        </tbody>
                        <!--</table>-->
                        <!--<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">-->
                            <thead>                      <tr>
																
																	 <th>BSC</th>
                <th>IGB</th>
                <th>REL|NAT</th>
                <th>PRE|VOCAT</th>
                <th>HIS|GEO</th>
                <th>COM</th>
                <th>FRE</th>
                <th>MOR|REL</th>
																	<th>Actions</th>
																	
																</tr>
				
						
						</thead>
                        <tbody>
                                                                    <tr>

																	
																	<td> <input type="text" name="bsc" value="<?php  echo $row['s_bsc']; ?>" required class="form-control"> </td>
																	<td> <input type="text" name="igb" value="<?php  echo $row['s_igb']; ?>" required class="form-control"> </td>
																	<td> <input type="text" name="nvl" value="<?php  echo $row['s_nvl']; ?>" required class="form-control"> </td>
																	<td> <input type="text" name="pvs" value="<?php  echo $row['s_pvs']; ?>" required class="form-control"> </td>
                                                                    <td> <input type="text" name="his" value="<?php  echo $row['s_his']; ?>" required class="form-control"> </td>
																	<td> <input type="text" name="com" value="<?php  echo $row['s_com']; ?>" required class="form-control"> </td>
																	<td> <input type="text" name="fre" value="<?php  echo $row['s_fre']; ?>" required class="form-control"> </td>
																	<td> <input type="text" name="mor" value="<?php  echo $row['s_mor']; ?>" required class="form-control"> </td>

						   <td>
                           <span class="input-group-btn">
																			<button type="submit" name="upresult" class="btn btn-warning btn-flat"><i class="fa fa-arrow-right"></i></button>
																		</span>
						</td>

                            <?php  }

?> 
					
						</tbody>
						</table>
</div>
</form>