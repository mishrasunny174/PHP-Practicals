<?php

if (isset($_POST['submit'])){
	if(isset($_POST['str'])){
		$str = $_POST['str'];
		$elements = explode(' ',$str);
		sort($elements);
		$result = 'Sorted array is: ';
		foreach($elements as $element) {
			$result .= "$element ";
		}
	} else {
		die('DENIED');
	}
}

include "templates/header.php";

?>
<div class="main">
	<div class="header">
		<h3>Practical 7</h3>
		<p>Write a php webpage to sort an array</p>
	</div>
	<form action="/practical7.php" method="POST" class="input-form">
			<input type="text" class="input-number" name="str" placeholder="Enter an array: " required
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