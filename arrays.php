<!DOCTYPE html>
<html>
<head>
    <style></style>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Arrays</title>
</head>
<body>

    <form method="POST" action="arrays.php">

        <p>Marka seçiniz:</p>
        <select name="marka">
            <option selected value="seciniz">Seçiniz..</option>
            <option value="Ford">Ford</option>
            <option value="Nissan">Nissan</option>
            <option value="Volkswagen">Volkswagen</option>
        </select>
        <input type="submit" name="submit" value="GONDER">
    </form>
    <br>

    <?php

    if(isset($_POST['submit'])){
        if(($_POST['marka'] == 'Ford')){
            $liste = array(
                'Ford' => array(
                    'Focus' => array('1.5 tdci',
                      '1.8 tdci'),
                    'Fiesta' => array('1.0 GTCi',
                      'st',
                      '1.6 TDCi'),
                    'Mustang'=> array('2.3 Fastback',
                      '5.0 GT',
                      '4.6 Cobra')
                ));
        }
        elseif(($_POST['marka'] == 'Nissan')){
            $liste = array(
                'Nissan' => array(
                    'GT-T' => array('Black Edition','R35',
                      'Premium Edition'),
                    '200SX' => array('1.8 Turbo',
                      '2.0 Turbo',
                      '1.6 TDCi'),
                    'Micra'=> array('1.0',
                      '1.5 dCi',
                      '1.3')
                ));
        }
        elseif(($_POST['marka'] == 'Volkswagen')){
            $liste = array(
                'Volkswagen' => array(
                    'Passat' => array('Trendline',
                      'Comfortline','GT'),
                    'Scirocco' => array('1.4 TSI',
                      '1.8 GT',
                      '2.0'),
                    'Polo'=> array('1.0 TSI',
                      '1.4 TDI',
                      '1.9 SDi')
                ));
        }
        elseif(($_POST['marka'] == 'seciniz')){
            echo "Lütfen marka secin!";
            exit();
        }
        foreach ($liste as $key => $val) {
            echo "<ul>";
            echo $key;
            foreach ($val as $key0 => $val0) {
                echo "<ul>";
                echo $key0 ;
                echo "</ul>";  
                foreach ($val0 as $key1 => $val1) {
                    echo "<ul>";
                    echo "<ul>";
                    echo $val1 ;
                    echo "</ul>";echo "</ul>";
                }
            }
            echo "</li>";
        }
    }
    ?>

</body>
</html>