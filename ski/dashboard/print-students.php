<?php  
session_start();
$sch_name = $_SESSION['name'];
//$class = $_POST['class'];
 require_once('../db.php');
 
 ?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from adminlte.io/themes/v3/pages/tables/data.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2023 05:37:43 GMT -->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>AdminLTE 3 | DataTables</title>

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&amp;display=fallback">

<link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">

<link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
<link rel="stylesheet" href="plugins/datatables-buttons/css/buttons.bootstrap4.min.css">

<link rel="stylesheet" href="dist/css/adminlte.min2167.css?v=3.2.0">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">

<div class="content-wrapper">

<section class="content-header">
<div class="container-fluid">
<div class="row mb-2">
<div class="col-sm-6">
<h1>DataTables</h1>
</div>
<div class="col-sm-6">
<ol class="breadcrumb float-sm-right">
<li class="breadcrumb-item"><a href="#">Home</a></li>
<li class="breadcrumb-item active">DataTables</li>
</ol>
</div>
</div>
</div>
</section>

<section class="content">
<div class="container-fluid">
<div class="row">
<div class="col-12">


<div class="card">
<div class="card-header">
<h3 class="card-title">DataTable with default features</h3>
<input type="text" class="form-control" name="myInput" id="myInput" placeholder="Search..">
</div>

<div class="card-body">
<table id="" class="table table-bordered table-striped">
<thead>
<tr>
 <th>Full Name </th>
																	<th> Reg No</th>
																	<th> Class </th>
																	<th> Gender </th>
																	<th>Admission Date</th>
																	<th>Date ofBirth</th>
</tr>
</thead>
<tbody id="res" class="myTable">
 <?php //require_once("php/inc-all-students_filter.php"); ?>

 

</tbody>
<tfoot>
<tr>
 <th>Full Name </th>
																	<th> Reg No</th>
																	<th> Class </th>
																	<th> Gender </th>
																	<th>Admission Date</th>
																	<th>Date ofBirth</th>
</tr>
</tfoot>
</table>
</div>

</div>

</div>

</div>

</div>

</section>

</div>

<footer class="main-footer">
<div class="float-right d-none d-sm-block">
<b>Version</b> 3.2.0
</div>
<!--<strong>Copyright &copy; 2014-2021 <a href="">AdminLTE.io</a>.</strong> All rights reserved.-->
</footer>

<aside class="control-sidebar control-sidebar-dark">

</aside>

</div>


<script src="plugins/jquery/jquery.min.js"></script>

<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<script src="plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
<script src="plugins/jszip/jszip.min.js"></script>
<script src="plugins/pdfmake/pdfmake.min.js"></script>
<script src="plugins/pdfmake/vfs_fonts.js"></script>
<script src="plugins/datatables-buttons/js/buttons.html5.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.print.min.js"></script>
<script src="plugins/datatables-buttons/js/buttons.colVis.min.js"></script>

<!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>-->

<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
       "searching": true,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
    
     $.get( "php/test.php", function( data ) {
     $( "#res" ).html( data );
   });
   $(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
   
   
  });
  
 
</script>
</body>

<!-- Mirrored from adminlte.io/themes/v3/pages/tables/data.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 06 Jan 2023 05:38:24 GMT -->
</html>
