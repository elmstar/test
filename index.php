<?php
/**
 *  ЧПУ 
 */ 
$uri = explode('/',trim(preg_replace('#(\?.*)#','',$_SERVER['REQUEST_URI']),'/'));
include 'config.php';







echo "Заглушка для клиентской части";
