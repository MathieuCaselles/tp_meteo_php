<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8"/>

    <title>tp météo</title>
    
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

    <p>
        <?php
        $date = date("d-m-Y");
        echo "Bienvenue ! Nous somme le $date.";
        ?>
    </p>

    <ul>
        <li><p><a href="bordeaux.php" alt="meteo" title="météo bordeaux">Météo Bordeaux</a></p></li>
        <li><p><a href="paris.php" alt="meteo" title="météo paris">Météo Paris</a></p></li>
    </ul>
    

</body>
    
</html>
