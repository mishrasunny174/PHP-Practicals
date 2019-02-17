<?php
require_once "practical10/user.php";
if (isset($_POST['login'])) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $user = User::getUser($_POST['username']);
        if ($user != null) {
            if ($user->password == $_POST['password']) {
                $result = "Login Successful, welcome " . $user->username;
            } else {
                $result = "Login failed, Invalid password";
            }
        } else {
            $result = 'user not found, kindly register';
        }
    } else {
        die('DENIED');
    }
}

if (isset($_POST['register'])) {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if (User::registerUser($_POST['username'], $_POST['password'])) {
            $result = "User added successfully";
        }
    } else {
        die('DENIED');
    }
}

require_once "templates/header.php";
?>
<div class='main'>
    <div class="header">
        <h3> Practical 10 </h3>
        <p> write a php webpage to provide login and register utitlity </p>
    </div>
    <form class="input-form" action="/practical10.php" method="POST">
        <input type="text" required name="username" placeholder="Username" class="input-number">
        <input type="password" required name="password" placeholder="password" class="input-number">
        <input type="submit" name="login" value="login" class="submit-button">
        <input type="submit" name="register" value="register" class="submit-button">
        <?php
            if (isset($result)) {
            echo "<textarea readonly class=\"result-textarea\">###RESULT####\n\n$result</textarea>";
            }
        ?>
    </form>
</div>
<?php
require_once "templates/footer.php";
?>