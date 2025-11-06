<?php
    //Start or continuo with current session
    session_start();

    //destroy current session
    session_destroy();

    //Destoy current session 
    header('refresh:0;url=signin')
?>