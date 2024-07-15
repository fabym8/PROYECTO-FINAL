<html>

<head>

<title>Add Data</title>

</head>

<body>

<?php

// Include the database connection file 
require_once("dbConnection.php");

if (isset($_POST['submit'])) {

// Escape special characters in string for use in SQL statement 
$titulo = mysqli_real_escape_string($mysqli, $_POST['titulo']); 
$añodepublicacion = mysqli_real_escape_string($mysqli, $_POST['añodepublicacion']);
$autor= mysqli_real_escape_string($mysqli, $_POST['autor']);
$comentario = mysqli_real_escape_string($mysqli, $_POST['comentario']);
$numerodeserie= mysqli_real_escape_string($mysqli, $_POST['numerodeserie']);

// Check for empty fields

if (empty($titulo) || empty($añodepublicacion) || empty($autor)|| empty($comentarios)|| empty($numerodeserie)) {

if (empty($titulo)) {

echo "<font color='red'>titulo field is empty.</font><br/>";

}

if (empty($añodepublicacion)) {

echo "<font color='red'>Año de publicacion field is empty.</font><br/>";

}
if (empty($autor)) {

    echo "<font color='red'>Autor field is empty.</font><br/>";
    
    }
    if (empty($comentarios)) {

        echo "<font color='red'>Comentarios field is empty.</font><br/>";
        
        }
        if (empty($numerodeserie)) {

            echo "<font color='red'>Numero de serie field is empty.</font><br/>";
            
            }
    
    // Show link to the previous page
    
    echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    
    } else {
    
    // If all the fields are filled (not empty)
    
    // Insert data into database
    
    $result = mysqli_query($mysqli, "INSERT INTO users1 (`titulo`, `añodepublicacion`, `autor`,`comentarios`,`numerodeserie`) VALUES ('$titulo', '$añodepublicacion', '$autor','$comentarios','$numerodeserie' )");
    
    // Display success message
    
    echo "<p><font color='green'>Data added successfully!</p>";
    
    echo "<a href='index.php'>View Result</a>";
    }
}
?>
</body>
</html>