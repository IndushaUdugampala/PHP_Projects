<html>

<head>
    <link rel="stylesheet" href="styles.css">
</head>

<body>
    <h3>Addition Calculator</h3>
    <form method="get" action="addition.php">
        First Number: <input name="first_num" type="number"><br>
        <br>
        Second Number: <input name="second_num" type="number"><br>
        <br>
        <button type="submit">ADD</button><br>
    </form>

    <h3>Division Calculator</h3>
    <form method="post" action="division.php">
        Numerator: <input name="numerator" type="number"><br>
        <br>
        Denominator: <input name="denominator" type="number"><br>
        <br>
        <button type="submit">DIVIDE</button><br>
    </form>
    <a href="index.php">Reset</a>
</body>

</html>