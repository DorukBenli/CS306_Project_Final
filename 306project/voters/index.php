<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
        .div{
            width: 100%;
            height: 100%;
            min-height: calc(100vh - 40px*2);
            justify-content: center;
            border-radius: 10px;
        }
        .voterTable{
            width: 70%;
            border-collapse: seperated;
            background-color: #dddddd;
            border: 2px solid #131086;
            border-radius: 10px
        }

        td, th {
        height: 200%;
        border: 1px solid #131086;
        text-align: left;
        padding: 8px;
        }
        h1{
            text-align: center;
            color: white;
            text-shadow: 2px 0 rgb(0, 0, 0), -2px 0 rgb(0, 0, 0), 0 2px rgb(0, 0, 0), 0 -2px rgb(0, 0, 0),
                    1px 1px rgb(0, 0, 0), -1px -1px rgb(0, 0, 0), 1px -1px rgb(0, 0, 0), -1px 1px rgb(0, 0, 0);
        }
    </style>
    
</head>
<body>
    <div align="center" class ="div">
        <h1> VOTER LIST </h1>
        <table class="voterTable">
        <tr>
            <th>Voter id</th>
            <th>Voter name</th>
            <th>Voter Surname</th>
            <th>Voter Age</th>
            <th> Votes for </th>
        </tr>
        <?php 

        include "config.php"; // Makes mysql connection

        $sql_statement = "SELECT * FROM voters"; 

        $result = mysqli_query($db, $sql_statement); // Executing query

        while($row = mysqli_fetch_assoc($result)) { // Iterating the result
            $Voter_id = $row['Vid']; 
            $Uname = $row['Uname']; 
            $Surname = $row['Surname']; 
            $Age = $row['Age'];
            $Cid = $row['Cid'];
                    
            echo "<tr>" . "<th>". $Voter_id ."</th>". "<th>". $Uname ."</th>". "<th>" . $Surname . "</th>" ."<th>". $Age ."</th>"."<th>". $Cid ."</th>"."</tr>"; 
        }  
        ?>
        </table>
    </div>
</body>
</html>








