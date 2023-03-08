<?php
require __DIR__ . '/constants.php';
define('DB_HOST', 'localhost');
// define('DB_USER', 'skibussi_user');
define('DB_USER', 'root');
// define('DB_PASS', 'd3;tUsLwFS)009');
define('DB_PASS', '');
define('DB_NAME', 'skibussi_db');

$con = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
if (!$con) {
    echo "Connection Error: " . mysqli_connect_error($con);
}

?>