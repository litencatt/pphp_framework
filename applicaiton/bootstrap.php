<?php
require 'core/ClassLoader.php';

$loader = new ClassLoader();
$loader->registerDir(dirname(_FILE_).'/core');
$loader->registerDir(dirname(_FILE_).'/models');
$loader->register();
?>
