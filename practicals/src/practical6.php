<?php

if (isset($_POST['submit'])){
	if(isset($_POST['str'])){
		$str = $_POST['str'];
		$result = isPalindrome($_POST['str']);
	} else {
		die('DENIED');
	}
}

include "templates/header.php";

function isPalindrome($str){
	$str = strtolower($str);
	for ($i=0, $j= strlen($str)-1; $i!=$j; $i++,$j--)
	{
		if($str[$i]!=$str[$j])
			return "$str is not palindrome";
	}
	return "$str is palindrome";
}

?>
<div class="main">
	<div class="header">
		<h3>Practical 6</h3>
		<p>Write a php webpage to check whether string is palindrome or not</p>
	</div>
	<form action="/practical6.php" method="POST" class="input-form">
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