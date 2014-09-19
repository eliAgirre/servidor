<html>
<body>

<?php
// No funciona cuando se envia un valor no numerico!!!
	$num = 0;

	if(is_numeric($_GET["num"]) && $_GET["num"] > 0){ //Si el valor es numerico y es mayor que 0.

		$num = $_GET["num"];

	}
	else{

		echo "Debe insertar un numero";
		$num = 0;

	}
?>

<br>

<table border="1">

	<?php

		for ($x=0;$x<$num;$x++) {

			echo "<tr>

		    <td>Eli</td>
		    <td>Agirre</td>

		  	</tr>";
		}

	?>

</table>

</body>
</html>