<?php

namespace MySimpleService\Models\Users;

use \MySimpleService\Models\Paging;
use \Triad\Model;

use \MySimpleService\Models\Users\User;
use \MySimpleService\Exceptions\AuthException;

class UserRepository extends Model
{
    /**
     * @param $id
     * @return \MySimpleService\Models\Users\User
     * @throws \Exception
     */
    public function get($id) {
        $user = $this->db->fetchObject("\\" . APP_NAMESPACE . "\\Models\\Users\\User", "SELECT
                users.id, users.email, users.first_name as firstName, users.last_name as lastName, users.verified
            FROM
               users
            WHERE
                users.id = :id AND users.active = 1",
            array(
                "id" => $id
            ));

        if (!$user)
            throw new \Exception("No such user: " . $id);

        $user->name = $user->firstName . " " . $user->lastName;
        return $user;
    }

    public function getList(Paging $paging) {
        $list = $this->db->fetchAllObject("\\" . APP_NAMESPACE . "\\Models\\Users\\User", "SELECT
                users.id, users.email, users.first_name as firstName, users.last_name as lastName, users.verified
            FROM
                users
            WHERE
                users.active = 1" . $paging->getLimit());

        return $list;
    }

    public function update($userId, User $update) {
        $user = $this->get($userId);

        if (!is_null($update->email))
            $user->email = $update->email;

        if (!is_null($update->firstName))
            $user->firstName = $update->firstName;

        if (!is_null($update->lastName))
            $user->lastName = $update->lastName;

        if (!is_null($update->verified))
            $user->verified = $update->verified;

        $this->db->exec("UPDATE users SET
            users.email = :email,
            users.first_name = :first_name,
            users.last_name = :last_name,
            users.verified = :verified
            WHERE id = :id AND active = 1", array(
            "id" => $user->id,
            "email" => $user->email,
            "first_name" => $user->firstName,
            "last_name" => $user->lastName,
            "verified" => $user->verified
        ));
    }

    public function delete($userId) {
        $this->db->exec("UPDATE users
            SET
                active = 0
            WHERE
                users.id = :user_id",
            array(
                "user_id" => $userId
            ));

        return true;
    }

    public function add(User $user) {
        // insert new user
        $newUser = $this->db->exec("INSERT INTO
                users (active, email, first_name, last_name, created_time)
            VALUES
                (1, :email, :first_name, :last_name, :created_time)",
            array(
                "email" => $user->email,
                "first_name" => $user->firstName,
                "last_name" => $user->lastName,
                "created_time" => time()
            ));

        if (!$newUser)
            throw new \Exception("Failed to create a new user");

        // insert default auth method - over email and password
        $user->id = $this->db->lastInsertId();
        $user->name = $user->firstName . " " . $user->lastName;

        return $user;
    }
}