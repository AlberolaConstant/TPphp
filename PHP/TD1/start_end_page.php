<?php
function start_page($title)
{
?><!DOCTYPE html>
<html lang="fr">
<head>
    <title><?php echo $title; ?></title>
</head>
<body>
    <a href="index.php">Page 1</a>
    <a href="calculator.php">Calculator</a>
    <br><br>
    <?php
    }
    ?>
    <?php function end_page() { ?>
</body>
</html>
<?php
}
?>
