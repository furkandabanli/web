<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ders-3</title>
</head>

<body>
    
    <?php

    $not = rand(10, 100);
    if ($not >= 50) {
        echo "Geçtiniz-Notunuz:$not";
    } else {
        echo "Kaldınız-Notunuz:$not";
    }

    echo "<h3> Sık Kullanılan String Fonksiyonlar</h3>";

    $yazi = "Aydın Adnan Menderes Üniversitesi";
    echo gettype($yazi);
    echo "<br> Değişken içeriği: $yazi (" . gettype($yazi) . ")";

    echo "<br><br><br>";
    //İçeriğin Büyük Harfe Dönüştürülmesi

    echo "<br> \$yazi içeriğinin Büyük Harfle Yazılması(strtoupper ile): " . $buyuk_yazi = strtoupper($yazi);
    echo "<br> \$yazi içeriğinin Büyük Harfle Yazılması(mb_strtoupper ile): " . $buyuk_yazi = mb_strtoupper($yazi);

    echo "<br><br><br>";
    //İçeriğin Küçük Harfe Dönüştürülmesi

    echo "<br> \$yazi içeriğinin Küçük Harfle Yazılması(strtolower ile): " . $kucuk_yazi = strtolower($yazi);
    echo "<br> \$yazi içeriğinin Küçük Harfle Yazılması(mb_strtolower ile): " . $kucuk_yazi = mb_strtolower($yazi);

    echo "<br><br><br>";
    //İçeriğin İlk Harfinin Büyük Harfle Yazılması

    echo "<br> \$yazi içeriğinin ilk harfinin Büyük Harfle Yazılması(ucfirst ile): " . $ilk_harf = ucfirst($kucuk_yazi);

    echo "<br><br><br>";
    // İçeriğin Tüm Kelimelerinin ilk Harflerinin, Büyük Harfe Dönüştürülmesi

    echo "<br> \$yazi içeriğinin her kelimesinin, ilk harfinin Büyük Harfle Yazılması(ucwords ile): " . $kelime = ucwords($kucuk_yazi);
    
    echo "<br><br><br>";
    // İçeriğin Harf Sayısı:
    echo "<br> \$yazi içerisindeki harf sayısı: " . strlen($yazi);

    echo "<br><br><br>";
    //Ascii Char Karşılığı
    echo "<br> Karakter Karşılığı: " . chr(109);
    echo "<br> Karakter Karşılığı: " . chr(64);
   //Uygulama 32-127 char karşılıkları
    echo "<br> Ascii Karakterleri: ";
    for ($i = 32; $i <= 127; $i++){
        echo "$i"." - " .chr ($i) . " ";
    }

    echo "<br><br><br>";

    //metnin Parçalanarak diziye dönüştürülmesi
    $dizi = explode(" ", $yazi);
    echo "<br>";
    print_r($dizi);

    echo "<br><br><br>";

    //uygulama Paragrafdaki kelime ve cümle sayılarını alt alta yazdırınız

    $metin = " Lorem ipsum dolor sit amet consectetur adipisicing elit. Accusamus consectetur eum sunt suscipit velit quibusdam nemo recusandae similique, odio nesciunt molestias non atque nostrum fugit, distinctio quas perspiciatis voluptatibus et?
    Provident quaerat at repellendus corrupti cum accusantium soluta libero. Laudantium, non debitis blanditiis in voluptatum vitae atque reiciendis dignissimos. Atque illum dolor quos provident ut qui dolore mollitia aspernatur eaque?
    Ipsa ipsam dolorem tempore soluta fugiat obcaecati nam laboriosam quisquam a quaerat suscipit assumenda maiores voluptatibus aspernatur quas quis, officia laudantium id facere excepturi natus dolore. Expedita non at dicta!
    Distinctio debitis hic aut, officia beatae quam ab magnam doloremque at placeat dolorum assumenda aperiam aliquid nisi maiores tempora? Laborum debitis provident qui, nostrum sunt magni ipsam a alias voluptate.
    Dicta illo mollitia officiis nobis, sunt soluta id veniam maxime dolores nostrum sapiente error adipisci amet. Debitis aliquid, molestiae quaerat eius saepe sequi harum provident quisquam? Magnam repellat inventore eius?";

    $kelimelerDizisi = explode(" ",$metin);
    $cumlelerDizisi = explode(".", $metin);

    echo "<br> KelimeSayısı: " . count($kelimelerDizisi);
    echo "<br> cümleSayısı: " . count($cumlelerDizisi);
    
    echo "<br><br><br>";

    /* Uygulama
    veri tabanından gelen 2021-12-25 değerini 25-12-2021 şeklinde ekrana yazdırınız. */

    $tarih = "2021-12-25";
    $yenitarih = explode("-",$tarih);
    echo "$yenitarih[2]-$yenitarih[1]-$yenitarih[0]";

    echo "<br><br><br>";

    //Dizinin metne dönüştürülmesi (implode)
    $aylar = ["Ocak", "Şubat", "Mart", "Nisan", "Mayıs"];
    print_r($aylar);
    $aylarstring = implode(" ", $aylar);
    echo "String: $aylarstring";

    echo "<br><br>";
    /* str_split():
    Verilen bir metnin belirten sayı kadar ayrılarak bir dizi içeriğine aktarılması. Eğer sayı belirtilmezse metni harf harf böler */
    $iban="TR0010002000300040005000";
    $ibanYeni = str_split($iban, 4);
    print_r($ibanYeni);
    echo "<br><br>";

    foreach ($ibanYeni as $parca ){
        echo "$parca ";
    }


    ?>
</body>

</html>