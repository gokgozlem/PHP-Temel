
<?php

// Verilen tablo
$tablo = [
    [11, "Mehmet", 10, 40, 70],
    [12, "Necati", 50, 80, 35],
    [13, "Elif", 20, 30, 40],
    [14, "Merve", 80, 60, 75]
];

// Yeni oluşturulan dizi
$sonucDizisi = [];

// Tabloyu döngü ile döndürme
foreach ($tablo as $ogrenci) {
    $ogrenciNo = $ogrenci[0];
    $isim = $ogrenci[1];
    $notlar = array_slice($ogrenci, 2); // Öğrenci notları

    // Yeni dizi oluşturma
    $sonucDizisi[$ogrenciNo] = [
        'isim' => $isim,
        'OgrnNo' => $ogrenciNo,
        'Notlar' => array_values($notlar)
    ];
}

// Öğrenci numaralarına göre sıralama
ksort($sonucDizisi);

// Sonucu ekrana yazdırma
foreach ($sonucDizisi as $ogrenciNo => $bilgiler) {
    echo "$ogrenciNo => [\n";
    echo "    'isim' => '{$bilgiler['isim']}',\n";
    echo "    'OgrnNo' => $ogrenciNo,\n";
    echo "    'Notlar' => [\n";
    
    foreach ($bilgiler['Notlar'] as $key => $not) {
        echo "        $key => $not,\n";
    }

    echo "    ]\n";
    echo "];\n\n";
}
?>
