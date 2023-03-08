<?php
session_start();

require_once('../db.php');
$sch_name = trim($_SESSION['name']);

$sch = $db->query("SELECT * FROM result_temp ");
if($row = $sch->num_rows<1)
{?>
    	<a href=""  type="button" class="btn btn-dark">
		<span class="bi bi-plus-square-dotted">
			</span>0  Result for Download
	</a>
<?php }else{
    $r = $sch->fetch_assoc();
    ?>
    	<a href="https://examportal.org.ng/master/php/<?php echo $r['file']; ?>"  type="button" class="btn btn-dark">
		<span class="bi bi-plus-square-dotted">
			</span>1 Result Template Ready for Download 	<i class="fa fa-download"></i>
	</a>
    <?php
}

?>

