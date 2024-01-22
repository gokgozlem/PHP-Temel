<?php

    /*
        Sabit Değişkenler;
            define() fonksiyonu ile tanımlanır.
            Türkçe karakter ile başlayamaz.
            Sayı ile başlayamaz.
            Harf yada _ ile başlar.
            Büyük-küçük harfe duyarlıdır.
        Veri Türlerinde;
            Object hariç tüm veri türlerini kapsar.

    */

    $ozlem = "özlem gökgöz";
   // echo $ozlem;

    define("ozlem2", "özlem gökgöz");
    echo ozlem2;
?>