<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header>
            <h2>strona 1</h2>
        </header>
        <nav> 
            <a href="tabela.php">link1</a><br>
        </nav>
        <footer>
        c
        </footer>
        <aside>
        <?php
        
        $servername = "172.16.131.125";
        $username = "z_wer";
        $password = "gfd";
        $dbname = "z_wer";

        $conn = new mysqli($servername,$username,$password,$dbname);
        $sql = "SELECT * from produkty";
        $result = mysqli_query($conn,$sql);

        echo('<table border="1">');
        echo('<th>id_klient</th><th>imie</th><th>nazwa</th><th>koszt</th><th>ilosc</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['id_produkt'].'</td><td>'.$row['nazwa'].'</td>');
            echo('</tr>');

        }
        echo('</table>');



    ?>
        </aside>
        </main>
        e
        </main>
    </div>
</body>
</html>
