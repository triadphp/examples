<?php
namespace SmartyProject;

// internal paths
define("APP_DIR", __DIR__);
define("LIBS_DIR", __DIR__ . "/../libs");
define("TMP_DIR", __DIR__ . "/../tmp");
define("APP_NAMESPACE", __NAMESPACE__);

// load framework
require_once(LIBS_DIR . "/Triad/Load.php");

// autoloader for our application
// Triad framework is not depended on this autoloader
\Triad\Autoload::register();
\Triad\Autoload::add(APP_NAMESPACE, APP_DIR);

// initialize config file
$config = \Triad\Config::factory(APP_DIR . "/config.php");

// initialize application, application contains database connection and routes declaration
$application = new \SmartyProject\Main\Application($config);

// initialize default response handler
$response = new \SmartyProject\Main\SmartyResponse(APP_DIR . "/Templates", TMP_DIR . "/template_c");

// get request from current webserver http request and set default handler
$request = \Triad\Requests\HttpRequest::fromServerRequest($response);

// handle main request
$request->execute($application);

// output response
$request->response->send();