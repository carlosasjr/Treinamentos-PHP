<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 28/02/2019
 * Time: 14:32
 */

session_start();

unset($_SESSION['banco']);

header('Location: index.php');
exit;
