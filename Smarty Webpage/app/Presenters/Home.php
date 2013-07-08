<?php

namespace SmartyProject\Presenters;

use \Triad\Request;
use \SmartyProject\Main\SmartyResponse;
use Triad\Responses\JsonResponse;

class Home extends \SmartyProject\Main\Presenter
{
    public function actionDefault() {
        $this->return["custom"] = "passed_variable";

        if ($this->request->response instanceof SmartyResponse)
            $this->request->response->setTemplate("home");
    }

    public function actionJson() {
        $this->return = array("result" => true);

        // return as json
        $this->request->response = new JsonResponse();
    }
}