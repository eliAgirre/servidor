<html>
<body>

<table border="1">
	<?php 

		$num =$_GET["num"];

		//comprueba si esta vacío
		if(empty($num)){

		    echo "Valor vacio";//si no esta vacío comprueba si es un número
		    
		}
		else if(is_numeric($num)){

		    //si es un número comprueba si es negativo
		    if($num<0){

		        echo "Valor negativo";

		    }
		    else{

		        //si es positivo crea la tabla
		        for($i=0; $i<$num; $i++){

		            echo "<tr>
		            <td>$i</td>
		            <td>Smith</td>
		            </tr>";
		    	}
		    }

		    
		}else{

			//en cualquier otro caso (es un string)
		    echo "Valor no numerico";
		}

	?>
	
</table>

</body>
</html>