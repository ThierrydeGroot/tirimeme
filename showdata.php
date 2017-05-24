<!DOCTYPE html>
<html>
<head>
        <link rel="shortcut icon" type="image/png" href="./favi.png"/>

    <?php

    include 'hidden.style.php';

    ?>

    <?php

    function dateSelect($datum){

        $dirnamez = "Ingevoerd op " . $datum;

        $files1 = glob("$dirnamez/" ."*");

        foreach($files1 as $file1) {
            echo "<a href='$file1'>-> $file1</a><br>";
        }

    }

    ?>

</head>
<body>

<div class="container">

    <div class="header">

    </div>



    <div class="main">


        <div  style="overflow-y:scroll; height:400px; width: 80%; margin: 0 auto; border-style: solid; margin-top: 20px;">

        <p style="padding: 20px;"><?php

            $dirname = "./";
            $dirpname = "$dirname/";
            $files = glob($dirpname."*");

            foreach($files as $file) {
                echo "<a href='$file'>-> $file</a><br>";
            }

            echo '<br><hr>';




            ?></p>

        </div>

    </div>

    <?php


    include 'hidden.optionmenu.php';

    ?>

    <div class="foot">
        <?php

        $datez = date('d-m-y');
            echo "<center><b> &copy; PapaDingo Mc  $datez</b></center>";
        ?>

    </div>

</div>



</body>
</html>
