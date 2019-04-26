<?php
session_start();
unset($_SESSION['mmLogin']);
header("Location: login.php");
