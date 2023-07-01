<?php
$riel = 2103942;
$kyat = 19092;
$krone = 109;
$lek = 9094;

echo "Riel: " . $riel;
echo "\nKyat: " . $kyat;
echo "\nKrone: " . $krone;
echo "\nLek: " . $lek;

$riel_rate = 4096.51;
$kyat_rate = 2088.54;
$krone_rate = 10.79;
$lek_rate = 100.87;


echo "\n\nRiel in USD: " . $riel / $riel_rate;
echo "\nKyat in USD: " . $kyat / $kyat_rate;
echo "\nKrones in USD: " . $krone / $krone_rate;
echo "\nLek in USD: " . $lek / $lek_rate;

$final_amount = $riel / $riel_rate + $kyat / $kyat_rate + $krone / $krone_rate + $lek / $lek_rate - 4;

echo "\n\nFinal Amount: USD " . $final_amount;