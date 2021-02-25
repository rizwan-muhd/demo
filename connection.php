<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "NMS";
    $connec = new mysqli($servername, $username, $password, $dbname);

    if ($connec -> connect_error)
    {
        die("connection failed".$connec -> connect_error );
    }
    else{
        echo "connection successfull";
    }

    $sql = "CREATE DATABASE NMS";
    if ($connec -> query($sql)== true)
    {
        echo "database create successfull";
    }
    else{
        echo "error".$connec->error;
    }
    $sql = "INSERT INTO FEEDBACK (FIRSTNAME, LASTNAME, ADDRESS, MOBILE)
    VALUES ('$_POST[fname]','$_POST[lname]','$_POST[adress]','$_POST[num]')";

if ($connec -> query($sql)== true)
{
    echo "values added";
}
else{
    echo "error".$sql. "<br>" .$connec->error;
}

    $connec -> close();
?>