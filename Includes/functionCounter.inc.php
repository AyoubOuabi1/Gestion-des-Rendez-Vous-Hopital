<?php
spl_autoload_register(function($className) {
    $file = '../Classes/'.$className.'.php';
    require $file;

});
 echo FunctionsCounter::getTotalSession();
