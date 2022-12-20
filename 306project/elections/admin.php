<?php 

include "config.php";

?>

<form action="delete_election.php" method="POST">
<select name="ids">

<?php

$sql_command = "SELECT Eid, description, Date FROM elections";

$myresult = mysqli_query($db, $sql_command);

    while($id_rows = mysqli_fetch_assoc($myresult))
    {
        $Eid = $id_rows['Eid'];
        $Description = $id_rows['Description'];
        $Date = $id_rows['Date'];
        echo "<option value=$Eid>". $Eid . " - " . $Date . "</option>";
    }

?>

</select>
<button class="del" >DELETE</button>
</form>

<div>
    <h2>Nav to other pages </h2>
    <a href="http://localhost/306project/elections/insert_election.php"><button>Go to Insert Page</button></a>
    <a href= "http://localhost/306project/elections/index.php"><button>See the previous elections</button> </a>

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