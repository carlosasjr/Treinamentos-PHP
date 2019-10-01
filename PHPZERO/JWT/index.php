<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 25/09/2019
 * Time: 10:15
 */

require 'Jwt.class.php';

$jwt = new jwt();

$token = $jwt->create(array("id_user" => 123, "nome" => 'Carlos Júnior'));
echo $token;

