<?php

namespace MySimpleService\Main;

abstract class Presenter extends \Triad\Presenter
{
    /**
     * @var \Triad\Database
     */
    protected $db;

    /**
     * @var \Predis
     */
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