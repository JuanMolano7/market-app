<?php
include("../connection.php"); // conexión a Supabase

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $abbr = $_POST["abbr"];
    $code = $_POST["code"];
    $country_id = $_POST["country_id"];

    $query = "INSERT INTO regions (country_id, name, abbr, code)
              VALUES ('$country_id', '$name', '$abbr', '$code')";

    $result = pg_query($conn, $query);

    if ($result) {
        echo "<script>alert('Region registered successfully'); window.location.href='regions.html';</script>";
    } else {
        echo "<script>alert('Error registering region'); window.history.back();</script>";
    }
}
?>
