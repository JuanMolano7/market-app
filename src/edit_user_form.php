 <?php
 require('../config/database.php');

    //Step 2. Get data or params
    $user_id = $_GET['userId'];

    $sql_get_user= "select * from usera where id = $user_id";
    $result = pg_query($conn_local,$sql_get_user);

    if(!$result){
                die("Error: ". pg_last_error());
    }
    while($row = pg_fetch_assoc($result)){
        $ide_number = $row['ide_number'];
        $fname = $row['firstname'];
        $lname = $row['lastname'];
        
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form name = "edit-user-form"action = "update_user.php" method = "post">
        <input 
            type="hidden" 
            name="iduser" 
            value= "<?php echo $user_id ?>" 
            readonly
            required/><br><br>
        <label>identification number: </label>
        <input 
            type="text" 
            name="idenumber" 
            value= "<?php echo $ide_number ?>" 
            readonly
            required/><br><br>
        <label>firsname: </label>
        <input 
            type="text" 
            name="fname" 
            value= "<?php echo $fname ?>" 
            required>

        <label>lastname: </label>
        <input 
            type="text" 
            name="lname" 
            value= "<?php echo $lname ?>" 
            required/><br><br>
        <button>Upadte user</button>
</form></form>

</body>
</html>