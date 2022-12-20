<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="insertCandidate.css">
</head>
<body>
    <div class="outerdiv">
    <h2> Admin control panel for inserting candidates </h2>
        <div class="innerdiv">
            <form action="insertCandidate.php" method="POST"> 
                <div class="form-item">
                    <label for = "Cid">Candidate ID: <label/>
                    <input type="number" id="Cid" name="Cid"> 
                </div>
                <div class="form-item">
                    <label for="Name">Name:<label/>
                    <input type="text" id="Name" name="Name">
                </div>
                <div class="form-item">
                    <label for="Surname">Surname: <label/>
                    <input type="text" id="Surname" name="Surname">
                </div>
                <div class="form-item">
                    <label for="Pid">Party - ID: <label/>
                    <input type="number" id="Pid" name="Pid">
                </div>
                <input type="submit" value="Submit" class="button">
            </form>
            <?php
                include "config.php";
                if (!empty($_POST['Cid'])){ 
                    $Cid = $_POST['Cid'];
                    $Name = $_POST['Name'];
                    $Surname = $_POST['Surname'];
                    $Pid = $_POST['Pid'];
                    $sql_statement ="INSERT INTO candidates(Cid, Name,Pid,Surname) 
                    VALUES ($Cid,'$Name',$Pid,'$Surname')";
                    $result = mysqli_query($db, $sql_statement);
                    if($result == 1)
                    {
                        echo "Candidate has been inserted " . "<br>";
                    }
                    else{
                        echo"<h3> Error Inserting Candidate </h3>";
                    }
                }
            ?>
        </div>
    </div>
</body>
</html>