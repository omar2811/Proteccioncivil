<?php
	//conexion con la base de datos y el servidor
	$link = mysqli_connect("localhost","root","",'prototipo') or die("<h2>No se encuentra el servidor</h2>");
	if ($link) {
    	echo "conectado";
      }else{
      	echo "no conectado";
      }

	//obtenemos los valores del formulario
	$nombres = $_POST['nombres'];
	$apellidoP = $_POST['apellidoP'];
    $apellidoM = $_POST['apellidoM'];
    $correo = $_POST['correo'];
	$telefono = $_POST['telefono'];
   	$gridRadios = $_POST['gridRadios'];
    $denominacion = $_POST['denominacion'];
    $razon = $_POST['razon'];

	//echo $nombres;
    
    //Obtiene la longitus de un string
	//$req = (strlen($nombres)*strlen($apellidoP)*strlen($apellidoM)*strlen($correo)*strlen($telefono)*strlen($gridRadios)*strlen($denominacion)*strlen($razon)) or die("No se han llenado todos los campos");
    $sql= ("INSERT INTO persona VALUES ('$nombres', '$apellidoP', '$apellidoM', '$correo', '$telefono',  
    	'1', '$denominacion', '$razon')",$link);

    $ejecutar=mysqli_query($sql);

    if(!$ejecutar){

    	echo "hubo error";
    }else{
    	echo "datos guardados <br> <a href='index.html'>volver</a>";
    }
	
	//ingresamos la informacion a la base de datos
	//mysql_query("INSERT INTO persona (id_persona,nombres,apellidoP,apellidoM,correo,telefono,tipo,razon_social,denominacion_fiiscal) VALUES()",$link) or die("<h2>Error Guardando los datos</h2>");
	

		
	

?>