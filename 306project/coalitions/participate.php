<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <h1 class= voter_record> participate In election </h1>
    <div class ="outerdiv">
        <div class =  "innerdiv">
            <form action="participate.php" method="POST" class="form"> 
                <label for = "Coal_id">Coalition ID: <label/>
                <input type="number" id="Coal_id" name="Coal_id" class="fields" required> 
                <label for = "Eid">Election-ID: <label/>
                <input type="number" id="Eid" name="Eid" class="fields" required>
                <input type="submit" value="Submit" class ="submit_button">
            </form>
            <?php
            include "config.php"; 

            if (!empty($_POST['Coal_id'])){ 
                $Coal_id = $_POST['Coal_id']; 
                $Eid = $_POST['Eid'];
                $sql_statement = "INSERT INTO participates(Coal_id, Eid) VALUES ($Coal_id,$Eid)"; 
                $result = mysqli_query($db, $sql_statement);
                if($result == 1)
                {
                    echo "Succesefully enrolled coalition with id ".$Coal_id. " to election with ". $Eid."\n". "<br>";
                }
                
                else
                {
                    echo "could not enroll the coalition in election <br>";
                }
            } 
            ?>
        </div>
    </div>

<style>
body{
    padding: 0;
    margin: 0;
    font-family: "Inter" sans-serif;
    background: linear-gradient(45deg,#131086, #b621f3);
    padding: 40px;
    background-repeat: no-repeat;
    justify-content: center;
    text-align: center;
    
}

.outerdiv{
    width: 100%;
    height: 100%;
    min-height: calc(100vh - 40px*2);
    justify-content: center;
    border-radius: 10px;
    font-family: sans-serif;
}

.innerdiv{
    width: 600px;
    height: 600px;
    display: block;
    justify-content: center;
    border: 1px solid white;
    border-radius: 1em;
    padding: 75px;
    background-color: white ;
    margin: auto;
}

input[type="submit"]{
    border: none;
    background: linear-gradient(45deg,#131086, #b621f3);
    padding: 1rem;
    border-radius: 100px;
    text-align: center;
    width: 62%;
    margin-top: 10px;
    font-size: 20px;
    color: white;
}

input[type="text"], [type="number"], [type="Date"]
{
    border: 1px solid black;
    height: 55px;
    padding: 0 2rem;
    width: 50%;
    outline: none;
    transition: background .5s;
    font-size: 18px;
    border-radius: 100px;
    margin-bottom: 20px;
    display: inline-block;
}

.form-item {
    justify-content: center;
    margin-bottom: auto
}

label
{
    padding-left: 10px;
    display: block;
    background-color: white;
    font-size: 18px;
}

form{
    margin-bottom: 50px;
}

h1{
    color: white;
    text-align: center;
}

button{
    border: none;
    background: linear-gradient(45deg,#131086, #b621f3);
    padding: 1rem;
    border-radius: 100px;
    text-align: center;
    width: 30%;
    margin:auto;
    margin-top: 20px;
    margin-bottom: 10px;
    font-size: 20px;
    display: inline;
    color:white;
}
</style>

</body>
</html>

