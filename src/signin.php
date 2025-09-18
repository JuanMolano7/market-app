<?php
    //Step 1: get database connection
    require('../config/database.php');

    //Step2.get from-data
        $e_mail = $_POST['email'];
        $p_wd = $_POST['passwd'];

    //Step 3: query to validate data
    $sql_check_user = " 
        select 
            u.email,
            u.password
        from
            users u
        WHERE
            u.email = '$e_mail' and 
            u.password = '$p_wd'
        LIMIT 1
    ";
    //Step 4: execute query
    $res_check= pg_query($conn, $sql_check_user);

    if(pg_num_rows($res_check) > 0){
            echo "User exists. Go to main page !!!";
    } else {
        echo " Verify data";
    }

?>            