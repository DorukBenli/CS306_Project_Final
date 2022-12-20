<?php
    include "config.php";
    if(!empty($_POST['ids']))
    {
        $Cid = $_POST['ids'];
        $sql_statement = "DELETE FROM candidates WHERE Cid = $Cid";
        $result = mysqli_query($db, $sql_statement);
        echo "Your result is " . $result;
    }
?>