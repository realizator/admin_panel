<?php

/*****************************************************
* modules/rtp/index.php
* rtp index file
*(c)virt2real.ru 2013
* draft, by Gol
/*****************************************************/

// check module name
require_once('description.php');

// common include
include('../../parts/global.php');

// load module template
$module_content = file_get_contents("template.tpl");
$module_content = str_replace('{module_name}', $module_params['name'], $module_content);
$module_content = str_replace('{module_title}', $module_params['title'], $module_content);

// make global replaces
$module_content = GlobalReplace($module_content);

/***************** module specific part **************/

$rtptemplate = file_get_contents('rtp.sh');
$module_content = str_replace('{rtptemplate}', $rtptemplate, $module_content);

$module_content = str_replace('{host}', $_SERVER["REMOTE_ADDR"], $module_content);

echo $module_content;

?>