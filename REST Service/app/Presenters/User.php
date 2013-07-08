<?php

namespace MySimpleService\Presenters;

use \MySimpleService\Models\Paging;
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
            $this->actionDelete();
        }
        else if ($this->request->getMethod() == RequestMethod::UPDATE) {
            $this->actionUpdate();
        }
        else if ($this->request->getMethod() == RequestMethod::CREATE) {
            $this->actionCreate();
        }
        else if ($this->userId != null) {
            // get user info
            // restore from cache
            if ($this->redis && $this->redis->exists("user:{$this->userId}")) {
                $this->return = unserialize($this->redis->get("user:{$this->userId}"));
                return;
            }

            $users = new UserRepository($this->db);
            $this->return = $users->get($this->userId);

            // save to cache
            if ($this->redis)
                $this->redis->set("user:{$this->userId}", serialize($this->return));
        } else {
            // list users
            $this->actionList();
        }
    }

    public function actionList() {
        $users = new UserRepository($this->db);
        $paging = new Paging($this->request);

        $list = $users->getList($paging);

        // add frame with data and prev and next urls
        $list = $paging->addFrame($list);

        $this->return = $list;
    }

    public function actionCreate() {
        $users = new UserRepository($this->db);
        $this->return = $users->add($this->userFromParams());
    }

    public function actionDelete() {
        $users = new UserRepository($this->db);
        $this->return = $users->delete($this->userId);

        // invalidate cache
        if ($this->redis)
            $this->redis->del("user:{$this->userId}");
    }

    public function actionUpdate() {
        $users = new UserRepository($this->db);
        $this->return = $users->update($this->userId, $this->userFromParams());

        // invalidate cache
        if ($this->redis)
            $this->redis->del("user:{$this->userId}");
    }

    private function userFromParams() {
        $user = new \MySimpleService\Models\Users\User();
        $params = $this->request->params;

        if (isset($params["email"]))
            $user->email = $params["email"];

        if (isset($params["first_name"]))
            $user->firstName = $params["first_name"];

        if (isset($params["last_name"]))
            $user->lastName = $params["last_name"];

        if (isset($params["verified"]))
            $user->verified = $params["verified"];

        return $user;
    }
}