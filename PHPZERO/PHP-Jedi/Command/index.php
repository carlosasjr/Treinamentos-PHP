<?php

require 'classes.class.php';

$luz = new Luz();

$c = new LuzOnCommand($luz);
//$c = new LuzOffCommand($luz);

callCommand($c);

echo $luz->getStatus();
