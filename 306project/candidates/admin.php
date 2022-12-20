<?php
    include "config.php";
?>
<form action="delete_candidate.php" method="POST">
<select name="ids">
<?php
    $sql_command = 
    "SELECT Cid, Name, Surname, Pid FROM Candidates";
    $myresult = mysqli_query($db, $sql_command);
    while($id_rows = mysqli_fetch_assoc($myresult)) {
        $Cid = $id_rows['Cid'];
        $Name = $id_rows['Name'];
        $Surname = $id_rows['Surname'];
        $Pid = $id_rows['Pid'];
        if($Cid != -1)
        {
            echo "<option value=$Cid>". $Cid . " - " . $Name . "</option>";
        }
    }
?>
</select>
<button class="del">DELETE</button>
</form>

<div>
    <h2>Nav to other pages </h2>
    <a href="http://localhost/306project/candidates/insertCandidate.php"><button>Go to Insert Page</button></a>
    <a href= "http://localhost/306project/candidates/index.php"><button>Go to Candidate List</button> </a>

</div>


<style>
body{
    padding: 0;
    margin: 0;
    font-family:sans-serif;
    background: linear-gradient(45deg,#131086, #b621f3);
    padding: 40px;
    background-repeat: no-repeat;
    justify-content: center;
    text-align: center;
}

form{

    width: 60%;
    height: 20%;
    justify-content: center;
    font-family: sans-serif;
    background-color: white ;
    border: 1px solid white;
    border-radius: 1em;
    margin:auto;
    margin-bottom:50px;

}

.del{
    border: none;
    background: linear-gradient(45deg,#131086, #b621f3);
    padding: 1rem;
    border-radius: 100px;
    text-align: center;
    width: 35%;
    margin:auto;
    margin-top: 20px;
    margin-bottom: 10px;
    font-size: 20px;
    display: block;
    color:white;
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

select{
    border: none;
    background: linear-gradient(45deg,#131086, #b621f3);
    padding: 1rem;
    border-radius: 100px;
    text-align: center;
    width: 35%;
    margin:auto;
    margin-top: 20px;
    font-size: 15px;
    display: block;
    color:white;
    background-color:#131086;
}

div{

    width: 60%;
    margin:auto;
    background-color: white ;
    border: 1px solid white;
    border-radius: 1em;
    height: 40%
    justify-content: center;
    font-family: sans-serif;

}

h2{
    color:#131086;
}
</style>