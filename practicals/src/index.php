<?php
require_once "templates/header.php";
$file_list = scandir(".");
?>

<div class="main">
	<div class="header">
		<h3>Practical List</h3>
	</div>
	<div class="links-block">
		<?php
		$file_list = array_filter($file_list, function ($file) {
			if (preg_match("/^p\w*.php$/", $file))
				return true;
		});
		foreach ($file_list as $file) {
			$file_name = preg_replace("/.php/", "", $file);
			$file_name = strtoupper($file_name);
			echo "<a href='$file' class='links'>$file_name</a><br>\n";
		}
		?>
	</div>
</div>

<?php
require_once "templates/footer.php";
?>