<?php
class User
{
    static private $dbname = "practical10";
    static private $dbhost = "database";
    static private $user = "root";
    static private $password = "password";
    static private $get_user_sql = 'select * from users where username = :username';
    static private $set_user_sql = 'insert into users(username,password) values(:username,:password)';
    static function getUser($username)
    {
        try {
            $pds = 'mysql:host=' . User::$dbhost . ';dbname=' . User::$dbname;
            $pdo = new PDO($pds, User::$user, User::$password);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            $stmt = $pdo->prepare(User::$get_user_sql);
            $stmt->execute(['username' => $username]);
            $pdo = null;
            return $stmt->fetch();
        } catch (PDOException $e) {
            die("FATAL ERROR!!!");
        }
        return null;
    }
    static function registerUser($username, $password)
    {
        try {
            $pds = 'mysql:host=' . User::$dbhost . ';dbname=' . User::$dbname;
            $pdo = new PDO($pds, User::$user, User::$password);
            $stmt = $pdo->prepare(User::$set_user_sql);
            return $stmt->execute(["username" => $username, "password" => $password]);
        } catch (PDOException $e) {
            echo die("FATAL ERROR!!!");
        }

    }
}
?>