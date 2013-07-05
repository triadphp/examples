<?php

namespace MySimpleService\Main;

class Presenter extends \Triad\Presenter
{
    // shortcuts - make them easily available in all presenters
    protected $db;
    protected $redis;

    /**
     * Custom construct for presenter
     */
    public function __construct(\MySimpleService\Main\Application $application, \Triad\Request $request, $params) {
        parent::__construct($application, $request, $params);

        // define shortcuts
        $this->db = $application->getDatabase();
        $this->redis = $application->getRedis();
    }
}