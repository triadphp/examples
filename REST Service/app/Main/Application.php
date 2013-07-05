<?php

namespace MySimpleService\Main;

use \Triad\Request;

use \MySimpleService\Models\LogRepository;

class Application extends \Triad\Application
{
    const version = "1.0.0";
    const author = "Marek Vavrecan";

    private $database;
    private $redis;

    public function init() {
        // database
        if (isset($this->configuration["database"])) {
            $this->database = new \Triad\Database(
                $this->configuration["database"]["dns"],
                $this->configuration["database"]["user"],
                $this->configuration["database"]["password"]
            );
            $this->database->connect();
        }

        // redis
        if (isset($this->configuration["redis"]) && $this->configuration["redis"]["enabled"]) {
            $this->redis = new Redis();
        }

        // set up routes
        $router = new \Triad\Router();
        $router->addMVP("\\" . APP_NAMESPACE . "\\Presenters");
        $this->setRouter($router);
    }

    public function getDatabase() {
        return $this->database;
    }

    public function getRedis() {
        return $this->redis;
    }

    /**
     * Log error to database
     * @param \Exception $e
     * @param \Triad\Request $request
     */
    public function handleException(\Exception $e, Request $request) {
        // only log exception if its fatal or different instance than TriedException
        // and if database connection succeeded
        if (($e instanceof \Triad\Exceptions\TriadException && $e->isFatal()) ||
            !$e instanceof \Triad\Exceptions\TriadException && !is_null($this->database) && $this->database->isConnected()) {

            $errorLog = new LogRepository($this->database);
            $errorLog->logError($e, $request);
        }

        return parent::handleException($e, $request);
    }
}