<?php

namespace MySimpleService\Presenters;

use \MySimpleService\Application;

class About extends \MySimpleService\Main\Presenter
{
    protected $singleAction = true;

    public function actionDefault() {
        $this->return = array(
           "author" => \MySimpleService\Main\Application::author,
           "version" => \MySimpleService\Main\Application::version
        );
    }
}