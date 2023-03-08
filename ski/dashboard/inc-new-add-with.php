<?php
if(!isset($_GET['uid']))
{}
else
$pi = $_GET['uid'];
function sch_name()
{
session_start();
$sch_name = $_SESSION['name'];
return $sch_name ;
}
?>
<title>Add or Remove Input Fields Dynamically</title>
    <link rel="stylesheet" href="assets/cu0.css">
<link rel="stylesheet" href="assets/cu2.css">
<script src="assets/cu1.js"></script>
	
		
			<div class="">
				<div class="col-lg-12">
                <form action="php/new_insert_stu_with_pin.php" method="POST" >
					<div id="newinput"></div> <br/>
					<input class="form-control" type="text" name="pin2" value="<?php echo $pi; ?>" >
                    <input id="upload" type="submit" class="btn btn-success" value="Upload" name="addstudentwith" />
													
                </form>
				
					
                   
				</div>
			</div>
		
	

	<script type="text/javascript">
			function randomString(len) {
    var p = "0123456789";
    return [...Array(len)].reduce(a=>a+p[~~(Math.random()*p.length)],'');
}

		var count=0;
	
		$("#rowAdder").click(function () {

			count++;
			 var len = randomString(9);
		
			$("#upload").show();
			newRowAdd =
            '<div id="inputFormRow" class="table-responsive">'+
'<table class="table table-striped table-bordered table-hover table-checkable order-column valign-middle'+
				'id="example4">'+
				'<thead>'+
				'<th> Roll No </th>'+
				'<th> Pin </th>'+
				'<th> Reg No </th>'+
				'<th> Name </th>'+
				'<th> Date of Birth </th>'+
				'<th> Gender </th>'+
				'<th>  Select Class </th>'+
				'<th>Admission Date</th>'+
				'</tr>'+
				'</thead>'+

// readonly

			' <tbody>'+
				'<td class="left">'+count+'</td>'+
				'<td><input class="form-control" type="text" name="pin[]" value="<?php echo $pi; ?>" ></td>'+
					'<input type="hidden" name="sch_name[]" value="<?php echo sch_name();  ?>" class="form-control">'+
				'<td><input class="form-control" type="text" name="reg[]" value="DE'+ len +'" readonly></td>'+
		            '<td><input class="form-control" type="text" name="name[]"></td>'+
					'<td><input type="date" name="dob[]" class="form-control"></td>'+
						'<td>'+
                           '<select name="gender[]" class="form-control"> '+
				'<option value="Male">Male</option><option value="Male">Female</option>'+	
								'</select>'+
						'</td>'+
                              '<td>'+
                                '<select name="class[]" class="form-control"> '+
								    '<option value="primary 1">Primary 1</option>'+
								    '<option value="primary 2">Primary 2</option>'+
                                    '<option value="primary 3">Primary 3</option>'+
								'<option value="primary 4">Primary 4</option>'+	
                                '<option value="primary 5">Primary 5</option>'+
								'<option value="primary 6">Primary 6</option>'+	
								'</select>'+
								'</td>'+
                            '<td><input type="date" name="adminission[]" class="form-control"></td>'+
                            '<td><button id="removeRow" type="button" class="btn btn-danger">Remove</button>'+
                            '</tbody></table></div>';

			$('#newinput').append(newRowAdd);
		});

        //remove
        $("body").on('click', '#removeRow', function () {
            count--;
            $(this).closest('#inputFormRow').remove();
           
        });
		// $("body").on("click", "#DeleteRow", function () {
		// 	$(this).parents("#row").remove();
		// });
	</script>
