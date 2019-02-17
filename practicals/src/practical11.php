<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['str']) && isset($_POST['substr'])) {
        $str = $_POST['str'];
        $substr = $_POST['substr'];
        $position = strpos($str,$substr);
        $position ? $result = "Found at index $position": $result = "Not found";
    } else {
        die('DENIED');
    }
}

include "templates/header.php";
?>
<div class="main">
	<div class="header">
		<h3>Practical 11</h3>
		<p>Write a php webpage to check if the string contains a substring or not</p>
	</div>
	<form action="/practical11.php" method="POST" class="input-form">
			<input type="text" class="input-number" name="str" placeholder="Enter a string " required
                <?php if (isset($str)) echo "value=\"$str\"" ?>>
            <input type="text" class="input-number" name="substr" placeholder="Enter a substring " required
			<?php if (isset($substr)) echo "value=\"$substr\"" ?>>
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