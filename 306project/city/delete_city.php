<?php
    include "config.php";
    if(!empty($_POST['ids']))
    {
        $cityID = $_POST['ids'];
        $sql_statement = "DELETE FROM city WHERE cityID = $cityID";
        $result = mysqli_query($db, $sql_statement);
        echo "Your result is " . $result;
    }
?>