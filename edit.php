<?php
// Include the database connection file 
require_once("dbConnection.php");
// Get id from URL parameter
$id = $_GET['id'];
// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM users WHERE id = $id");
// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);
$titulo = $resultData['titulo'];

$añodepublicacion = $resultData['añodepublicacion'];

$autor = $resultData['autor'];
$comentario = $resultData['comentarios'];
$numerodeserie = $resultData['numerodeserie'];

?>

<html>

<head>

<title>Edit Data</title>

</head>

<body>

<h2>Edit Data</h2>

<p>

<a href="index.php">Home</a>

</p>

<form name="edit" method="post" action="editAction.php">

<table border="0">

<tr>

<td>Titulo</td>

<td><input type="text" name="titulo" value="<?php echo $name; ?>">

</tr>

<tr>

</td> 

<td>Año de publiucacion</td>

<td><input type="text" name="anodepublicacion" value="<?php echo $age; ?>"></td>

</tr>

<tr>

<td>Autor</td>

<td><input type="text" name="autor" value="<?php echo $email; ?>"></td>

</tr>
<tr>

<td>Comentarios</td>

<td><input type="text" name="comentarios" value="<?php echo $email; ?>"></td>

</tr>
<tr>

<td>Numero de serie</td>

<td><input type="text" name="numerodeserie" value="<?php echo $email; ?>"></td>

</tr>

<tr>

<td><input type="hidden" name="id" value=<?php echo $id; ?>></td>

<td><input type="submit" name="update" value="Update"></td>

</tr>

</table>

</form>

</body>

</html>