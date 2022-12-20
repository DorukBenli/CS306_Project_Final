<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="insert_election.css">
</head>
<body>
    <div class="outerdiv">
    <h2> Admin control panel for inserting election </h2>
        <div class="innerdiv">
            <form action="insert_election.php" method="POST"> 
                <label for = "Eid">election-ID: <label/>
                <input type="number" id="Eid" name="Eid"> 
                <label for = "Description">Description: <label/>
                <input type="text" id="Description" name="Description">
                <label for = "Date">Date: <label/>
                <input type="Date" id="Date" name="Date">
                <input type="submit" value="Submit" class="button">
            </form>
            <?php
                include "config.php";
                if (!empty($_POST['Eid'])){ // Check sname is not empty
                    $Eid = $_POST['Eid'];
                    $Description = $_POST['Description'];
                    $Date = $_POST['Date'];
                    $sql_statement ="INSERT INTO elections(EID, description, Date) 
                    VALUES ($Eid,'$Description',$Date)";
                    $result = mysqli_query($db, $sql_statement);
                    echo "Your result is: " . $result;
                }
            ?>
        </div>
    </div>
</body>
</html>