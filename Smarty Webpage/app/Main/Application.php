<?php

namespace SmartyProject\Main;

use \Triad\Exceptions\NotFoundException;
use \Triad\Request;
use \Triad\Exceptions\TriadException;

use \SmartyProject\Main\SmartyResponse;

class Application extends \Triad\Application
{
    const version = "1.0.0";
    const author = "Marek Vavrecan";

    private $database;

    public function init() {
        // initialize apps

        // set up routes
        $this->router->add("#^/custom-(?P<number>\d+)#", array($this, "customHandler"), true);

        // namespace location containing Presenters
        $this->router->addMVP("\\" . APP_NAMESPACE . "\\Presenters");
    }

    public function getDatabase() {
        return $this->database;
    }

    public function customHandler(Application $application, Request $request, $params = array()) {
        $request->response["custom"] = $params["number"];

        if ($request->response instanceof SmartyResponse)
            $request->response->setTemplate("home");
    }

    /**
     * Log error to database and display custom error template
     * @param \Exception $e
     * @param \Triad\Request $request
     */
    public function handleException(\Exception $e, Request $request) {
        // TODO add error handling (save to database)

        // display error template
        if ($request->response instanceof SmartyResponse) {
            if ($e instanceof \Triad\Exceptions\NotFoundException)
                $request->response->setTemplate("not-found");
            else
                $request->response->setTemplate("error");
        }

        return parent::handleException($e, $request);
    }

    public function execute(Request $request) {
        parent::execute($request);

        // add global template values
        if ($request->response instanceof SmartyResponse)
            $request->response["base"] = $this->configuration["base_path"];
    }
}