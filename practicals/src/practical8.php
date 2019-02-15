<?php

if (isset($_POST['submit'])){
	if(isset($_POST['str'])){
		$str = $_POST['str'];
		$result = removeWhitespace($str);
	} else {
		die('DENIED');
	}
}

include "templates/header.php";

function removeWhitespace($str) {
	$result = '';
	for($i = 0; $i<strlen($str); $i++){
		if($str[$i]==' '||$str[$i]=="\t")
			continue;
		$result .= $str[$i];
	}
	return $result;
}

?>
<div class="main">
	<div class="header">
		<h3>Practical 8</h3>
		<p>Write a php webpage to remove whitespace from a string</p>
	</div>
	<form action="/practical8.php" method="POST" class="input-form">
			<input type="text" class="input-number" name="str" placeholder="Enter a string " required
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