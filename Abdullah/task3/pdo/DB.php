<?php




$servername = "localhost";
$username = "root";
$password = "123";
$dbname = "NewDatabase";

try {
    $dbh = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    /* $sql = "INSERT INTO Student
     VALUES (103, 'MATHS', 03333,'lAHORE')";
     // use exec() because no results are returned
     $dbh->exec($sql);
     echo "New record created successfully";
    */ }
catch(PDOException $e)
{
    echo $sql . "<br>" . $e->getMessage();
}

