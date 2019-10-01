<?php
session_start();
require 'Facebook/autoload.php';

$fb = new Facebook\Facebook([
    'app_id' => '443507416267727',
    'app_secret' => '',
    'default_graph_version' => 'v2.7'
]);

