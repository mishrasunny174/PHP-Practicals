<?php

if (isset($_POST['submit'])) {
    if (isset($_POST['num'])) {
        $num = $_POST['num'];
        $result = 'Fibonacci series upto ' . $num . ' is: ';
        for ($i = 0; $i <= $num; $i++) {
            $result .= fib($i) . ' ';
        }
    } else {
        die('DENIED');
    }
}

include "templates/header.php";

function fib($num)
{
    $num = (int)$num;
    if ($num <= 1)
    {
        return $num;
    }
    return (fib($num - 1) + fib($num - 2));
}

?>
<div class="main">
	<div class="header">
		<h3>Practical 18</h3>
		<p>Write a php webpage to print fibonacci series upto n</p>
	</div>
	<form action="/practical18.php" method="POST" class="input-form">
			<input type="number" class="input-number" name="num" placeholder="Enter number: " required
				<?php if (isset($num)) echo "value=\"$num\"" ?>>
			<input type="submit" class="submit-button" name="submit" value="submit">
			<?php
    if (isset($result)) {
        echo "<textarea readonly class=\"result-textarea\">###RESULT####\n\n$result</textarea>";
    }
    ?>
	</form>
</div>
<?php
include "templates/footer.php";
?>