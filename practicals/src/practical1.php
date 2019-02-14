<?php

if (isset($_POST['submit'])){
	if(isset($_POST['a']) && isset($_POST['b']) && isset($_POST['c'])){
		$result = greatest($_POST['a'],$_POST['b'],$_POST['c']);
		$a = $_POST['a'];
		$b = $_POST['b'];
		$c = $_POST['c'];
	} else {
		die('DENIED');
	}
}

include "templates/header.php";

function greatest($a,$b,$c){
	if($a > $b && $a > $c)
		return $a;
	else if($b > $c)
		return $b;
	else
		return $c;
}

?>
<div class="main">
	<div class="header">
		<h3>Practical 1</h3>
		<p> Create a php page using functions for comparing three integers and print largest among the three </p>
	</div>
	<form action="/practical1.php" method="POST" class="input-form">
			<input type="number" class="input-number" name="a" placeholder="Enter value 1" required
				<?php if(isset($a)) echo "value=\"$a\""?>>
			<input type="number" class="input-number" name="b" placeholder="Enter value 2" required
			<?php if(isset($b)) echo "value=\"$b\""?>>			
			<input type="number" class="input-number" name="c" placeholder="Enter value 3" required
			<?php if(isset($c)) echo "value=\"$c\""?>>	
			<input type="submit" class="submit-button" name="submit" value="submit">
			<?php
				if(isset($result))
				{
					echo "<textarea readonly class=\"result-textarea\">###RESULT####\n\nGreatest among the three is $result </textarea>";
				} 
			?>
	</form>
</div>
<?php
	include "templates/footer.php";
?>