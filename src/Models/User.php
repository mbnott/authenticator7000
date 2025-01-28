<?php

namespace Mbnot\Authenticator7000\Models\db;

use Mbnot\Authenticator7000\Models\db\Database;
use PDO;

class User
{
    const string ROLE_USER = 'user';
    const string ROLE_ADMIN = 'admin';

    public static function login($email, $password): string|false
    {
        $db = Database::Connect();
        $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->execute(["email" => $email]);
        $data = $stmt->fetch();
        if ($data === false)
            return false;
        if (!password_verify($password, $data["password"]))
            return false;
        return self::createToken($data["id"]);
    }

    public static function register($name, $email, $password): string|false
    {
        $db = Database::Connect();
        $stmt = $db->prepare("INSERT INTO users (name, email, password, role) VALUES (:name, :email, :password, :roleId)");
        $stmt->execute(["name" => $name, "email" => $email, "password" => @password_hash($password, PASSWORD_BCRYPT), "roleId" => self::ROLE_USER]);
        return $db->lastInsertId();
    }

    public static function getUser($id): array|false
    {
        $db = Database::Connect();
        $stmt = $db->prepare("SELECT * FROM users WHERE id = :id");
        $stmt->execute(["id" => $id]);
        return $stmt->fetch();
    }

    public static function createToken($id): string
    {
        throw new \Error("Not yet implemented");
    }
}