<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <div class="a">
    <?php
    $servername="172.16.131.125";
    $username="z_cvb";
    $password="ewq";
    $dbname="z_cvb";

    $conn= new mysqli($servername, $username, $password, $dbname);
    $sql="SELECT city.name as name FROM city, country WHERE city.CountryCode=country.Code and country.Continent='Europe' ORDER by city.Population DESC limit 3";
    $result= mysqli_query($conn, $sql);

    echo("<table border='1'>");
    echo("<th>name</th>");
    while($row= mysqli_fetch_assoc($result)){
        echo("<tr>");
        echo("<td>".$row['name']."</td>");
        echo("</tr>");
    }
    echo("</table>");




    $sql="SELECT city.name as name FROM city, country WHERE city.CountryCode=country.Code and country.Continent='Africa' ORDER by city.Population DESC limit 3";
    $result= mysqli_query($conn, $sql);

    echo("<table border='1'>");
    echo("<th>name</th>");
    while($row= mysqli_fetch_assoc($result)){
        echo("<tr>");
        echo("<td>".$row['name']."</td>");
        echo("</tr>");
    }
    echo("</table>");
    
    
    
    
    ?>
    </div>
    <div class="b">
    
    <img src="a.png" height="50px" weight="50px">
    
    <h3>Zadanka</h3>
    
    </div>
    <div class="c"> 
    <ul>
        <li>
        <a href="index.php">
        <span><img src="a.png" height="15px" weight="15px"></span>
        <span>Link1</span>
        </a></li>
        <li>
        <a href="index2.php">
        <span><img src="a.png" height="15px" weight="15px"></span>
        <span>Link2</span>
        </a></li>
        <li>
        <a href="index3.php">
        <span><img src="a.png" height="15px" weight="15px"></span>
        <span>Link3</span>
        </a></li>
        
    </ul>
    
    
    
    </div>
    <div class="d">
    <form action="insert.php"  method="POST">
    <label>Name:</label><input type="text" name="Name" value="abc"><br>
    <label>CountryCode</label><input type="text" name="CountryCode" value="POL"><br>
    <label>District</label><input type="text" name="District" value="AAA"><br>
    <label>Population</label><input type="number" name="Population" value="999"><br>
    <input type="submit" value="send">
    
    
    </form>
    
    
    </div>
    <div class="e">e</div>
    <div class="f">f</div>
</div>
    
</body>
</html>