<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-4</title>
</head>

<body>

    <h3>Php'de Diziler</h3>
    <ol>
        <li>Dİzi oluşturmak için <strong>array( )</strong> fonksiyonu veya <strong>[ ]</strong> kullanılabilir. </li>
        <li>Dİzi içerisinde farklı türden bir çok değer bulunabilir. (int, string double, obje)(1,2,3, "Ali","Ahmet","125,20")</li>
        <li>"echo $diziadi" ile dizi içeriği ekrana yazdırılamaz. Array to String Conversiyon hatası verir. Fakat dizinin örneğin 3 indisine sahip elemanı "echo $diziadi[3]" şeklinde yazdırılabilir. </li>
        <li>Dizinin içerisindeki string ifadeler çift tırnak ("") içerisine yazılır.</li>
        <li>Dizinin içerisindeki int ifadeler direkt yazılabilir.</li>
        <li>Dizi elemanları birbirinden virgül (,) ile ayrılır.</li>
        <li>Dizi içerisinde indisler varsayılan olarak 0'dan başlar.</li>
        <li>Diziler içerisinde diziler tanımlanabilir.</li>
    </ol>

    <?php
    /* Telefon numarasını 3'er 3'er bölün */
    $tel = array(
        "gsm" => "5519687280",
    );
    $gsm = str_split($tel["gsm"], 3);

    foreach ($gsm as $value) {
        echo $value . " ";
    } 

    $dizi1 = array(1, 2, 3, 4, "kemal", "arıca", 130.5);
    $dizi2 = array(1, "tarık", "koca", 227.5);

    echo "<pre>";
    print_r($dizi1);
    echo "</pre>";

    echo "<pre>";
    print_r($dizi2);
    echo "</pre>";

    echo "Dizinin 5. elemanı: $dizi1[5]";
    echo "<br>Dizinin 5. elemanı:" . gettype($dizi1[5]);

    echo "<br>Dizinin 0. elemanı: $dizi1[0]";
    echo "<br>Dizinin 1. elemanı: $dizi1[1]";
    echo "<br>Dizinin 2. elemanı: $dizi1[2]";
    echo "<br>Dizinin 3. elemanı: $dizi1[3]";
    echo "<br>Dizinin 4. elemanı: $dizi1[4]";
    echo "<br>Dizinin 5. elemanı: $dizi1[5]";
    echo "<br>Dizinin 6. elemanı: $dizi1[6]";

    echo "<h3> Dizinin içeriğinin foreach döngüsü ile yazdırılması</h3>";

    foreach ($dizi1 as $item); {
        echo $item . "<br>";
    }

    echo "<h3> Dizinin içeriğinin foreach döngüsü ile yazdırılması - 2</h3>";

    foreach ($dizi1 as $key => $value); {
        echo "$key - $value <br>";
    }

    echo "<h3> Dizinin içeriğinin for döngüsü ile yazdırılması</h3>";

    for ($i = 0; $i < count($dizi1); $i++) {
        echo $dizi1[$i] . "<br>";
    }

    $sayilar = array(1, 2, 3, 4, 5, 6);

    $sayilar = array(
        array(1, 3, 5, 7, 9),
        array(2, 4, 6, 8, 10)
    );

    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";

    echo "sayilar dizisinin içindeki 2. dizinin 3 indisli elemanı:" . $sayilar[1][3];
    echo "<br>sayilar dizisinin içindeki 1. dizinin 4 indisli elemanı:" . $sayilar[0][4];

    echo "<br>----------";

    $sayilar = array(
        "integer" => array(55, 23, 15, 24),
        "double" => array(13.5, 2.5, 1.36)
    );

    echo "<pre>";
    print_r($sayilar);
    echo "</pre>";

    echo "sayilar dizisinin içindeki 1. dizinin 1 indisli elemanı:" . $sayilar["integer"][1];
    echo "<br>sayilar dizisinin içindeki 1. dizinin 2 indisli elemanı:" . $sayilar["double"][2];

    $bilgiler=array(
        "id"=>"0",
        "adi"=> "neslihan",
        "soyadi"=> "gülmez",
        "gsm" => "555 666 55 44",
        "yas"=> 32
    );

    echo "<pre>";
    print_r($bilgiler);
    echo "</pre>";



    

    ?>


</body>

</html>