<?php
include("../connection.php"); // conexión a Supabase

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $abbr = $_POST["abbr"];
    $code = $_POST["code"];
    $region_id = $_POST["region_id"];

    $query = "INSERT INTO cities (region_id, name, abbr, code)
              VALUES ('$region_id', '$name', '$abbr', '$code')";

    $result = pg_query($conn, $query);

    if ($result) {
        echo "<script>alert('City registered successfully'); window.location.href='cities.html';</script>";
    } else {
        echo "<script>alert('Error registering city'); window.history.back();</script>";
    }
}
?>
