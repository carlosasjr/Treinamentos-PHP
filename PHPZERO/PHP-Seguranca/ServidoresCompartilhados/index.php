<?php
//desatilitar funções para proteger o servidor

ini_set('disable_functions', 'exec, shell_exec, system');
ini_set('disable_classes', 'Directory, DirectoryIterator');
