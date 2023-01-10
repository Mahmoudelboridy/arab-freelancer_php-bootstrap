<?php
session_start();
session_unset();
session_destroy();
echo "<script>window.open('http://localhost/arab_freelancer/index.php','_self');</script>";
?>