<?php

namespace MyEmptyProject\Main;

use \Triad\Request;

class Application extends \Triad\Application
{
    public function init() {
        // TODO initialize custom libraries

        // set up routes
        $this->router->addMVP("\\" . APP_NAMESPACE . "\\Presenters");
    }

    /**
     * Custom exception handler
     * @param \Exception $e
     * @param \Triad\Request $request
     */
    public function handleException(\Exception $e, Request $request) {
        // TODO do custom exception handling
        if ($e instanceof \MyEmptyProject\Exceptions\MyException) {
            print "custom exception occured";
        }

        return parent::handleException($e, $request);
    }
}