<?php
$drinks = [
    "Coca-Cola" => 6.23,
    "Sprite" => 7.56,
    "Lemonade" => 9.89,
    "Portello" => 10.00,
    "Lime Mojito" => 25.85,
    "Chocolate Milkshake" => 20.99
];

$pastries = [
    "Croissant",
    "Baklava",
    "Apple strudel",
    "Croquembouche",
    "Éclair",
    "Empanada"
];
?>

<h1>Welcome to the Repetitive Cafe</h1>

<h3>Drinks!</h3>
<ul>
    <?php
    foreach ($drinks as $drink_name => $drink_price):
        echo "<li><b>$drink_name:</b> $$drink_price</li>";
        ?>
    <?php endforeach; ?>
</ul>
<h3>Pastries! ($2 each)</h3>
<ul>
    <?php for ($i = 0; $i < count($pastries); $i++):
        echo "<li><strong>$pastries[$i]</strong></li>"
            ?>
    <?php endfor; ?>
</ul>