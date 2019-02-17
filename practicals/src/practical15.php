<?php

if (isset($_POST['submit'])){
	if(isset($_POST['num'])){
		$result = sumUptoNEven($_POST['num']);
		$num = $_POST['num'];
	} else {
		die('DENIED');
	}
}

include "templates/header.php";

function sumUptoNEven($num){
	$sum = 0;
	for($i=0;$i<=$num;$i+=2){
		$sum+=$i;
	}
	return "Sum: $sum";
}

?>
<div class="main">
	<div class="header">
		<h3>Practical 15</h3>
		<p>Write a php webpage to find sum of even numbers upto n</p>
	</div>
	<form action="/practical15.php" method="POST" class="input-form">
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