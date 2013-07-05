<?php

namespace MySimpleService\Models\Users;

use \Triad\Model;

use \MySimpleService\Models\Users\User;
use \MySimpleService\Exceptions\AuthException;

class UserRepository extends Model
{
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

    /**
     * @param $email
     * @param $password
     * @return User
     * @throws \MySimpleService\Exceptions\AuthException
     */
    public function authEmail($email, $password) {
        $user = $this->db->fetchObject("\\" . APP_NAMESPACE . "\\Models\\Users\\User", "SELECT
                users.id, users.email, users.first_name as firstName, users.last_name as lastName
            FROM
                users
            INNER JOIN user_auth_email ON user_auth_email.user_id = users.id
            WHERE
                user_auth_email.email = :email AND user_auth_email.password = UNHEX(:password) AND
                users.active = 1",
            array(
                "email" => $email,
                "password" => hash("sha512", $password)
            ));

        if (!$user)
            throw new AuthException("Invalid email or password");

        return $user;
    }

    public function register(User $user, $password) {
        // check if user exists
        $userExists = $this->db->fetch("SELECT user_id FROM user_auth_email WHERE email = :email",
            array("email" => $user->email));

        if ($userExists)
            throw new AuthException("User with given email already exists: {$user->email}");

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

        $userAuthEmail = $this->db->exec("INSERT INTO
                user_auth_email (user_id, email, password)
            VALUES
                (:user_id, :email, UNHEX(:password))",
            array(
                "user_id" => $user->id,
                "email" => $user->email,
                "password" => hash("sha512", $password)
            ));

        if (!$userAuthEmail)
            throw new \Exception("Failed to create user credentials");

        return $user;
    }
}