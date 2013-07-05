<?php
namespace MyEmptyProject;

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
$application = new \MyEmptyProject\Main\Application($config);
$application->setEnvironment($config["environment"]);

// initialize default response handler
// TODO define default respoonse
$response = new \Triad\Responses\JsonResponse();

// get request from current webserver http request and set default handler
$request = \Triad\Requests\HttpRequest::fromServerRequest($response);
$request->setBasePath($config["base_path"]);

// handle main request
$request->execute($application);

// output response
$request->response->send();