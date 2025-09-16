<?php
    //Step 1: get database connection
    require('../config/database.php');

    //Step2.get from-data
        $f_name = $_POST['fname'];
        $l_name = $_POST['lname'];
        $m_number = $_POST['mnumber'];
        $id_number = $_POST['id_number'];
        $e_mail = $_POST['email'];
        $p_wd = $_POST['passswd'];

        $enc_pase =password_hash($p_wd, PASSWORD_DEFAULT);
        
        $check_email = "
        SELECT 
            u.email
        FROM
            users u
        WHERE
            u.email = '$e_mail' or ide_number = '$id_number'
        LIMIT 1
        ";
        $res_check= pg_query($conn, $check_email);
        if(pg_num_rows($res_check) > 0){
            echo "<script>alert('User already exists');</script>";
            header('refresh:0; url=signup.html');
        } else {
            //Step 3:create query to insert into
    $query="
    INSERT INTO users (
            firstname, 
            lastname, 
            mobile_number, 
            ide_number, 
            email
            password) 
    VALUES (
            '$f_name', 
            '$l_name', 
            '$m_number', 
            '$id_number', 
            '$e_mail' 
            '$enc_pase'
         )
    ";
 
    //Step 4 excuse query
    $res = pg_query($conn, $query);

    //Step 5 Validate result 
    if ($res) {
        //echo "User has been created successfully";
        echo"script>alert('Succes !!! Go to login');</script>";
        header('refresh:0; url=signin.html');
    } else {
        echo "Something went wrong";
    } 
        }
?>