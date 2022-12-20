<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="insertcity.css">
</head>
<body>
    <div class="outerdiv">
    <h2> Admin control panel for inserting city </h2>
        <div class="innerdiv">
            <form action="insert_city.php" method="POST"> 
                <div class="form-item">
                    <label for = "cityID">City ID: <label/>
                    <input type="number" id="cityID" name="cityID"> 
                </div>
                <div class="form-item">
                    <label for="Name">Name:<label/>
                    <input type="text" id="Name" name="Name">
                </div>
                <div class="form-item">
                    <label for="Population">Population: <label/>
                    <input type="number" id="Population" name="Population">
                </div>
                <input type="submit" value="Submit" class="button">
            </form>
            <?php
                include "config.php";
                if (!empty($_POST['cityID'])){ // Check sname is not empty
                    $cityID = $_POST['cityID'];
                    $Name = $_POST['Name'];
                    $Population = $_POST['Population'];
                    $sql_statement ="INSERT INTO city(cityID, Name, Population) 
                    VALUES ($cityID,'$Name',$Population)";
                    $result = mysqli_query($db, $sql_statement);
                    if($result == 1)
                    {
                        echo "City has been inserted as a voting location " . "<br>";
                    }
                }
            ?>
            <script src="https://cdn.lordicon.com/fudrjiwc.js"></script>
            <lord-icon
                src="https://cdn.lordicon.com/elzslyvl.json"
                trigger="loop"
                delay="2000"
                colors="primary:#131086,secondary:#b621f3"
                style="width:150px;height:150px">
            </lord-icon>
        </div>
    </div>
</body>
</html>

