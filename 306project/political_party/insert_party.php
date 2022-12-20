<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="insert_party.css">
</head>
<body>
    <div class="outerdiv">
    <h2> Admin control panel for inserting party</h2>
        <div class="innerdiv">
            <form action="insert_party.php" method="POST"> 
                <label for = "Pid">Party-ID: <label/>
                <input type="number" id="Pid" name="Pid"> 
                <label for = "Name">Name: <label/>
                <input type="text" id="Name" name="Name">
                <input type="submit" value="Submit" class="button">
            </form>
            <?php
                include "config.php";
                if (!empty($_POST['Pid'])){ // Check Pid is not empty.
                    $Pid = $_POST['Pid'];
                    $Name = $_POST['Name'];
                    $sql_statement = "INSERT INTO political_parties(Pid, Name) 
                    VALUES ($Pid,'$Name')";
                    $result = mysqli_query($db, $sql_statement);
                    if($result == 1)
                    {
                        echo "<br>Succesefully inserted a party!";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>