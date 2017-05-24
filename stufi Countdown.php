<!DOCTYPE html>
<html>
<head>
    <link rel="shortcut icon" type="image/png" href="./favi.png"/>
    <?php
    include 'hidden.style.php';
    ?>
</head>

<body>

<div class="container">

    <div class="header">

    </div>

    <div class="main" style="text-align: center; padding-top: 20px;">

        <?php

        function datSet($maand, $dag, $month){
            $date = strtotime("$month $dag, 2017 1:00:00 PM");
            $remaining = $date - time();

            $days_remaining = floor($remaining / 86400);
            $hours_remaining = floor(($remaining % 86400) / 3600);
            $min = floor(($remaining % 3600) / 60);
            $sec = ($remaining % 60);


            echo "<h3>$dag $maand 2017:</h3><br>";
            if($days_remaining > 1 && $hours_remaining > 1) {
                echo "<u>Nog $days_remaining dagen $hours_remaining uur en $min minuten wachten!</u><br><br>";
            }else{
                echo "<u>Je geld voor $maand is al binnen, is het ook al op?</u><br><br>";
            }
        }


        datSet('Mei', 24,'May' );
        datSet('Juni', 23,'June' );
        datSet('Juli', 24,'July' );
        datSet('Augustus', 24,'August' );
        datSet('September', 22,'September' );
        datSet('Oktober', 24,'October' );
        datSet('November', 24,'November' );
        datSet('December', 21,'December' );

        ?>

    </div>

    <?php


    include 'hidden.optionmenu.php';

    ?>

    <div class="foot">
        <?php

        $datez = date('d-m-y');
        echo "<center><b> &copy; PapaDingo  $datez</b></center>";
        ?>

    </div>

</div>

</body>
</html>
