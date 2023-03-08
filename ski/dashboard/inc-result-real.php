<!-- THIS FILE GETS RESULTS OF STUDENTS OF A SPECIFIC SCHOOL -->
<form method="POST" action="php/insert_result.php">

<a href="<?php  echo $sch_name = trim($_POST['school']);  ?>">View Results</a>

						<?php 
						
						$count =1;
                        
				 $class = trim($_POST['class']);
                           
                             require_once('../db.php');
                             $sel = $db->query("SELECT * FROM students  WHERE school_name ='$sch_name' AND s_class='$class' limit 1"); //
                             if($sel->num_rows<1)
                             {
                              
                             }
                             else
                             {   
                                while($row1 = $sel->fetch_assoc()){
                           
                                   ?>
                                         
                                    <div class="table-responsive">
    
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
                 <tbody>
            <tr>
                <td><?php echo $count++; ?></td><input type="hidden" class="form-control" required name="name[]" value="<?php echo $row1['s_name'];  ?>">
            <input type="hidden" class="form-control" required name="reg[]" value="<?php echo $row1['student_id'];  ?>">
             <input type="hidden" class="form-control" required name="sch[]" value="<?php echo $row1['school_name'];  ?>">
             <input type="hidden" class="form-control" required name="class[]" value="<?php echo $row1['s_class'];  ?>">
              <input type="hidden" class="form-control" required name="uid[]" value="<?php echo $row1['uid'];  ?>">
           
                <td><?php echo $row1['s_name'];  ?>
                    </td>
                 <td><?php echo $row1['student_id'];  ?>
                     </td>
                <td><?php echo $row1['s_class'];  ?></td> 
                
                <td> 
                <select class="form-control" name="nxtclass[]" required>
																				<option>Select Class</option>
																				<option value="primary 1">Primary 1</option>
																				<option value="primary 2">Primary 2</option>
																				<option value="primary 3">Primary 3</option>
																				<option value="primary 4">Primary 4</option>
																				<option value="primary 5">Primary 5</option>
																				<option value="primary 6">Primary 6</option>
																			</select>
               </td>
                 <td><input type="text" class="form-control" required name="total[]"></td>
                <td><input type="text" class="form-control" required name="passfail[]"></td>
                  <td><input type="text" class="form-control" required name="eng[]"></td>
                   <td><input type="text" class="form-control" required name="mat[]"></td>
                </tr>
                </tbody>
                 
                 
                 
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
               
              
               
                <td><input type="text" class="form-control" required name="bsc[]"></td>
                <td><input type="text" class="form-control" required name="igb[]"></td>
                <td><input type="text" class="form-control" required name="nvl[]"></td>
                <td><input type="text" class="form-control" required name="pvs[]"></td>
                <td><input type="text" class="form-control" required name="his[]"></td>
                <td><input type="text" class="form-control" required name="com[]"></td>
                <td><input type="text" class="form-control" required name="fre[]"></td>
                <td><input type="text" class="form-control" required name="mor[]"></td>
               
                
            </tr>
           
        </tbody>
    </table>
</div>     
             
                                         
                                  <?php   
                                 }
                             
                                }
                            
                                 
                                 
                                 
                                 
                      ?>            <input type="submit" class="btn btn-primary" name="insert" value="ADD RESULTS"/>
                      </form>
                        	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />         
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                                 
                        