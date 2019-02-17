<?php
require_once "templates/header.php";
define("EMAIL_REGEX",'/\w*\@\w*\.\w*/');

if(isset($_POST['submit'])) {
    if(isset($_POST['language'])){
        $language = $_POST['language'];
        switch($language) {
            case 'hindi':
                $result = "namaste";
                break;
            case 'english':
                $result = "hello";
                break;
            case 'python':
                $result = 'print "hello, world"';
                break;
            default:
                $result = "Select a language first";
        }
    } else {
        die("DENIED");
    }
}

?>
<div class="main">
    <div class="header">
        <h3>Practical 17</h3>
        <p>make a php webpage to say hello in different languages</p>
    </div>
    <form action="/practical17.php" class="input-form" method="POST">
        <select class="input" name="language">
            <option value="hindi">Hindi<option>
            <option value="english">English</option>
            <option value='python'>Python</option>
        </select>
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