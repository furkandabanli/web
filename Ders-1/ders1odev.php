<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-1_Odev</title>
    <style>
        table, th,  td{
            
        border: 2px solid black;
        border-collapse: collapse;
        }
        th, td {
        background-color: cyan;}
        table{width: 100%;text-align: left;}

        
        
    </style>
</head>
<body>
    <?php 
    $uni = "ADÜ";
    $myo = "AYMES";
    $ad = "Furkan";
    $soyad = "Dabanlı";
    $no = "216001033";    
    ?>    
    <table>
        <tr>
            <th>Üniversite</th>
            <th>MYO</th>
            <th>Ad</th>
            <th>Soyad</th>
            <th>Öğrenci No</th>
        </tr>
        <tr>
            <td><?php echo $uni ?></td>
            <td><?php echo $myo ?></td>
            <td><?php echo $ad ?></td>
            <td><?php echo $soyad ?></td>
            <td><?php echo $no ?></td>
        </tr>
        
    </table>
</body>
</html>