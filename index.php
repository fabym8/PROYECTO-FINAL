<?php

require_once("dbConnection.php");

$result = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");

?>

<html>

<head>

<title>libreria </title>

</head>

<body>

<h2>Libreria</h2>

<p>

<a href="add.php">Add New Data</a>

</p>

<table width='80%' border=0>

<tr bgcolor='#DDDDDD'>

<td><strong>Titulo</strong></td>
<td><strong>Año de publicacion</strong></td>
<td><strong>Autor</strong></td>
<td><strong>Comentarios </strong></td>
<td><strong>Numero de serie</strong></td>



</tr>

<?php
// Fetch the next row of a result set as an associative array

while ($res = mysqli_fetch_assoc($result)) {

echo "<tr>";

echo "<td>".$res['titulo']."</td>";
echo "<td>".$res['anodepublicacion']."</td>";
echo "<td>".$res['autor']."</td>";
echo "<td>".$res['comentarios']."</td>";
echo "<td>".$res['numerodeserie']."</td>";

echo "<td><a href=\"edit.php?id=$res[id]\">Edit</a> |

<a href=\"delete.php?id=$res[id]\"

onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";

}

?>

</table>

</body>

</html>