<?php
require_once "templates/header.php";
define("EMAIL_REGEX",'/\w*\@\w*\.\w*/');

if(isset($_POST['submit'])) {
    if(isset($_POST['email'])){
        $email = $_POST['email'];
        if(preg_match(EMAIL_REGEX, $email)){
            $result = 'Email is valid'; 
        } else {
            $result = 'Email is not valid';
        }
    } else {
        die("DENIED");
    }
}

?>
<div class="main">
    <div class="header">
        <h3>Practical 14</h3>
        <p>make a php webpage to check if an email is valid or not</p>
    </div>
    <form action="/practical14.php" class="input-form" method="POST">
        <input type="text" class="input" name="email" 
        <?php if(isset($email)) echo "value='$email'"?>>
        <input type="submit" class="submit-button" name="submit" value="submit">
        <?php if (isset($result)) {
            echo "<textarea readonly class=\"result-textarea\">###RESULT####\n\n$result</textarea>";
        }
        ?>
    </form>
</div>

<?php 
require_once "templates/footer.php";
?>