<?php
session_start();
session_destroy();
header("Location: firstlogin.php");
exit();
