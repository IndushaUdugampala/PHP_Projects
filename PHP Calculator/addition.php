<html>

<body>
    <?php
    echo "<p>First Number is: " . $_GET['first_num'] . "</p>\n";
    echo "<p>Second Number is: " . $_GET['second_num'] . "</p>\n";
    echo "<p>Addition is: " . ($_GET['first_num'] + $_GET['second_num']) . "</p>\n";
    ?>

    <a href="index.php">Reset</a>
</body>

</html>