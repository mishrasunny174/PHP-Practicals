<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['str'])) {
        $str = $_POST['str'];
        $result = preg_replace('/the/','That',$str,1);
    } else {
        die('DENIED');
    }
}

include "templates/header.php";
?>
<div class="main">
	<div class="header">
		<h3>Practical 19</h3>
		<p>Write a php webpage to replace first occurance 'the' to 'that'</p>
	</div>
	<form action="/practical19.php" method="POST" class="input-form">
			<input type="text" class="input-number" name="str" placeholder="Enter a string " required
                <?php if (isset($str)) echo "value=\"$str\"" ?>>
			<input type="submit" class="submit-button" name="submit" value="submit">
			<?php
    if (isset($result)) {
        echo "<textarea readonly class=\"result-textarea\">###RESULT####\n\n$result</textarea>";
    }
    ?>
	</form>
</div>
<?php
include "templates/footer.php";
?>