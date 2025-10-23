<?php
   require('../config/database.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marketapp - List users</title>
</head>
<body>
    <table border="1" align="center">
        <tr>
            <th>Fullname</th>
            <th>E-mal</th>
            <th>Ide. number</th>
            <th>Phone number </th>
            <th>Status</th>
            <th>Options</th>
        </tr>
        <?php
            sql_users = "
            select 
                u.firstname || ' ' || u.lastname as fullname,
                u.email,
                u.ide_number,
                u.mobile_number,
                case
                    when u.status = true then 'Active' else 'Inactive'
                end as status
            from 
                users u

            ";

            $result =pg_query($conn_local,$sql_users)

            if (!$result) {
                die("Error: ", pg_last_error())
            }
        ?>

        <tr>
            <td>Juan Molano</td>
            <td>juan1@gmial.com</td>
            <td>1087409961</td>
            <td>3114286908</td>
            <td>Active</td>
            <td>
                <a href="#">
                    <img src ="icons/search.jpg" width="20">
                </a>
                <a href="#"> 
                    <img src ="icons/upsate.png" width="20">
                </a>
                <a href="#"> 
                    <img src ="icons/delete.png" width="20">
                </a>
            </td>

        </tr>

</table>
</body>
</html>