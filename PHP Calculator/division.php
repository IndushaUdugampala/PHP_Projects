<html>

<body>
    <?php
    echo "<p>Numerator is: " . $_POST['numerator'] . "</p>\n";
    echo "<p>Denominator is: " . $_POST['denominator'] . "</p>\n";
    echo "<p>Division is: " . ($_POST['numerator'] / $_POST['denominator']) . "</p>\n";
    ?>

    <a href="index.php">Reset</a>
</body>

</html>