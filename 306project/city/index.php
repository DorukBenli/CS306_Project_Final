<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="getcities.css" />
</head>
<body>
    <div id="outerdiv">
    <h1 class="heading">List of Cities</h1>
    <lord-icon
        src="https://cdn.lordicon.com/zniqnylq.json"
        trigger="hover"
        colors="primary:#4be1ec,secondary:#ffffff"
        style="width:150px;height:150px">
    </lord-icon>
        <div id="innerdiv"> 
            <table id="table">
            <tr id="otr">
                <th class= "spec">City id</th>
                <th class= "spec">City name</th>
                <th class= "spec">City Population</th>
            </tr>
                <?php 

                include "config.php"; // Makes mysql connection

                $sql_statement = "SELECT * FROM city"; 

                $result = mysqli_query($db, $sql_statement); // Executing query

                while($row = mysqli_fetch_assoc($result)) { // Iterating the result
                    $cityID = $row['cityID']; 
                    $CName = $row['Name']; 
                    $Population = $row['Population']; 
                    echo "<tr>"."<th>" . $cityID . "</th>". "<th>". $CName . "</th>" ."<th>". $Population ."</th>"."</tr>";
                } 
                ?>
            </table>
        </div>          
    </div>

    
</body>
</html>


