<?php

if (isset($_POST['submit'])){
	if(isset($_POST['msg'])){
		$result = strrev($_POST['msg']);
	} else {
		die('DENIED');
	}
}

include "templates/header.php";

?>
<div class="main">
	<div class="header">
		<h3>Practical 4</h3>
		<p>Write a php webpage to reverse a string</p>
	</div>
	<form action="/practical4.php" method="POST" class="input-form">
			<input type="text" class="input-number" name="msg" placeholder="Enter message: " required
				<?php if(isset($msg)) echo "value=\"$msg\""?>>
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