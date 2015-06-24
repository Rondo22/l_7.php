<?php
require 'vendor/autoload.php';

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();
echo $request->getPathInfo();


echo $request->getHost();
?>



<!-- http://git-scm.com/  Пройти курс Try Git -->
<!-- github.com -->
<!-- git clone и ссылка HTTP или SSH  комманда для закачки данных с облака -->
<!-- getcomposer.org -->







<!-- http://silex.sensiolabs.org/ --> установить