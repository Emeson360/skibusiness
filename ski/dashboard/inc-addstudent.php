<?php
function sch_name()
{
session_start();
$sch_name = $_SESSION['name'];
return $sch_name ;
}
function id()
{
     $seed = str_split('abcdefghij'
            .'KLMNOPQRSTUVWXYZ'
            .'98765432'); // and any other characters
        shuffle($seed); // probably optional since array_is randomized; this may be redundant
        $tag = '';
        foreach (array_rand($seed, 21) as $k) $tag .= $seed[$k];
        return $tag;
}
?>
<title>Add or Remove Input Fields Dynamically</title>
    <link rel="stylesheet" href="assets/cu0.css">
<link rel="stylesheet" href="assets/cu2.css">
<script src="assets/cu1.js"></script>
	
		
			<div class="">
				<div class="col-lg-12">
                <form action="php/insert_student.php" method="POST" >
					<div id="newinput"></div> <br/>
                    <input id="upload" type="submit" class="btn btn-success" value="Upload" name="addstudent" />
													
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
				'<th> Reg No </th>'+
				'<th> Name </th>'+
				'<th> Date of Birth </th>'+
				'<th> Gender </th>'+
				'<th>  Select Class </th>'+
				'<th>Admission Date</th>'+
				'</tr>'+
				'</thead>'+



			' <tbody>'+
				'<td class="left">'+count+'</td>'+
				'<input type="hidden" name="sch_name[]" value="<?php echo sch_name();  ?>" class="form-control">'+
				'<td><input class="form-control" type="text" value="DE'+ len +'" name="reg[]"></td>'+
		            '<td><input class="form-control" type="text" name="name[]"></td>'+
					'<td><input type="date" name="dob[]" class="form-control"></td>'+
						
						'<td>'+
                           '<select name="gender[]" class="form-control"> '+
				'<option value="Male">Male</option><option value="Female">Female</option>'+	
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
