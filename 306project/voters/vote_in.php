
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="insertvoter.css">
</head>
<body>
    <h1 class= voter_record> SELECT VOTING LOCATION </h1>
    <div class ="second_div">
        <div class =  "voter_form">
            <form action="vote_in.php" method="POST" class="form"> 
                <label for = "Vid">Voter ID: <label/>
                <input type="number" id="Vid" name="Vid" class="fields" required> 
                <label for = "cityID">City-ID: <label/>
                <input type="number" id="cityID" name="cityID" class="fields" required>
                <input type="submit" value="Submit" class ="submit_button">
            </form>
            <?php
            include "config.php"; 

            if (!empty($_POST['Vid'])){ 
                $Vid = $_POST['Vid']; 
                $cityID = $_POST['cityID'];
                
                $sql_statement = "INSERT INTO votes_in(Vid,cityID) VALUES ($Vid,$cityID)";
                $result = mysqli_query($db, $sql_statement);
                if($result == 1)
                {
                    echo "Voter with ID" . $Vid . " has voted in ".$cityID."<br>";
                }

            } 
            ?>
        </div>
    </div>

</body>
</html>
