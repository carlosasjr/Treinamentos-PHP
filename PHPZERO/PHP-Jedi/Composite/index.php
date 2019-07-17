<?php
require 'classes.class.php';

$form = new Form();
$form->addElement(new Label('Usuário'));
$form->addElement(new InputText('usuario', 'text'));

$form->addElement(new Label('Senha'));
$form->addElement(new InputText('senha', 'password'));

echo $form->render();

