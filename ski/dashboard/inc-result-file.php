<!-- THIS FILE GETS RESULTS OF STUDENTS OF A SPECIFIC SCHOOL -->


						<?php 

						 session_start();

						

                       echo  $sch_name = $_SESSION['name'];

                           

                             require_once('../db.php');

                             $sel = $db->query("SELECT * FROM student_results_file WHERE school_name ='$sch_name'");

                             if($sel->num_rows<1)

                             {

                                echo 	"<td>No Record Found</td>";

                             }

                             else

                             {   $count = 1;

    while ($row = $sel->fetch_assoc()) {

                        $path = "https://examportal.org.ng/primary/master/php/uploads/".$row['file'];
                        
                        
             // Allowed mime types
    $fileMimes = array(
        'text/x-comma-separated-values',
        'text/comma-separated-values',
        'application/octet-stream',
        'application/vnd.ms-excel',
        'application/x-csv',
        'text/x-csv',
        'text/csv',
        'application/csv',
        'application/excel',
        'application/vnd.msexcel',
        'text/plain'
    );
                        
               
    // Validate whether selected file is a CSV file
    
 
            // Open uploaded CSV file with read-only mode
            $csvFile = fopen($path, 'r');
 
            // Skip the first line
            fgetcsv($csvFile);
 
            // Parse data from CSV file line by line
             // Parse data from CSV file line by line
            while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE)
            { ?>
            <div class="table-responsive">
            	<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
                         
					 <thead>
            <tr>
                <th>S/N</th>
                <th>Student Name</th>
                <th>Student Id</th>
                <th>Current Class</th>
                <th>Next Class</th>
                <th>Subject</th>
                <th>1st C.A</th>
                <th>2nd C.A</th>
                <th>Exam</th>
                <th>Total C.A,Exam</th>
                <th>Grand Total</th>
                <th>Pass || Fail</th>
               
                </tr>
                 </thead>
                 <tbody><tr>
                     <td></td>
                     <td><?php  echo $getData[0]; ?></td>
                     <td><?php  echo $getData[1]; ?></td>
                      <td><?php  echo $getData[2]; ?></td>
                     <td><?php  echo $getData[3]; ?></td>
                      <td><?php  echo $getData[4]; ?></td>
                     <td><?php  echo $getData[5]; ?></td>
                      <td><?php  echo $getData[6]; ?></td>
                     <td><?php  echo $getData[7]; ?></td>
                      <td><?php  echo $getData[8]; ?></td>
                     <td><?php  echo $getData[9]; ?></td>
                      <td><?php  echo $getData[10]; ?></td>
                     <td><?php  echo $getData[11]; ?></td>
                      
                 </tr></tbody>
            </table>
            </div>
           
             <?php   // Get row data
            //   echo $name = $getData[0].'<br/>';
            //   echo  $email = $getData[1].'<br/>';
            //  echo   $phone = $getData[2].'<br/>';
            //  echo   $status = $getData[3].'<br/>';
            //   echo  $phone = $getData[2].'<br/>';
            //   echo  $status = $getData[3].'<br/>';
 
                // If user already exists in the database with the same email
               // $query = "SELECT id FROM users WHERE email = '" . $getData[1] . "'";
 
               // $check = mysqli_query($conn, $query);
 
                // if ($check->num_rows > 0)
                // {
                //     mysqli_query($conn, "UPDATE users SET name = '" . $name . "', phone = '" . $phone . "', status = '" . $status . "', created_at = NOW() WHERE email = '" . $email . "'");
                // }
                // else
                // {
                //      mysqli_query($conn, "INSERT INTO users (name, email, phone, created_at, updated_at, status) VALUES ('" . $name . "', '" . $email . "', '" . $phone . "', NOW(), NOW(), '" . $status . "')");
 
                // }
            }
 
            // Close opened CSV file
            fclose($csvFile);
 
            //header("Location: index.php");
         
    
}         
                        
                        
                        
                        
                        
                        
                        
                        



                           }



?> 

					

					