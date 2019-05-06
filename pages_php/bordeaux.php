<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">

    <title>tp météo bordeaux</title>

    <?php
    date_default_timezone_set('UTC');
    $heure = date("G");
    if ($heure > 7 & $heure < 19)
    {
        echo '<body style="background-color:white">';
    }
    else 
    {
        echo '<body style="background-color:black">';
    } 
    ?>



</head>


<body>

<?php
    for ($i = 1; $i < 5; $i++)
    { ?>
        <img src="https://www.prevision-meteo.ch/uploads/widget/bordeaux_<?php echo $i; ?>.png" alt="meteo" title="meteo paris"/>
    <?php
    }
?>
    

</body>
    
</html>

<?php
echo '<img src="" alt="meteo" title="météo bordeaux"/>';
?>