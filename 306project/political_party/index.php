<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="getelections.css" />
</head>
<body>
    <div id="outerdiv">
    <h1 class="heading">List of parties</h1>
        <div id="innerdiv"> 
            <table id="table">
            <tr id="otr">
                <th class= "spec">Party id</th>
                <th class= "spec">Party Name</th>
            </tr>
                <?php 

                include "config.php"; // Makes mysql connection

                $sql_statement = "SELECT * FROM political_parties"; 

                $result = mysqli_query($db, $sql_statement); // Executing query

                while($row = mysqli_fetch_assoc($result)) { // Iterating the result
                    $Pid = $row['Pid']; 
                    $Name = $row['Name']; 
                    if($Pid != 0)
                    {
                    echo "<tr>"."<th>" . $Pid . "</th>". "<th>". $Name . "</th>"."</tr>";
                    }
                } 
                ?>
            </table>
        </div>          
    </div>

<style>

body {
    padding: 0;
    margin: 0;
    font-family: "Inter" sans-serif;
    background: linear-gradient(45deg,#131086, #b621f3);
    padding: 40px;
    background-repeat: no-repeat;
    justify-content: center;
    text-align: center;
}

#outerdiv{
    width: 100%;
    height: 100%;
    min-height: calc(100vh - 40px*2);
    justify-content: center;
    border-radius: 10px;
}

#innerdiv{
    display: flex;
    justify-content: center;
    height: 80%;
    font-family: sans-serif;
}

table{
    width: 70%;
    border-collapse: seperated;
    background-color: #dddddd;
    border: 2px solid #131086;
    border-radius: 10px
}
tr:last-of-type{
    border-bottom: 7px solid #131086 ;
}


th{
    border:2px solid #131086;
}

.spec{
    background-color: #131086;
    color: #ffffff;
    text-align: center;
    font-size: 1.3em;
    border: 2px solid #131086;
    
}
.heading{
    font-family: sans-serif;
    text-align: center;
    color: white;
    text-shadow: 2px 0 rgb(0, 0, 0), -2px 0 rgb(0, 0, 0), 0 2px rgb(0, 0, 0), 0 -2px rgb(0, 0, 0),
            1px 1px rgb(0, 0, 0), -1px -1px rgb(0, 0, 0), 1px -1px rgb(0, 0, 0), -1px 1px rgb(0, 0, 0);
}






</style>
    
</body>
</html>