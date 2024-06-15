<html>
  <head>
    <title>PRAK103</title>
  </head>
  <body>
    <?php 
    $celcius = 37.841;
    $reamur = (4/5) * $celcius;
    $kelvin = $celcius + 273;
    $fahrenheit = (9/5) * $celcius + 32;
    echo "Fahrenheit (F) = " . $fahrenheit . "<br>";
    echo "Reamur (R) = " . $reamur . "<br>";
    echo "Kelvin (K) = " . number_format($kelvin, 4) . "<br>";
    ?>
  </body>
</html>