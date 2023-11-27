<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First HTML</title>
</head>
<body>
    
    <?php echo "hi</br>"; ?>
    <?php echo $int = 8+8,"</br>"; ?>
    <?php echo "hi"; ?>
    <?php echo pow(3,5); ?>
    
    <?php $float = 12.555;
        echo $float; echo "</br>";
        echo round($float,0); echo "</br>";
        echo is_int($float); echo "</br>";
        echo is_int($int); echo "</br>";
        echo $int; echo "</br>";
    ?>
    <pre>
    <?php
        $xyz = array("x", "y", "z", array(1, 2, 3.58));
        print_r($xyz);
        var_dump($xyz);
        echo $xyz [3][2]=18;
        print_r($xyz);
    ?>
    </pre>
<?php

    $newArray = array(25,18,16,11,88,94);
    echo min($newArray);

?>


<?php
    $abba = 12;
    while ($abba <= 144) {
        echo $abba . "</br>";
        
        $abba += 12;
        
    }

?>
<?php
    for ($i=1; $i <= 12 ; $i++) { 
        echo $i += 1;
    }


?>

</body>
</html>