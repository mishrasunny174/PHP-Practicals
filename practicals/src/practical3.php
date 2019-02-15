<?php

if (isset($_POST['submit'])){
	if(isset($_POST['num'])){
		$result = check_prime($_POST['num']);
	} else {
		die('DENIED');
	}
}

include "templates/header.php";

function check_prime($num){
	$number = (int)$num;
	for($i = 2; $i <= sqrt($number); $i++){
		if($number%$i === 0)
			return "$number is not prime";
	}
	return "$number is prime";
}

?>
<div class="main">
	<div class="header">
		<h3>Practical 3</h3>
		<p>Write a php webpage to check whether a number is prime or not</p>
	</div>
	<form action="/practical3.php" method="POST" class="input-form">
			<input type="number" class="input-number" name="num" placeholder="Enter number: " required
				<?php if(isset($num)) echo "value=\"$num\""?>>
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