<?php
	session_start();
?>

<!DOCTYPE html>
<html>
<body>
	<?php
		echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
		echo "Favorite animla is " . $_SESSION["favanimal"] . ".";
	?>
</body>
</html>