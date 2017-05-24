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

    <div class="main">

        <video width='100%' autoplay controls>
            <source src="zaandam.mp4" type='video/mp4'>
        </video>

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
