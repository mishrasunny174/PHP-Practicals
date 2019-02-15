<?php

if (isset($_POST['submit'])){
	if(isset($_POST['str'])){
		$str = $_POST['str'];
		if(ctype_lower($str)) {
			$result = "$str is all lowercase";
		} else {
			$result = "$str is not lowercase";
		}
	} else {
		die('DENIED');
	}
}

include "templates/header.php";

?>
<div class="main">
	<div class="header">
		<h3>Practical 5</h3>
		<p>Write a php webpage to check whether string is lowercase or not</p>
	</div>
	<form action="/practical5.php" method="POST" class="input-form">
			<input type="text" class="input-number" name="str" placeholder="Enter string " required
				<?php if(isset($str)) echo "value=\"$str\""?>>
			<input type="submit" class="submit-button" name="submit" value="submit">
			<?php
				if(isset($result))
				{
					echo "<textarea readonly class=\"result-textarea\">###RESULT####\n\n$result</textarea>";
				} 
			?>
	</form>
</div>
<?php
	include "templates/footer.php";
?>