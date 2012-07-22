<?php
ini_set('display_errors', 1);
//error_reporting(-1);

define('ROOT_PATH', str_replace('web/front.php','',str_replace("\\","/",__FILE__)));
define('XT_TPL_SUFFIX', 'php');

require_once(__DIR__.'/../vendor/.composer/autoload.php');
 
use Symfony\Component\HttpFoundation\Request;

$routes = include(__DIR__.'/../src/app.php');
$sc = include(__DIR__.'/../src/container.php');

$request = Request::createFromGlobals();
$response = $sc->get('framework')->handle($request);
$response->send();