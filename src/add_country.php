<?php
include("../connection.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $abbr = $_POST["abbr"];
    $code = $_POST["code"];

    // Inserta los datos en la tabla countries
    $query = "INSERT INTO countries (name, abbr, code) 
              VALUES ('$name', '$abbr', '$code')";

    $result = pg_query($conn, $query);

    if ($result) {
        echo "<script>alert('Country registered successfully'); window.location.href='countries.html';</script>";
    } else {
        echo "<script>alert('Error registering country'); window.history.back();</script>";
    }
}
?>
