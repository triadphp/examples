<?php

namespace SmartyProject\Main;

class Presenter extends \Triad\Presenter
{
    // shortcuts
    protected $db;

    /**
     * Custom construct for presenter
     */
    public function __construct(\SmartyProject\Main\Application $application, \Triad\Request $request, $params) {
        parent::__construct($application, $request, $params);

        // define shortcuts
        $this->db = $application->getDatabase();
    }
}