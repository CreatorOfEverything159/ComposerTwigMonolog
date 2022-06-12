<?php

require_once join(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'vendor', 'autoload.php']);
require_once join(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'Viewer.php']);
require_once join(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'InfoLogger.php']);

$view = new Viewer();
$view->show('page3.twig');
$logger = new InfoLogger('page3.php');
$logger->activate();