<?php
session_start();
session_destroy();
header("Location: to-do-list.php");

?>