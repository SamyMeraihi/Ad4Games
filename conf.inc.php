<?php

define("DBUSER","root");
define("DBPWD","");
define("DBHOST","localhost");
define("DBNAME","ad4games");
define("DBPORT","80");


define("DS", "/");

//dirname($_SERVER["SCRIPT_NAME"]) => /3IW classe 2/
//dirname($_SERVER["SCRIPT_NAME"]) => //
$scriptName = (dirname($_SERVER["SCRIPT_NAME"]) == "/")?"":dirname($_SERVER["SCRIPT_NAME"]);
define("DIRNAME", $scriptName.DS);
