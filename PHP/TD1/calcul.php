<?php include "start_end_page.php" ?>
<?php
start_page("Calculator");
?>
<?php
    $op1 = $_GET['op1'];
    $op2 = $_GET['op2'];
    $action = $_GET['action'];
?>
<?php
    if('*' == $action)
    {
        echo "<br/><strong> $op1 * $op2 =  </strong>".'<strong>'. ($op1 * $op2).'</strong>';
    }
    else if ('+' == $action)
    {
        echo "<br/><strong> $op1 + $op2 = </strong>".'<strong>'. ($op1 + $op2).'</strong>';
    }
    else if ('-' == $action)
    {
        echo "<br/><strong> $op1 - $op2 =  </strong>".'<strong>'. ($op1 - $op2).'</strong>';
    }
    else if ('/' == $action)
    {
        echo "<br/><strong> $op1 / $op2 =  </strong>".'<strong>'. ($op1 / $op2).'</strong>';
    }
    else
    {
        echo '<br/><strong>opérateur ' . $action. ' non géré </strong>';
    }
?>