<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="insert_coal.css">
</head>
<body>
    <div class="outerdiv">
    <h2> Admin control panel for Creating Coalitions</h2>
        <div class="innerdiv">
            <form action="insert_coal.php" method="POST"> 
                <label for = "Coal_ID">Coal-ID: <label/>
                <input type="number" id="Coal_ID" name="Coal_ID"> 
                <label for = "Name">Name: <label/>
                <input type="text" id="Name" name="Name">
                <input type="submit" value="Submit" class="button">
            </form>
            <?php
                include "config.php";
                if (!empty($_POST['Coal_ID'])){
                    $Coal_ID = $_POST['Coal_ID'];
                    $Name = $_POST['Name'];
                    $sql_statement = "INSERT INTO coalitions(Coal_ID, Name) 
                    VALUES ($Coal_ID,'$Name')";
                    $result = mysqli_query($db, $sql_statement);
                    if($result == 1)
                    {
                        echo "<br>Succesefully inserted a Coalition!";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>