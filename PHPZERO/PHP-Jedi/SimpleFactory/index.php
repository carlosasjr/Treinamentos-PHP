<?php
/**
 * Created by PhpStorm.
 * User: Carlos-TP
 * Date: 05/07/2019
 * Time: 10:53
 */

require 'class/Post.class.php';
require 'class/Facebook.class.php';


$face = new Facebook();
$post = $face->createPost();
$post->setAuthor('Carlos');
$post->setMensage('Minha mensagem');

echo $post->getAuthor() . ' ' . $post->getMensage();


