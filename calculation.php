<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="subheader">
        <p>welcome &nbsp;</p>
    </div>
    <form action="calculate.php" method="get">
        <div class="input-group">
            <label for="math">choose mode : </label>
            <input list="math" name="math">
            <datalist id="math">
                <option value="plus">
                <option value="minus">
                <option value="multiply">
                <option value="divide">
                <option value="angle">
                <option value="square">
            </datalist><br>
            <label for="math">inputnum : </label>
            <input type="number" name="num1"><br>
            <label for="math">inputnum : </label>
            <input type="number" name="num2"><br>
            <input class="btn-cal" type="submit" value="send">
        </div>
        <div class="result">
            <label for="result">result : </label>
            <?php $math = ($_GET['math']);
            $num1 = ($_GET['num1']);
            $num2 = ($_GET['num2']);
            if ($math == 'plus') {
                $result = $num1 + $num2;
                echo "$num1 + $num2 = $result";
                return 0;
            } else if ($math == 'minus') {
                $result = $num1 - $num2;
                echo "$num1 - $num2 = $result";
                return 0;
            } else if ($math == 'multiply') {
                $result = $num1 * $num2;
                echo "$num1 X $num2 = $result";
                return 0;
            } else if ($math == 'divide') {
                $result = $num1 / $num2;
                echo "$num1 / $num2 = $result";
                return 0;
            }
            ?>
        </div>
    </form>
    </div>
</body>

</html>