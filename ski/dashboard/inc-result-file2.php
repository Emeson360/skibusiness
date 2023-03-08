<!-- THIS FILE GETS RESULTS OF STUDENTS OF A SPECIFIC SCHOOL -->


						<?php 

						 session_start();

						

                        $sch_name = $_SESSION['name'];

                           

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
 $count = 1;
            // Parse data from CSV file line by line
             // Parse data from CSV file line by line
            while (($getData = fgetcsv($csvFile, 10000, ",")) !== FALSE)
            { ?>
            <div class="table-responsive">
            	<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle" id="example4">
            
             <tbody>
    <tr>
      <th scope="col" >&nbsp;s/n</th>
      <th scope="col">&nbsp;exam no</th>
      <th scope="col" rowspan="2">&nbsp;student name</th>
      <!--subjects-->
      <th scope="col" colspan="4">&nbsp; <?php  echo $getData[2]; ?></th>
    <th scope="col" colspan="4">&nbsp; <?php  echo $getData[7]; ?></th>
    <th scope="col" colspan="4">&nbsp; <?php  echo $getData[12]; ?></th>
    <th scope="col" colspan="4">&nbsp; <?php  echo $getData[17]; ?></th>
    <th scope="col" colspan="4">&nbsp; <?php  echo $getData[22]; ?></th>
    <th scope="col" colspan="4">&nbsp; <?php  echo $getData[27]; ?></th>
    <th scope="col" colspan="4">&nbsp; <?php  echo $getData[32]; ?></th>
    <th scope="col" colspan="4">&nbsp; <?php  echo $getData[37]; ?></th>
    <th scope="col" colspan="4">&nbsp; <?php  echo $getData[42]; ?></th>
    <th scope="col" colspan="4">&nbsp; <?php  echo $getData[47]; ?></th>
     <!--<th scope="col" colspan="4">&nbsp; <?php  //echo $getData[52]; ?></th>-->
     <th scope="col" colspan="4">&nbsp;GRAND TOTAL</th>
     
    <!--/subjects-->
      <!--<th scope="col">&nbsp;<th scope="col" colspan="4">&nbsp; <?php  //echo $getData[15]; ?></th></th>-->
     <!-- <th scope="col">&nbsp; </th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
      <th scope="col">&nbsp;</th>
-->
    </tr>
    <tr>
      <th scope="row">&nbsp;<?php echo $count++; ?></th>
      <td >&nbsp;</td>
        
<!--labels-->
      <td>&nbsp;1st C.A</td>
      <td>&nbsp;2nd C.A</td>
      <td>&nbsp;Exam</td>
      <td>&nbsp;Total</td>
      
   <td>&nbsp;1st C.A</td>
      <td>&nbsp;2nd C.A</td>
      <td>&nbsp;Exam</td>
      <td>&nbsp;Total</td>
      
    <td>&nbsp;1st C.A</td>
      <td>&nbsp;2nd C.A</td>
      <td>&nbsp;Exam</td>
      <td>&nbsp;Total</td>
      
   <td>&nbsp;1st C.A</td>
      <td>&nbsp;2nd C.A</td>
      <td>&nbsp;Exam</td>
      <td>&nbsp;Total</td>
      
      <td>&nbsp;1st C.A</td>
      <td>&nbsp;2nd C.A</td>
      <td>&nbsp;Exam</td>
      <td>&nbsp;Total</td>
      
   <td>&nbsp;1st C.A</td>
      <td>&nbsp;2nd C.A</td>
      <td>&nbsp;Exam</td>
      <td>&nbsp;Total</td>
      
      <td>&nbsp;1st C.A</td>
      <td>&nbsp;2nd C.A</td>
      <td>&nbsp;Exam</td>
      <td>&nbsp;Total</td>
      
   <td>&nbsp;1st C.A</td>
      <td>&nbsp;2nd C.A</td>
      <td>&nbsp;Exam</td>
      <td>&nbsp;Total</td>
      
      <td>&nbsp;1st C.A</td>
      <td>&nbsp;2nd C.A</td>
      <td>&nbsp;Exam</td>
      <td>&nbsp;Total</td>
      
   <td>&nbsp;1st C.A</td>
      <td>&nbsp;2nd C.A</td>
      <td>&nbsp;Exam</td>
      <td>&nbsp;Total</td>
      
      
      
      <!--/labels-->
    </tr>
    <tr>

  <!--data-->
      <th scope="row">&nbsp;</th>
      <td><?php  echo $getData[0]; ?></td>
        <td><?php  echo $getData[1]; ?></td>
        
        <td><?php  echo $getData[3]; ?></td>
        <td><?php  echo $getData[4]; ?></td>
        <td><?php  echo $getData[5]; ?></td>
        <td><?php  echo $getData[6]; ?></td>
 
 <!--/data-->
  <!--data-->
     
      <td><?php  echo $getData[8]; ?></td>
        <td><?php  echo $getData[9]; ?></td>
        <td><?php  echo $getData[10]; ?></td>
        <td><?php  echo $getData[11]; ?></td>
        
 
 <!--/data-->
  <!--data-->
      
      <td><?php  echo $getData[13]; ?></td>
        <td><?php  echo $getData[14]; ?></td>
        <td><?php  echo $getData[15]; ?></td>
        <td><?php  echo $getData[16]; ?></td>
        
 
 <!--/data-->
  <!--data-->
     
      <td><?php  echo $getData[18]; ?></td>
        <td><?php  echo $getData[19]; ?></td>
        <td><?php  echo $getData[20]; ?></td>
        <td><?php  echo $getData[21]; ?></td>
        
 
 <!--/data-->
  <!--data-->
      
      <td><?php  echo $getData[23]; ?></td>
        <td><?php  echo $getData[24]; ?></td>
        <td><?php  echo $getData[25]; ?></td>
        <td><?php  echo $getData[26]; ?></td>
        
 
 <!--/data-->
  <!--data-->
     
      <td><?php  echo $getData[28]; ?></td>
        <td><?php  echo $getData[29]; ?></td>
        <td><?php  echo $getData[30]; ?></td>
        <td><?php  echo $getData[31]; ?></td>
        
 
 <!--/data-->
  <!--data-->
    
      <td><?php  echo $getData[33]; ?></td>
        <td><?php  echo $getData[34]; ?></td>
        <td><?php  echo $getData[35]; ?></td>
        <td><?php  echo $getData[36]; ?></td>
        
 
 <!--/data-->
  <!--data-->
      
      <td><?php  echo $getData[38]; ?></td>
        <td><?php  echo $getData[39]; ?></td>
        <td><?php  echo $getData[40]; ?></td>
        <td><?php  echo $getData[41]; ?></td>
        
 
 <!--/data-->

   <!--data-->
     
      <td><?php  echo $getData[43]; ?></td>
        <td><?php  echo $getData[44]; ?></td>
        <td><?php  echo $getData[45]; ?></td>
        <td><?php  echo $getData[46]; ?></td>
        
 
 <!--/data-->
 
  <!--data-->
     
      <td><?php  echo $getData[48]; ?></td>
        <td><?php  echo $getData[49]; ?></td>
        <td><?php  echo $getData[50]; ?></td>
        <td><?php  echo $getData[51]; ?></td>
        
        <td><?php  echo $getData[52]; ?></td>
 
 <!--/data-->
    </tr>
  </tbody>
            
     
            </table>
            </div>
           
             <?php   
            
            }
 
            // Close opened CSV file
            fclose($csvFile);
 
            //header("Location: index.php");
         
    
}         
                        
                        
                        
                        
                        
                        
                        
                        



                           }



?> 

					

					