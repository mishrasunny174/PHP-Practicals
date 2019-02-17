<?php
$dbname="practical10";
$dbhost="database";
$user="root";
$password="password";
$check_user_sql = 'select password from users where username = :username';
try{
    $username = 'mishrasunny174';
    $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname",$user,$password);
    $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);
    $stmt = $pdo->prepare($check_user_sql);
    $stmt->execute(['username' => $username]);
    $password = $stmt->fetch();
    echo 'password: '.$password['password'];
} catch(PDOException $e) {
    echo "FATAL ERROR!!!".$e->getMessage();
}
?>