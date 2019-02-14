<?php

if (isset($_POST['submit'])){
	if(isset($_POST['num'])){
		$result = factorial($_POST['num']);
		$num = $_POST['num'];
	} else {
		die('DENIED');
	}
}

include "templates/header.php";

function factorial($num){
	$result = 1;
	for($i=1;$i<=(int)$num;$i++)
		$result *= $i;
	return $result;
}

?>
<div class="main">
	<div class="header">
		<h3>Practical 2</h3>
		<p>Write a php webpage which contains a function to calculate factorial of number</p>
	</div>
	<form action="/practical2.php" method="POST" class="input-form">
			<input type="number" class="input-number" name="num" placeholder="Enter number: " required
				<?php if(isset($num)) echo "value=\"$num\""?>>
			<input type="submit" class="submit-button" name="submit" value="submit">
			<?php
				if(isset($result))
				{
					echo "<textarea readonly class=\"result-textarea\">###RESULT####\n\nFactorial of $num is $result </textarea>";
				} 
			?>
	</form>
</div>
<?php
	include "templates/footer.php";
?>