<!DOCTYPE html>
<html>
<body>
    <head>
        <title>php</title>
    </head>
<p>
<?php echo "hola mundo";?>
</p>
<p>

<?php $mi_variable=":V"?>

    <?php echo "esto esta medio meco $mi_variable <br>";?>
    <?php echo 'esto esta medio meco $mi_variable <br>';?>
</p>

<?php

var_dump($_POST);
foreach($_POST as $value)
{
    echo "$value <br>";
}
?>


</body>
</html>