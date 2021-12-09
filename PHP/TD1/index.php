<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<?php
$var1 = 6;
$var2 = 1.3;
$var3 = 'Variable 3';
?>
<body>
    <?php
        echo '<strong> Voici mon premier programme PHP </strong><br/>' . "\n";
        echo 'C\'est pas mal non ? <br/>';
    ?>
    <?php echo "$var1 + $var2"; ?>
    <?php echo '=',$var1 + $var2, '<br/>'; ?>

    <?php
    echo $jour = date('l F d, Y'),'<br/>';
    ?>
    <?php
    echo date('F d, Y, H:i a'),'<br/>';
    ?>
    <a href="index.php">Page 1</a>
    <a href="calculator.php">calculator</a>
</body>
</html>

