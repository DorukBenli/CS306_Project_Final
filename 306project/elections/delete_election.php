<?php

include "config.php";

if(!empty($_POST['ids']))
{
    $Eid = $_POST['ids'];
    $sql_statement = "DELETE FROM elections WHERE Eid = $Eid";
    $result = mysqli_query($db, $sql_statement);
    echo "Your result is " . $result;
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
</body>
</html>