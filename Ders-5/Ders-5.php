<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-5</title>
</head>

<body>
    <h3>Php'de Diziler Devam</h3>
    <?php

    $isimler = array();

    $isimler[0] = "Ahmet";
    $isimler[0] = "Mehmet";
    $isimler[0] = "Ayşe";
    $isimler[0] = "Nur";

    echo "<pre>";
    print_r($isimler);
    echo "</pre>";

    $isimler2 = array();

    $isimler2["isim1"] = "Kerim";
    $isimler2["isim2"] = "Hatice";
    $isimler2["isim3"] = "Burcu";
    $isimler2[] = "Hüseyin";
    $isimler2[] = "Gülcan";

    echo "<pre>";
    print_r($isimler2);
    echo "</pre>";

    $ogrencidetay = array(
        "id" => 1,
        "adi" => "Nurullah",
        "soyadi" => "Yıldız",
        "bolum" => "Bilgisayar",
        "yas" => "25",
        "dersler" => array(
            "ders1" => "Veri Tabanı",
            "ders2" => "Web Programlama",
            "ders3" => "Mobil Programlama"
        ),
        "sinif" => "2"
    );
    
    /* Uygulama: Öğrenci Detayı Dizisini Alt Alta döngüleri kullanarak yazdırınız. */
    // Çıktısı
    foreach($ogrencidetay as $ogrencibilgi => $ogrenciadi) {  
        echo "$ogrencibilgi . $ogrenciadi<br>";
    }
    
    echo "<pre>";
    print_r($ogrencidetay);
    echo "</pre>";
   
    
    echo "Öğrencinin Dersleri: ";

    echo $ogrencidetay["dersler"]["ders1"] . "<br>";
    echo $ogrencidetay["dersler"]["ders2"] . "<br>";
    echo $ogrencidetay["dersler"]["ders3"] . "<br>";

    /* Uygulama: Öğrenci Detayları Dizisindeki Her Öğrencinin Detaylarını Alt Alta yazdırınız. */
    $ogrenciDetaylari = array(
        "ogrenci1" => array(
            "id"        => 1,
            "adi"       => "Nurullah",
            "soyadi"    => "Yıldız",
            "bolum"     => "Bilgisayar",
            "yas"       => "25",
            "dersler"   => array(
                "ders1" => "Veri Tabanı",
                "ders2" => "Web Programlama",
                "ders3" => "Mobil Programlama"
            ),
            "sinif"     => "2"
        ),
        "ogrenci2" => array(
            "id"        => 1,
            "adi"       => "Ayşen",
            "soyadi"    => "Güler",
            "bolum"     => "Makine",
            "yas"       => "22",
            "dersler"   => array(
                "ders1" => "Matematik",
                "ders2" => "Sayı Teorileri",
                "ders3" => "Model Geliştirme"
            ),
            "sinif"     => "4"
        )
    );
    //çıktısı
    echo "<br>Öğrenci 1'in Detayları:<br>";
    echo $ogrenciDetaylari["ogrenci1"]["id"] . "<br>";
    echo $ogrenciDetaylari["ogrenci1"]["adi"] . "<br>";
    echo $ogrenciDetaylari["ogrenci1"]["soyadi"] . "<br>";
    echo $ogrenciDetaylari["ogrenci1"]["bolum"] . "<br>";
    echo $ogrenciDetaylari["ogrenci1"]["yas"] . "<br>";
    echo $ogrenciDetaylari["ogrenci1"]["dersler"]["ders1"] . "<br>";
    echo $ogrenciDetaylari["ogrenci1"]["dersler"]["ders2"] . "<br>";
    echo $ogrenciDetaylari["ogrenci1"]["dersler"]["ders3"] . "<br>";
    echo $ogrenciDetaylari["ogrenci1"]["sinif"] . "<br>";
    echo "<br>Öğrenci 2'nin Detayları:<br>";
    echo $ogrenciDetaylari["ogrenci2"]["id"] . "<br>";
    echo $ogrenciDetaylari["ogrenci2"]["adi"] . "<br>";
    echo $ogrenciDetaylari["ogrenci2"]["soyadi"] . "<br>";
    echo $ogrenciDetaylari["ogrenci2"]["bolum"] . "<br>";
    echo $ogrenciDetaylari["ogrenci2"]["yas"] . "<br>";
    echo $ogrenciDetaylari["ogrenci2"]["dersler"]["ders1"] . "<br>";
    echo $ogrenciDetaylari["ogrenci2"]["dersler"]["ders2"] . "<br>";
    echo $ogrenciDetaylari["ogrenci2"]["dersler"]["ders3"] . "<br>";
    echo $ogrenciDetaylari["ogrenci2"]["sinif"] . "<br>";


    ?>

    <hr>
    <h3>Koşul İfadeleri (İf-Else) </h3>
    <p>if-else Bloklarında öncelikle koşul belirtilir ve sonraki dallanma koşula göre devam eder.</p>

    <h5>Karşılaştırma Operatörleri</h5>
    <ol>
        <li> == ($a == $b) Eşit ise. (Genellikle matematiksel bir karşılaştırma yapılır.)</li>
        <li> === ($a === $b) Denk ise. (Genellikle string bir karşılaştırma yapılır.)</li>
        <li> != ($a != $b) Eşit değil ise. (Genellikle matematiksel bir karşılaştırma yapılır.)</li>
        <li> !== ($a !== $b) Denk değil ise. (Genellikle string bir karşılaştırma yapılır.)</li>
        <li> > ($a > $b) Büyük ise.</li>
        <li> >= ($a >= $b) Büyük veya eşit ise.</li>
        <li>
            < ($a < $b) Küçük ise.</li>
        <li>
            <= ($a <=$b) Küçük veya eşit ise.</li>
    </ol>

    <h5> Mantıksal Operatörler</h5>
    <ol>
        <li> ! (olumsuzsa) (!$a) --> $a'nın değeri False ise True döner. Aksini yapar olumsuz mu diye sorar. </li>
        <li> && - AND (ve) ($a && $b) --> $a ve $b'nin değeri olumlu ise True döner, iki koşul da sağlanmak zorundadır.
            Koşullardan bir tanesi False dönerse genel değer False olur.</li>
        <li> || - OR (veya) ($a || $b) --> $a'nın veya $b'nin herhangi birisinin değeri olumlu ise sonuç True olarak döner.
            Herhangi birisinin koşulu sağlaması genel dönüşü True yapar.</li>
    </ol>

    <h4>Not:</h4>

    <ol>
        <li>
            Elseif sürekli tekrar eden sorfu bloğu açar.</li>
        <li>Else son kapanış koşuludur. (Herhangi bir şart gerektirmez. Hiçbir önkoşul gerçekleşmediğinde çalışacak son
            koşulu ifade eder.)
        </li>
    </ol>


    <?php

    /* if (condition) {
        # code...
    }elseif (condition) {
        # code...
    }elseif (condition) {
        # code...
    }elseif (condition) {
        # code...
    }else (condition) {
        # code...
    }*/


    $sayi1 = 123;
    $sayi2 = 345;
    $metin = "Adü";

    if ($sayi1) {
        echo "<br>if bloğu çalıştı : $sayi1";
    } else {
        echo "<br>Else bloğu çalıştı : $sayi1";
    }

    if (!$sayi1) {
        echo "<br>if bloğu çalıştı : $sayi1";
    } else {
        echo "<br>Else bloğu çalıştı";
    }

    if ($sayi1 == $sayi2) {
        echo "<br>Sayılar Eşit: $sayi1 = $sayi2";
    } else {
        echo "<br>Sayılar Eşit Değil: $sayi1 != $sayi2";
    }

    if ("ogrenci" === "ogrenci") {
        echo "<br>Girilen değerler aynı:";
    } else {
        echo "<br>Girilen değerler aynı değil:";
    }

    if ($metin === "Adü") {
        echo "<br>Girilen değerler aynı: $metin";
    } else {
        echo "<br>Girilen değerler aynı değil:";
    }

    if ($sayi1 > $sayi2 and "ogrenci" === "ogrenci") {
        echo "<br>koşullar sağlandı";
    } else {
        echo "<br>Koşullar sağlanmadı";
    }

    if (($sayi1 < $sayi2) or (15 > 25)) {
        echo "<br>koşullar sağlandı";
    } else {
        echo "<br>Koşullar sağlanmadı";
    }


    if ($sayi1 > $sayi2) {
        echo "<br> \$sayi1 değişkeni \$sayi2 değişkeninden büyüktür. $sayi1>$sayi2";
    } else {
        echo "<br> \$sayi1 değişkeni \$sayi2 değişkeninden küçüktür. $sayi1<$sayi2";
    }

    if ($sayi1 >= $sayi2) {
        echo "<br> \$sayi1 değişkeni \$sayi2 değişkeninden büyüktür veya eşittir. $sayi1>=$sayi2";
    } else {
        echo "<br> \$sayi1 değişkeni \$sayi2 değişkeninden küçüktür. $sayi1<$sayi2";
    }

    /* Uygulama:
       1- rastgele 0-100 arasında üretilen değerin tek veya çift olduğunu ekrana yazdırınız.
       2- rastgele 0-100 arasında üretilen değerin 50'den küçük olduğu durumlarda kaldınız, büyükse geçtiniz yazdırınız
       3- doğum yılına göre 18 yaşından büyük olanların ehliyet alabileceğini kontrol eden if bloğunu yazınız.  */


    //1- 
    echo "<h4>1-)</h4>";
    $rastgele = rand(0, 100);
    if ($rastgele % 2 == 0) {
        echo "<br> $rastgele sayısı çift";
    } else {
        echo "<br>$rastgele sayısı tek";
    }

    //2-
    echo "<h4>2-)</h4>";
    $rastgele = rand(0, 100);
    if ($rastgele >= 50) {
        echo "<br> $rastgele ile geçtiniz.";
    } else {
        echo "<br>$rastgele ile kaldınız.";
    }

    //3-
    echo "<h4>3-)</h4>";
    $dogumyili = rand(1970, 2020);
    echo "<br> Doğum yılınız: $dogumyili";
    $yas = date('Y') - $dogumyili;
    if ($yas > 18) {
        echo "<br> $yas yaşındasınız ehliyet alabilirsiniz.";
    } else {
        echo "<br> $yas yaşındasınız ehliyet almak için: " . 18 - $yas . " yıl daha beklemelisiniz...";
    }

    ?>
    <br><br><br><br><br><br><br><br>
</body>

</html>