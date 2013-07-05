<?php

namespace MySimpleService\Presenters;

use \Triad\Request;

class Home extends \MySimpleService\Main\Presenter
{
    public function actionDefault() {
        // handle multiple actions as http://localhost/?ids=user-1,user-2
        if (isset($this->request->params["ids"])) {
            $ids = explode(",", $this->request->params["ids"]);

            foreach ($ids as $id) {
                try {
                    $this->return[$id] = Request::factory("/{$id}", $this->request->params)->execute($this->application)->response->get();
                } catch(\Exception $e) {
                    $this->return[$id] = array("error" => $e->getMessage());
                }
            }
        }
        else {
            // redirect to page
            $this->redirect("http://localhost/docs", \Triad\Requests\HttpStatusCode::MOVED_TEMPORARILY);
        }
    }
}