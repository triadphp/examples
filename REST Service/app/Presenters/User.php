<?php

namespace MySimpleService\Presenters;

use \Triad\RequestMethod;

use \MySimpleService\Models\Users\UserRepository;

class User extends \MySimpleService\Main\Presenter
{
    private $userId;

    public function before() {
        parent::before();
        $this->userId = $this->params["id"];
    }

    public function actionDefault() {
        if ($this->request->getMethod() == RequestMethod::DELETE) {
            // delete user
            $users = new UserRepository($this->db);
            $this->return = $users->delete($this->userId);
        }
        else {
            // get user info
            $users = new UserRepository($this->db);
            $this->return = $users->get($this->userId);
        }
    }
}