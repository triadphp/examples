<?php

namespace MyEmptyProject\Main;

abstract class Presenter extends \Triad\Presenter
{
    // TODO define custom shortcuts here

    public function __construct(\MyEmptyProject\Main\Application $application, \Triad\Request $request, $params) {
        parent::__construct($application, $request, $params);

        // TODO initialize presenter shortcuts
    }
}