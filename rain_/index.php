<?php

// include
require_once("vendor/autoload.php");
// namespace

use  Rain\Tpl;
// config

// config
$config = array(
    "tpl_dir"       => "tpl/",
    "cache_dir"     => "cache/" 
);
Tpl::configure($config);

$tpl = new Tpl;

$tpl->assign("name", "Maelson");
$tpl->assign("version", phpversion());

$tpl->draw("index");

?>