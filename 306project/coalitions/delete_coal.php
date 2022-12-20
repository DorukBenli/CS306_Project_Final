<?php

include "config.php";

if(!empty($_POST['ids']))
{
    $Coal_ID = $_POST['ids'];
    $sql_statement = "DELETE FROM coalitions WHERE Coal_id = $Coal_ID";
    $result = mysqli_query($db, $sql_statement);
    if($result == 1)
    {
        echo "successefuly removed party!";
    }
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