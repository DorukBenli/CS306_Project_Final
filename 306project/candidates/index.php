<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="getcandidates.css" />
</head>
<body>
    <div id="outerdiv">
    <h1 class="heading">List of Candidates</h1>
    <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
    <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
    <lord-icon
        src="https://cdn.lordicon.com/zniqnylq.json"
        trigger="hover"
        colors="primary:#4be1ec,secondary:#ffffff"
        style="width:150px;height:150px">
    </lord-icon>
        <div id="innerdiv"> 
            <table id="table">
            <tr id="otr">
                <th class= "spec">Candidate id</th>
                <th class= "spec">Candidate name</th>
                <th class= "spec">Candidate Surname</th>
                <th class= "spec">Party-Id</th>
            </tr>
                <?php 

                include "config.php"; // Makes mysql connection

                $sql_statement = "SELECT * FROM candidates"; 

                $result = mysqli_query($db, $sql_statement); // Executing query

                while($row = mysqli_fetch_assoc($result)) { // Iterating the result
                    $Cid = $row['Cid']; 
                    $Name = $row['Name']; 
                    $Surname = $row['Surname']; 
                    $Pid = $row['Pid'];
                    if($Cid != -1)
                    {
                        echo "<tr>"."<th>" . $Cid . "</th>". "<th>". $Name . "</th>" ."<th>". $Surname ."</th>" . "<th>" .$Pid ."</th>"."</tr>";
                    } 
                    
                } 
                ?>
            </table>
        </div>          
    </div>
</body>
</html>


