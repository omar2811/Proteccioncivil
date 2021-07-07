<?php
// Conectando y seleccionado la base de datos  
$conexion = pg_connect("host='localhost' dbname=prueba port=5432 user=postgres password=123") or die ("error de conexcion".pg_last_error());
    if ($conexion) {
    	echo "conectado";
      }else{
      	echo "no conectado";
      }

// Realizando una consulta SQL
$query = 'SELECT * FROM cursos';
$result = pg_query($query) or die('La consulta fallo: ' . pg_last_error());

// Imprimiendo los resultados en HTML
echo "<table>\n";
while ($line = pg_fetch_array($result, null, PGSQL_ASSOC)) {
    echo "\t<tr>\n";
    foreach ($line as $col_value) {
        echo "\t\t<td>$col_value</td>\n";
    }
    echo "\t</tr>\n";
}
echo "</table>\n";

// Liberando el conjunto de resultados
pg_free_result($result);

// Cerrando la conexión

?>