<?php
    function conectar(){
		$con=mysqli_connect("localhost","root","","delivery_system");

if (mysqli_connect_errno()){
	echo "fallo al conectar: " . mysqli_connect_error();
}else{
	echo "conectado";
}
	} 
?>


