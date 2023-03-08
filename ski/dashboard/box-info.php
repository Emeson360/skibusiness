<?php  
session_start();

 require_once('../db.php');
$sch_name = $_SESSION['name'];

 $sel = $db->query("SELECT * FROM students WHERE school_name ='$sch_name'");

 $stu_no = $sel->num_rows;

 



 $selT = $db->query("SELECT * FROM teachers WHERE school_name ='$sch_name'");

 $tea_no = $selT->num_rows;

?>





<div class="info-box bg-b-green">

						<span class="info-box-icon push-bottom"><?php if(isset($stu_no)){echo $stu_no;} ?></span>

									<div class="info-box-content">

										<span class="info-box-text">Total Students</span>

										<span class="info-box-number"></span>

										<div class="progress">

											<div class="progress-bar" style="width: 45%"></div>

										</div>

										<span class="progress-description">

											

										</span>

									</div>

									<!-- /.info-box-content -->

								</div>

								<!-- /.info-box -->

							</div>

							<!-- /.col -->

							<div class="col-xl-3 col-md-6 col-12">

								<div class="info-box bg-b-yellow">

					<!--<span class="info-box-icon push-bottom"><i data-feather="user"></i></span>-->

									<div class="info-box-content">

										<span class="info-box-text">New Students</span>

										<!--<span class="info-box-number">155</span>-->

										<div class="progress">

											<div class="progress-bar" style="width: 40%"></div>

										</div>

										<span class="progress-description">

											

										</span>

									</div>

									<!-- /.info-box-content -->

								</div>

								<!-- /.info-box -->

							</div>

							<!-- /.col -->

							<div class="col-xl-3 col-md-6 col-12">

								<div class="info-box bg-b-blue">

						<span class="info-box-icon push-bottom"><?php if(isset($tea_no)){echo $tea_no;} ?></span>

									<div class="info-box-content">

										<span class="info-box-text">Number Staff</span>

										<span class="info-box-number"></span>

										<div class="progress">

											<div class="progress-bar" style="width: 85%"></div>

										</div>

										<span class="progress-description">

											

										</span>

									</div>

									<!-- /.info-box-content -->

								</div>

								<!-- /.info-box -->

							</div>

							<!-- /.col -->

							<div class="col-xl-3 col-md-6 col-12">

								<div class="info-box bg-b-pink">

									<li class="nav-item">

										<a href="results.php" class="nav-link "> <span class="title">Check Results

										</span>

										</a>

									</li>

										<!--<span class="info-box-number"></span><span>$</span>-->

										<div class="progress">

											<div class="progress-bar" style="width: 50%"></div>

										</div>

										<span class="progress-description">

											

										</span>

									</div>





									<!-- /.info-box-content -->

								</div>