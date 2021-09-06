<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        
        $servername = "172.16.131.125";
        $username = "z_wer";
        $password = "gfd";
        $dbname = "z_wer";

        $conn = new mysqli($servername,$username,$password,$dbname);
        $sql = "SELECT * from koszyk,produkty,zamowienia,klienci where koszyk.id_produkt=produkty.id_produkt and koszyk.id_zamowienie=zamowienia.id_zamowienie and klienci.id_klient=zamowienia.id_klient";
        $result = mysql_query($conn,$sql);

        echo('<table border="1">');
        echo('<th>id_klient</th><th>imie</th><th>nazwa</th><th>koszt</th><th>ilosc</th>');
        while($row=mysqli_fetch_assoc($result)){
            echo('<tr>');
            echo('<td>'.$row['klienci.id_klient'].'</td><td>'.$row['klienci.imie'].'</td><td>'.$row['produkty.nazwa'].'</td><td>'.$row['produkty.koszt'].'</td><td>'.$row['koszyk.ilosc'].'</td>');
            echo('</tr>');

        }
        echo('</table>');



    ?>
</body>
</html>