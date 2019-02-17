<?php
require_once "templates/header.php";

if(isset($_POST['submit'])) {
    if(isset($_POST['birthday'])){
        $birthday = $_POST['birthday'];
        $time = strtotime($_POST['birthday']);
        $remainingTime = $time-time();
        $remainingDays = ceil($remainingTime / 86400); //one day has 86400 seconds
        $result = "number of days for your birthday is $remainingDays";
    } else {
        die("DENIED");
    }
}

?>
<div class="main">
    <div class="header">
        <h3>Practical 12</h3>
        <p>make a php webpage to count number of days until birtday</p>
    </div>
    <form action="/practical12.php" class="input-form" method="POST">
        <input type="date" class="input" name="birthday" 
        <?php if(isset($birthday)) echo "value='$birthday'"?>>
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