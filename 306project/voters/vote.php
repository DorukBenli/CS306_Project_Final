
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="insertvoter.css">
</head>
<body>
    <h1 class= voter_record> VOTING FORM</h1>
    <div class ="second_div">
        <div class =  "voter_form">
            <form action="vote.php" method="POST" class="form"> 
                <label for = "Vid">Voter ID: <label/>
                <input type="number" id="Vid" name="Vid" class="fields" required> 
                <label for = "Cid">Candidate-ID: <label/>
                <input type="number" id="Cid" name="Cid" class="fields" placeholder="-1 is dummy candidate" required>
                <input type="submit" value="Submit" class ="submit_button">
            </form>
            <?php
            include "config.php"; 

            if (!empty($_POST['Vid'])){ 
                $Vid = $_POST['Vid']; 
                $Cid = $_POST['Cid'];
                if($Cid != -1)
                {
                    $sql_statement = "UPDATE voters SET Cid = $Cid
                    WHERE Vid = $Vid;"; 

                    $result = mysqli_query($db, $sql_statement);
                    
                    // we could have querried for only 
                    $query = "SELECT candidates.Name, candidates.Surname FROM candidates WHERE candidates.Cid = $Cid";
                    $res = mysqli_query($db, $query);
                    while($row = mysqli_fetch_assoc($res))
                    {
                        $name = $row['Name']; 
                        $Sname = $row['Surname']; 
                        echo "Voter has voted to ". $name. " ". $Sname. "<br>";
                    }
                } 
                else
                {
                    echo "Please enter a valid candidate ID! ";
                }

            } 
            ?>
        </div>
    </div>

</body>
</html>
