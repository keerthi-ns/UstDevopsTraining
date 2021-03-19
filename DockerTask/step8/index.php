<?php
header("content-type: text");

$host = "db";
$username = "rooot";
$pw = "my!!root!!!pw";

$conn = new mysqli($host, $username, $pw);

if($conn->connect_error > 0) 
{
    echo $db->connect_error;
}else{
    echo "DB CONNECTION SUCCESSFULL\n\n";

    $results = mysqli_query($conn, "SHOW DATABASES;");
    while( $row = mysqli_fetch_row( $results)) {
        echo $row[0]. "\n";
    }
}