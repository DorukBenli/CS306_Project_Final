
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="insertvoter.css">
</head>
<body>
    <h1 class= voter_record> VOTER RECORD FORM </h1>
    <div class ="second_div">
        <div class =  "voter_form">
            <form action="insertVoter.php" method="POST" class="form"> 
                <label for = "Vid">Voter ID: <label/>
                <input type="number" id="Vid" name="Vid" class="fields" required> 
                <label for = "Uname">Voter-name: <label/>
                <input type="text" id="Uname" name="Uname" class="fields" required>
                <label for = "Surname">Voter-Surname: <label/>
                <input type="text" id="Surname" name="Surname" class="fields" required>
                <label for = "Age">Voter-Age: <label/>
                <input type="number" id="Age" name="Age" class="fields" required>
                <label for = "Cid">Candidate-ID: <label/>
                <input type="number" id="Cid" name="Cid" class="fields" placeholder="Enter -1 to vote after insertion" required>
                <input type="submit" value="Submit" class ="submit_button">
            </form>
            <?php
            include "config.php"; 

            if (!empty($_POST['Vid'])){ 
                $Vid = $_POST['Vid']; 
                $Uname = $_POST['Uname'];
                $Surname = $_POST['Surname']; 
                $Age = $_POST['Age'];
                $Cid = $_POST['Cid'];
                if($Age >= 18)
                {
                    $sql_statement = "INSERT INTO voters(Vid, Uname, Surname, Age, Cid) VALUES ($Vid,'$Uname','$Surname',$Age,$Cid)"; 

                    $result = mysqli_query($db, $sql_statement);
                    echo "record has been saved!";
                } 
                else
                {
                    echo "Voters must be 18 or older!! ";
                }

            } 
            ?>
        </div>
    </div>

</body>
</html>







