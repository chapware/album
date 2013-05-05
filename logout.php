<?php

@require "auth.php";

session_start();
session_unset($_SESSION['CHAPWARE_SESSID']);
session_destroy($_SESSION['CHAPWARE_SESSID']);

header("Location: index.php");

?>