<?php

$conn = mysqli_connection(DB_Host, DB_User, DB_PASS, DB_NAME);

if(mysqli_connect_err){
    echo 'Failed to connect to MySQL '. mysqli_connect_err();
}