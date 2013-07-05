<?php

namespace MyEmptyProject\Main;

use \Triad\Request;

class Application extends \Triad\Application
{
    public function init() {
        // TODO initialize custom libraries

        // set up routes
        $router = new \Triad\Router();
        $router->addMVP("\\" . APP_NAMESPACE . "\\Presenters");
        $this->setRouter($router);
    }

    /**
     * Custom exception handler
     * @param \Exception $e
     * @param \Triad\Request $request
     */
    public function handleException(\Exception $e, Request $request) {
        // TODO do custom exception handling

        return parent::handleException($e, $request);
    }
}