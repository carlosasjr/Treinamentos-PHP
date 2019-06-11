<?php
session_start();
require 'config.php';
require 'routers.php';

$core = new Core();
$core->run();


