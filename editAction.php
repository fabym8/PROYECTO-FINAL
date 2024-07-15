<?php

// Include the database connection file 
require_once("dbConnection.php");

if (isset($_POST['update'])) {

// Escape special characters in a string for use in an SQL statement

$id = mysqli_real_escape_string($mysqli, $_POST['id']);

$titulo = mysqli_real_escape_string($mysqli, $_POST['titulo']);
$anodepublicacion = mysqli_real_escape_string($mysqli, $_POST['anodepublicacion']);
$autor = mysqli_real_escape_string($mysqli, $_POST['autor']);
$comentarios = mysqli_real_escape_string($mysqli, $_POST['comentarios']);
$numerodeserie = mysqli_real_escape_string($mysqli, $_POST['numerodeserie']);


// Check for empty fields

if (empty($titulo) || empty($añodepublicacion) || empty($autor) || empty($comentarios) || empty($numerodeserie)) {

if (empty($titulo)) {

echo "<font color='red'>titulo field is empty.</font><br/>";

}

if (empty($anodepublicacion)) {

echo "<font color='red'>año de publicacion field is empty.</font><br/>";

}

if (empty($autor)) {

echo "<font color='red'>autor field is empty.</font><br/>";

}
if (empty($comentarios)) {

    echo "<font color='red'>comentarios field is empty.</font><br/>";
    
    }
    if (empty($numerosdeserie)){

        echo "<font color='red'>numero de serie field is empty.</font><br/>";

    }
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    )) {

        echo "<font color='red'>Email field is empty.</font><br/>";
        
        }
} else {

    // Update the database table
    
    $result = mysqli_query($mysqli, "UPDATE users SET 'name' = '$name', 'age' = '$age', 'email' = '$email', 'email' = '$email', 'email' = '$email' WHERE id = $id");
    
    // Display success message
    
    echo "<p><font color='green'>Data updated successfully!</p>";
    
    echo "<a href='index.php'>View Result</a>";
    
    }
    
    }