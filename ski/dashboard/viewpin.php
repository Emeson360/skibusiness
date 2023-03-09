<?php 
session_start();
if(!isset($_SESSION['name']))
{
    header("location:out.php");
}
else
$sch_name = $_SESSION['name'];
?>
<!DOCTYPE html>
<html lang="en">
<!-- BEGIN HEAD -->


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/light/add_student.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Aug 2022 04:54:38 GMT -->
<head>
	<meta charset="utf-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta content="width=device-width, initial-scale=1" name="viewport" />
	<meta name="description" content="Responsive Admin Template" />
	<meta name="author" content="SmartUniversity" />
	<title>All Student | Catholic Education Services, Catholic Diocese of Enugu, Enugu State, Nigeria</title>
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet" type="text/css" />
	<!-- icons -->
	<link href="fonts/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="fonts/font-awesome/v6/css/all.css" rel="stylesheet" type="text/css" />
	<link href="fonts/material-design-icons/material-icon.css" rel="stylesheet" type="text/css" />
	<!--bootstrap -->
	<link href="assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
	<!-- Material Design Lite CSS -->
	<link rel="stylesheet" href="assets/plugins/material/material.min.css">
	<link rel="stylesheet" href="assets/css/material_style.css">
	<!-- Theme Styles -->
	<link href="assets/css/theme/light/theme_style.css" rel="stylesheet" id="rt_style_components" type="text/css" />
	<link href="assets/css/theme/light/style.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/plugins.min.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />
	<link href="assets/css/theme/light/theme-color.css" rel="stylesheet" type="text/css" />
	<!-- dropzone -->
	<link href="assets/plugins/dropzone/dropzone.css" rel="stylesheet" media="screen">
	<!-- Date Time item CSS -->
	<link rel="stylesheet" href="assets/plugins/flatpicker/css/flatpickr.min.css" />
	<!-- favicon -->
	<link rel="shortcut icon" href="https://www.einfosoft.com/templates/admin/smart/source/assets/img/favicon.ico" />
	<script>
	    
// function myFunction() {
//   // Get the text field
//   var copyText = document.getElementById("myInput");

//   // Select the text field
//   copyText.select();
//   copyText.setSelectionRange(0, 99999); // For mobile devices

//   // Copy the text inside the text field
//   navigator.clipboard.writeText(copyText.value);
  
//   // Alert the copied text
//   alert("Copied the text: " + copyText.value);
// }

	</script>
</head>
<!-- END HEAD -->

<body
	class="page-header-fixed sidemenu-closed-hidelogo page-content-white page-md header-white white-sidebar-color logo-indigo">
	<div class="page-wrapper">
		<!-- start header -->
		<div class="page-header navbar navbar-fixed-top">
			<div class="page-header-inner ">
				<!-- logo start -->
				<div class="page-logo">
					<a href="index.php">
						<span class="logo-icon material-icons fa-rotate-45">school</span>
						<span class="logo-default">Smart</span> </a>
				</div>
				<!-- logo end -->
				<ul class="nav navbar-nav navbar-left in">
					<li><a href="#" class="menu-toggler sidebar-toggler"><i class="icon-menu"></i></a></li>
				</ul>
				<form class="search-form-opened" action="#" method="GET">
					<div class="input-group">
						<input type="text" class="form-control" placeholder="Search By Students Name" name="query">
						<span class="input-group-btn">
							<a href="javascript:;" class="btn submit">
								<i class="icon-magnifier"></i>
							</a>
						</span>
					</div>
				</form>
				<!-- start mobile menu -->
				<a class="menu-toggler responsive-toggler" data-bs-toggle="collapse" data-bs-target=".navbar-collapse">
					<span></span>
				</a>
				<!-- end mobile menu -->
				<!-- start header menu -->
				<div class="top-menu">
					<ul class="nav navbar-nav pull-right">
					<!--	<li><a class="fullscreen-btn"><i data-feather="maximize"></i></a></li>-->
						<!-- start language menu -->
						<li class="dropdown language-switch">
							<a class="dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false"> <img
									src="assets/img/flags/gb.png" class="position-left" alt=""> English 
							</a>
							<ul class="dropdown-menu">
								<!--<li>
									<a class="deutsch"><img src="assets/img/flags/de.png" alt=""> Deutsch</a>
								</li>-->
								<!--<li>
									<a class="ukrainian"><img src="assets/img/flags/ua.png" alt=""> Українська</a>
								</li>-->
								<li>
									<a class="english"><img src="assets/img/flags/gb.png" alt=""> English</a>
								</li>
								<!--<li>
									<a class="espana"><img src="assets/img/flags/es.png" alt=""> España</a>
								</li>-->
								<!--<li>
									<a class="russian"><img src="assets/img/flags/ru.png" alt=""> Русский</a>
								</li>-->
							</ul>
						</li>
						<!-- end language menu -->
						<!-- start notification dropdown -->
						<li class="dropdown dropdown-extended dropdown-notification" id="header_notification_bar">
							<!--<a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<i data-feather="bell"></i>
								<span class="badge headerBadgeColor1"> 6 </span>
							</a>-->
							<ul class="dropdown-menu">
								<!--<li class="external">
									<h3><span class="bold">Notifications</span></h3>
									<span class="notification-label purple-bgcolor">New 6</span>
								</li>-->
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<!--<li>
											<a href="javascript:;">
												<span class="time">just now</span>
												<span class="details">
													<span class="notification-icon circle deepPink-bgcolor"><i
															class="fa fa-check"></i></span>
													Congratulations!. </span>
											</a>
										</li>-->
										<!--<li>
											<a href="javascript:;">
												<span class="time">3 mins</span>
												<span class="details">
													<span class="notification-icon circle purple-bgcolor"><i
															class="fa fa-user o"></i></span>
													<b>John Micle </b>is now following you. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">7 mins</span>
												<span class="details">
													<span class="notification-icon circle blue-bgcolor"><i
															class="fa fa-comments-o"></i></span>
													<b>Sneha Jogi </b>sent you a message. </span>
											</a>
										</li>-->
										<!--<li>
											<a href="javascript:;">
												<span class="time">12 mins</span>
												<span class="details">
													<span class="notification-icon circle pink"><i
															class="fa fa-heart"></i></span>
													<b>Ravi Patel </b>like your photo. </span>
											</a>
										</li>
										<li>
											<a href="javascript:;">
												<span class="time">15 mins</span>
												<span class="details">
													<span class="notification-icon circle yellow"><i
															class="fa fa-warning"></i></span> Warning! </span>
											</a>
										</li>-->
										<!--<li>
											<a href="javascript:;">
												<span class="time">10 hrs</span>
												<span class="details">
													<span class="notification-icon circle red"><i
															class="fa fa-times"></i></span> Application error. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="javascript:void(0)"> All notifications </a>
									</div>
								</li>
							</ul>
						</li>-->
						<!-- end notification dropdown -->
						<!-- start message dropdown -->
						<li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
							<!--<a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<i data-feather="mail"></i>
								<span class="badge headerBadgeColor2"> 2 </span>
							</a>-->
							<!--<ul class="dropdown-menu">
								<li class="external">
									<h3><span class="bold">Messages</span></h3>
									<span class="notification-label cyan-bgcolor">New 2</span>
								</li>
								<li>
									<ul class="dropdown-menu-list small-slimscroll-style" data-handle-color="#637283">
										<li>
											<a href="#">
												<span class="photo">
													<img src="assets/img/user/user2.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Sarah Smith </span>
													<span class="time">Just Now </span>
												</span>
												<span class="message"> Jatin I found you on LinkedIn... </span>
											</a>
										</li>
										<li>-->
										<!--	<a href="#">
												<span class="photo">
													<img src="assets/img/user/user3.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> John Deo </span>
													<span class="time">16 mins </span>
												</span>
												<span class="message"> Fwd: Important Notice Regarding Your Domain
													Name... </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="assets/img/user/user1.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Rajesh </span>
													<span class="time">2 hrs </span>
												</span>
												<span class="message"> pls take a print of attachments. </span>
											</a>
										</li>
										<li>
											<a href="#">
												<span class="photo">
													<img src="assets/img/user/user8.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Lina Smith </span>
													<span class="time">40 mins </span>
												</span>
												<span class="message"> Apply for Ortho Surgeon </span>
											</a>
										</li>
										<li>-->
											<!--<a href="#">
												<span class="photo">
													<img src="assets/img/user/user5.jpg" class="img-circle" alt="">
												</span>
												<span class="subject">
													<span class="from"> Jacob Ryan </span>
													<span class="time">46 mins </span>
												</span>
												<span class="message"> Request for leave application. </span>
											</a>
										</li>
									</ul>
									<div class="dropdown-menu-footer">
										<a href="#"> All Messages </a>
									</div>
								</li>-->
							</ul>
						</li>
						<!-- end message dropdown -->
						<!-- start manage user dropdown -->
						<li class="dropdown dropdown-user">
							<!--<a class="dropdown-toggle" data-bs-toggle="dropdown" data-hover="dropdown"
								data-close-others="true">
								<img alt="" class="img-circle " src="assets/img/dp.jpg" />
								<span class="username username-hide-on-mobile"> Sneha
							</a>-->
							<!--<ul class="dropdown-menu dropdown-menu-default">
								<li>
									<a href="user_profile.php">
										<i class="icon-user"></i> Profile </a>
								</li>
								<li>
									<a href="#">
										<i class="icon-settings"></i> Settings
									</a>
								</li>
								<li>
									<a href="#">
										<i class="icon-directions"></i> Help
									</a>
								</li>
								<li class="divider"> </li>
								<li>
									<a href="lock_screen.php">
										<i class="icon-lock"></i> Lock
									</a>
								</li>
								<li>
									<a href="login.php">
										<i class="icon-logout"></i> Log Out </a>
								</li>
							</ul>
						</li>-->
						<!-- end manage user dropdown -->
						<!--<li class="dropdown dropdown-quick-sidebar-toggler">
							<a id="headerSettingButton" class="mdl-button mdl-js-button mdl-button--icon pull-right"
								data-upgraded=",MaterialButton">
								<i class="material-icons">more_vert</i>
							</a>
						</li>-->
					</ul>
				</div>
			</div>
		</div>
		<!-- end header -->
		<!-- start color quick setting -->

		<!-- end color quick setting -->
		<!-- start page container -->
		<div class="page-container">
			<!-- start sidebar menu -->
			<div class="sidebar-container">
				<div class="sidemenu-container navbar-collapse collapse fixed-menu">
					<div id="remove-scroll" class="left-sidemenu">
						<ul class="sidemenu  page-header-fixed slimscroll-style" data-keep-expanded="false"
							data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
							<li class="sidebar-toggler-wrapper hide">
								<div class="sidebar-toggler">
									<span></span>
								</div>
							</li>
							
						<?php require_once('nav.php');  ?>
							
						
							
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
			<!-- end sidebar menu -->
			<!-- start page content -->
			<div class="page-content-wrapper">
				<div class="page-content">
					<div class="page-bar">
						<div class="page-title-breadcrumb">
							<div class=" pull-left">
								<div class="page-title">All Pins</div>
							</div>
							<ol class="breadcrumb page-breadcrumb pull-right">
								<li><i class="fa fa-home"></i>&nbsp;<a class="parent-item"
										href="index.php">Home</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li><a class="parent-item" href="#">Pin</a>&nbsp;<i class="fa fa-angle-right"></i>
								</li>
								<li class="active">All Pins</li>
							</ol>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12">
							<div class="tabbable-line">
								<!--<ul class="nav customtab nav-tabs" role="tablist">
									<li class="nav-item"><a href="#tab1" class="nav-link active"
											data-bs-toggle="tab">List
											View</a></li>
									<li class="nav-item"><a href="#tab2" class="nav-link" data-bs-toggle="tab">Grid
											View</a></li>
								</ul>-->
								<div class="tab-content">
									<div class="tab-pane active fontawesome-demo" id="tab1">
										<div class="row">
											<div class="col-md-12">
												<div class="card card-box">
													<div class="card-head">
														<!--<header>Filter By Class </header>-->
														<!--<tr>-->


														<!--<td><select name="class"> -->
								      <!--                              <option value="Primary 1">Primary 1</option>-->
								      <!--                             <option value="Primary 2">Primary 2</option>-->
								      <!--                              <option value="Primary 3">Primary 3</option>-->
								      <!--                             <option value="Primary 4">Primary 4</option>-->
								      <!--                              <option value="Primary 5">Primary 5</option>-->
								      <!--                             <option value="Primary 6">Primary 6</option>	-->
								                                         
								      <!--                               </select>-->
								      <!--                              </td>-->
								      <!--                              </tr>-->


													<!--<input type="submit" name="submit" class="btn btn-success" value="Archive Marked">-->
															<input type="submit" name="submit" class="btn btn-success" value="Export pdf" onclick="window.print();">

														<!--<div class="tools">-->
														<!--	<a class="fa fa-repeat btn-color box-refresh"-->
														<!--		href="javascript:;"></a>-->
														<!--	<a class="t-collapse btn-color fa fa-chevron-down"-->
														<!--		href="javascript:;"></a>-->
														<!--	<a class="t-close btn-color fa fa-times"-->
														<!--		href="javascript:;"></a>-->
														<!--</div>-->
													</div>
													<div class="card-body ">
														<!--<div class="row">
															<div class="col-md-6 col-sm-6 col-6">
																<div class="btn-group">
																	<a href="add_professor.php" id="addRow"
																		class="btn btn-primary">
																		Add New <i class="fa fa-plus"></i>
																	</a>
																</div>
															</div>
														</div> table-striped  table-hover table-checkable order-column-->
														

														<div class="table-responsive">
														<table
															class="table table-bordered "
															id="">
															<thead>
																<tr>
																	<!--<th>Uid </th>-->
																	<th> Type</th>
																	<th> Pin </th>
																	<th> Allowed </th>
																	<th>Left</th>
																	<th>Fee</th>
																	<th>Date Created</th>
																	<th>Approved</th>
																	<th>View Students</th>
																	<th>New Students</th>
																	<th>Upload</th>
																
																
																		
																</tr>
															</thead>
															<tbody >
													<?php require_once("inc-view-pin.php"); ?>			
																
														</tbody>
														</table>
														</div>
												
													
													</div>
												</div>
											</div>
										</div>
									</div>
									
			<!-- end chat sidebar class="myTable" id="res"-->
		</div>
		<!-- end page container -->
		<!-- start footer -->
		<div class="page-footer">
			<div class="page-footer-inner"> 2022 &copy; Louis Company
				<a href="" target="_top" class="makerCss"></a>
			</div>
			<div class="scroll-to-top">
				<i class="icon-arrow-up"></i>
			</div>
		</div>
		<!-- end footer -->
	</div>
	<!-- start js include path -->
	<script src="assets/plugins/jquery/jquery.min.js"></script>
	<script src="assets/plugins/popper/popper.js"></script>
	<script src="assets/plugins/jquery-blockui/jquery.blockui.min.js"></script>
	<script src="assets/plugins/jquery-slimscroll/jquery.slimscroll.js"></script>
	<script src="assets/plugins/feather/feather.min.js"></script>
	<!-- bootstrap -->
	<script src="assets/plugins/bootstrap/js/bootstrap.min.js"></script>
	<!-- Common js-->
	<script src="assets/js/app.js"></script>
	<script src="assets/js/layout.js"></script>
	<script src="assets/js/theme-color.js"></script>
	<!-- Material -->
	<script src="assets/plugins/material/material.min.js"></script>
	<script src="assets/js/pages/material-select/getmdl-select.js"></script>
	<script src="assets/plugins/flatpicker/js/flatpicker.min.js"></script>
	<script src="assets/js/pages/date-time/date-time.init.js"></script>
	<!-- dropzone -->
	<script src="assets/plugins/dropzone/dropzone.js"></script>
	<script src="assets/plugins/dropzone/dropzone-call.js"></script>
	<!-- end js include path -->
	
	<script>
// 	 $.get( "inc-view-pin.php", function( data ) {
//      $( "#res" ).php( data );
//   });
   
// 	     $(document).ready(function(){
//   $("#myInput").on("keyup", function() {
//     var value = $(this).val().toLowerCase();
//     $(".myTable tr").filter(function() {
//       $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
//     });
//   });
  
  
// //   $("#myInput1").on("keyup", function() {
// //     var value = $(this).val().toLowerCase();
// //     $(".myTable1 tr").filter(function() {
// //       $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
// //     });
// //   });
// });
	</script>
</body>


<!-- Mirrored from www.einfosoft.com/templates/admin/smart/source/light/add_student.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 13 Aug 2022 04:54:38 GMT -->
</html>