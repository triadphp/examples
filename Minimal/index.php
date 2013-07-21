<?php
require("Triad/Load.php");

class Application extends \Triad\Application
{
    public function init() {
        // set up routes
        $this->router->add("/", array($this, "home"));
        $this->router->add("#/sum-(?<num1>\d+)plus(?<num2>\d+)#", array($this, "sum"), true);
    }

    public function home(Application $application, \Triad\Request $request, $params = array()) {
        $this->setPageTemplate($request, "index");
        $request->response["path"] = $request->getPath();

        // do internal request
        $result = \Triad\Request::factory("/sum-1plus1")->execute($application)->response->get();
        $request->response["internal_sum"] = $result["sum"];
    }

    public function sum(Application $application, \Triad\Request $request, $params = array()) {
        if (isset($request->params["json"]))
            $request->response = new \Triad\Responses\JsonResponse(true);

        $this->setPageTemplate($request, "sum");
        $request->response["num1"] = $params["num1"];
        $request->response["num2"] = $params["num2"];
        $request->response["sum"] = $params["num1"] + $params["num2"];
    }

    public function handleException(\Exception $e, \Triad\Request $request) {
        if ($request->response instanceof \Triad\Responses\HtmlResponse) {
            $request->response->setRaw(
                "<html><body>" .
                "<strong>" . get_class($e) . "<strong><pre>" . $e->getMessage() . "</pre>" .
                "</body></html>"
            );
        }

        return parent::handleException($e, $request);
    }

    private function setPageTemplate(\Triad\Request $request, $template) {
        if ($request->response instanceof \Triad\Responses\HtmlResponse)
            $request->response->setTemplate($template);
    }
}

$config = \Triad\Config::factory(__DIR__ . "/config.php");
$application = new Application($config);

// default response type
$response = new \Triad\Responses\HtmlResponse(__DIR__ . "/Templates");

$request = \Triad\Requests\HttpRequest::fromServerRequest($response);
$request->execute($application)->response->send();