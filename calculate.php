<?php
$username = ($_POST['username']);
?>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculate</title>

    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="subheader">
        <p>welcome &nbsp; <strong><?php echo $username; ?></strong></p>
    </div>
    <form action="calculation.php" method="get">
        <?php
        $username = ($_POST['username']);
        ?>
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
    </form>
    </div>
</body>

</html>