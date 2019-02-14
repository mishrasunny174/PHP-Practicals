<?php
include "templates/header.php";

function greatest($a,$b,$c){
	if($a > $b && $a > $c)
		return $a;
	else if($b > $c)
		return $b;
	else
		return $c;
}

if (isset($_POST['submit'])){
	$result = greatest($_POST['a'],$_POST['b'],$_POST['c']);
	$a = $_POST['a'];
	$b = $_POST['b'];
	$c = $_POST['c'];
}

?>
<body>
	<div class="main">
		<form action="/practical1.php" method="POST" class="input-form">
			<input type="number" class="input-number" name="a" placeholder="Enter value 1" >
			<input type="number" class="input-number" name="b" placeholder="Enter value 2" >			
			<input type="number" class="input-number" name="c" placeholder="Enter value 3" >	
			<input type="submit" class="submit button" name="submit">
			<?php
				if(isset($result))
				{
					echo "<div class=\"result\"> Greatest among the three is $result </div>";
				} 
			?>
		</form>
	</div>
</body>
<?php
	include "templates/footer.php";
?>