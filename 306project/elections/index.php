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
    <h1 class="heading">List of Elections</h1>
        <div id="innerdiv"> 
            <table id="table">
            <tr id="otr">
                <th class= "spec">Election id</th>
                <th class= "spec">Election description</th>
                <th class= "spec">Election Date</th>
            </tr>
                <?php 

                include "config.php"; // Makes mysql connection

                $sql_statement = "SELECT * FROM elections"; 

                $result = mysqli_query($db, $sql_statement); // Executing query

                while($row = mysqli_fetch_assoc($result)) { // Iterating the result
                    $Eid = $row['Eid']; 
                    $Description = $row['Description']; 
                    $Date = $row['Date']; 
                    echo "<tr>"."<th>" . $Eid . "</th>". "<th>". $Description . "</th>" ."<th>". $Date ."</th>"."</tr>";
                } 
                ?>
            </table>
        </div>          
    </div>

    
</body>
</html>