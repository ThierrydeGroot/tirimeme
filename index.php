<!DOCTYPE html>
<html>
<head>

    <link rel="shortcut icon" type="image/png" href="./favi.png"/>

    <style>
        * {
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }

        body {
            background-color: grey;
        }

        .container {
            float: left;
            width: 100%;
            height: 100%;

        }

        .header {
            float: left;
            width: 100%;
            height: 80px;
            background-color: aquamarine;
            background-image: url(memehaus.gif);
        }

        .main {
            float: left;
            background-color: cadetblue;
            height: 900px;
            width: 85%;
        }

        .rightmenu {
            float: left;
            height: 900px;
            width: 15%;
            background-color: aliceblue;
        }

        .foot {
            float: left;
            width: 100%;
            height: 80px;
            background-color: cornflowerblue;
        }

        table{
            width: 60%;
            margin:0 auto;
            margin-top: 20px;

        }

        .infield{
            width:80px;

        }

        th, td{

            text-align: center;
            height:25px;

        }

        h1{
            color: navy;
            text-align: center;
            margin-top: 20px;
        }

        ul{
            list-style: none;
        }

        li{
            padding: 10px;
            border-bottom: solid;

        }

        li:hover{
            padding: 10px;
            border-bottom: solid;
            background-color: darkseagreen;
        }

        .supatotal{
            border-top-style: solid;
        }

        table.results{

            width:90%;
            border: solid;
            border-width: 1.5px;
            border-color: grey;
        }

        td.results{
            border-bottom: solid;
            border-width: 1.5px;
            border-color: grey;
        }

        a{
            text-decoration: none;
        }

    </style>
    <?php


    //Bereken



        //Prijzen

        if (empty($_POST['price'])){
            $price = 0;
        }else{
            $price = $_POST['price'];
        }

        if (empty($_POST['price1'])){
            $price1 = 0;
        }else{
            $price1 = $_POST['price1'];
        }


        if (empty($_POST['price2'])){
            $price2 = 0;
        }else{
            $price2 = $_POST['price2'];
        }


        if (empty($_POST['price3'])){
            $price3 = 0;
        }else{
            $price3 = $_POST['price3'];
        }


        if (empty($_POST['price4'])){
            $price4 = 0;
        }else{
            $price4 = $_POST['price4'];
        }


        if (empty($_POST['price5'])){
            $price5 = 0;
        }else{
            $price5 = $_POST['price5'];
        }

        //Aantallen
        if (empty($_POST['quantity'])){
            $quantity = 1;
        }else{
            $quantity = $_POST['quantity'];
        }

        if (empty($_POST['quantity1'])){
            $quantity1 = 1;
        }else{
            $quantity1 = $_POST['quantity1'];
        }


        if (empty($_POST['quantity2'])){
            $quantity2 = 1;
        }else{
            $quantity2 = $_POST['quantity2'];
        }


        if (empty($_POST['quantity3'])){
            $quantity3 = 1;
        }else{
            $quantity3 = $_POST['quantity3'];
        }


        if (empty($_POST['quantity4'])){
            $quantity4 = 1;
        }else{
            $quantity4 = $_POST['quantity4'];
        }


        if (empty($_POST['quantity5'])){
            $quantity5 = 1;
        }else{
            $quantity5 = $_POST['quantity5'];
        }

        //BTW

        if (empty($_POST['btw'])){
            $btw = 0;
        }else{
            $btw = $_POST['btw'];
        }

        if (empty($_POST['btw1'])){
            $btw1 = 0;
        }else{
            $btw1 = $_POST['btw1'];
        }


        if (empty($_POST['btw2'])){
            $btw2 = 0;
        }else{
            $btw2 = $_POST['btw2'];
        }


        if (empty($_POST['btw3'])){
            $btw3 = 0;
        }else{
            $btw3 = $_POST['btw3'];
        }


        if (empty($_POST['btw4'])){
            $btw4 = 0;
        }else{
            $btw4 = $_POST['btw4'];
        }


        if (empty($_POST['btw5'])){
            $btw5 = 0;
        }else{
            $btw5 = $_POST['btw5'];
        }

        //Omschrijving

        if (empty($_POST['descr'])){
            $descr = NULL;
        }else{
            $descr = ucfirst($_POST['descr']);
        }

        if (empty($_POST['descr1'])){
            $descr1 = NULL;
        }else{
            $descr1 = ucfirst($_POST['descr1']);
        }


        if (empty($_POST['descr2'])){
            $descr2 = NULL;
        }else{
            $descr2 = ucfirst($_POST['descr2']);
        }


        if (empty($_POST['descr3'])){
            $descr3 = NULL;
        }else{
            $descr3 = ucfirst($_POST['descr3']);
        }


        if (empty($_POST['descr4'])){
            $descr4 = NULL;
        }else{
            $descr4 = ucfirst($_POST['descr4']);
        }


        if (empty($_POST['descr5'])){
            $descr5 = NULL;
        }else{
            $descr5 = ucfirst($_POST['descr5']);
        }

        //Type

        if (empty($_POST['opt'])){
            $type = NULL;
        }else{
            $type = ucfirst($_POST['opt']);
        }

        if (empty($_POST['opt1'])){
            $type1 = NULL;
        }else{
            $type1 = ucfirst($_POST['opt1']);
        }


        if (empty($_POST['opt2'])){
            $type2 = NULL;
        }else{
            $type2 = ucfirst($_POST['opt2']);
        }


        if (empty($_POST['opt3'])){
            $type3 = NULL;
        }else{
            $type3 = ucfirst($_POST['opt3']);
        }


        if (empty($_POST['opt4'])){
            $type4 = NULL;
        }else{
            $type4 = ucfirst($_POST['opt4']);
        }


        if (empty($_POST['opt5'])){
            $type5 = NULL;
        }else{
            $type5 = ucfirst($_POST['opt5']);
        }

        //$BTW 0 t/m 5 maken, $quantity 0 t/m 5 maken, $totaal inc. en ex. BTW maken.
        //Supertotal is som van alle prijzen na BTW berekening een vermenigvuldiging met aantal.
        //Na bereken moeten alle waarden vastgezet worden, evt dmv functie.
        //$type maken

        // Voorbeeld van wat in de value moet staan:  PrijsSet($price);



    //Alles leegmaken
    if (isset($_POST['reset'])){
        $price = NULL;
        $price1 = NULL;
        $price2 = NULL;
        $price3 = NULL;
        $price4 = NULL;
        $price5 = NULL;
        $supertotal = NULL;
        $quantity = NULL;
        $quantity1 = NULL;
        $quantity2 = NULL;
        $quantity3 = NULL;
        $quantity4 = NULL;
        $quantity5 = NULL;
        $btw = NULL;
        $btw1 = NULL;
        $btw2= NULL;
        $btw3 = NULL;
        $btw4 = NULL;
        $btw5 = NULL;
        $descr = NULL;
        $descr1 = NULL;
        $descr2 = NULL;
        $descr3 = NULL;
        $descr4 = NULL;
        $descr5 = NULL;
        $type = NULL;
        $type1 = NULL;
        $type2 = NULL;
        $type3 = NULL;
        $type4 = NULL;
        $type5 = NULL;
    }


    // Om values vast te houden
    function PrijsSet($prijs){

            echo $prijs;

    }

    function bestandmaken($pad, $bestandsnaam, $dirnaam, $text)
    {

        $fileAndPath = "./$dirnaam/$pad/$bestandsnaam.txt";
        if (!file_exists($fileAndPath)) {
            fopen($fileAndPath, "w");
            $opened = fopen($fileAndPath, "w");
            fwrite($opened, "$text");
            fclose($opened);
        } elseif (file_exists($fileAndPath) & !empty($bestandsnaam)) {

            echo $bestandsnaam. ': Bestandsnaam bestaat al!!<br>';

            if (file_exists($bestandsnaam)) {
                $bestandsnaam = $bestandsnaam . $bestandsnaam;
                $fileAndPath = "./$dirnaam/$pad/$bestandsnaam.txt";
                fopen($fileAndPath, "w");
                $opened = fopen($fileAndPath, "w");
                fclose($opened);
            }
            $fileAndPath = "./$dirnaam/$pad/$bestandsnaam.txt";
            fopen($fileAndPath, "w");
            $opened = fopen($fileAndPath, "w");
            fclose($opened);
        }


    }

    function bericht($product, $aantal, $voorbtwberekening, $nabtwberekening, $btwpercentage, $soort){

        $aantalberek = $aantal * $voorbtwberekening;
        $bericht = "$aantal x $product ($soort, Per stuk €$voorbtwberekening) \nKost VOOR de BTW berekenng €$aantalberek \nKost NA een BTW percentage van $btwpercentage% : €$nabtwberekening";
        return $bericht;
    }

    function tabel($product, $aantal, $voorbtwberekening, $nabtwberekening, $btwpercentage, $soort){

        $aantalberek = $aantal * $voorbtwberekening;
        $bericht = "<tr><td class=\"results\"><b>$aantal x $product</b> ($soort, Per stuk €$voorbtwberekening)</td> <td class=\"results\">Kost <u>VOOR</u> de BTW berekenng <b>€$aantalberek</b> </td>
                               <td class=\"results\"> Kost <u>NA</u> een BTW percentage van $btwpercentage% : <b>€$nabtwberekening</b></td></tr><tr></tr><tr></tr>";
        return $bericht;
    }


    // Om BTW te berekenen
    function btwBereken($tarief, $prijss, $aantal){
        $btwPerc =  100 + $tarief;
        if ($tarief < -100){
            $finalPrijs = $prijss * $aantal;
        }elseif ($tarief > 100){
            $finalPrijs = 'Onmogelijk BTW Percentage';

        }
        else {
            $finalPrijs = ($prijss * $btwPerc / 100) * $aantal;
        }
        return round($finalPrijs, 2);
    }


    $totalRow = btwBereken($btw, $price, $quantity);
    $totalRow1 =  btwBereken($btw1, $price1, $quantity1);
    $totalRow2 =   btwBereken($btw2, $price2, $quantity2);
    $totalRow3 =   btwBereken($btw3, $price3, $quantity3);
    $totalRow4 =   btwBereken($btw4, $price4, $quantity4);
    $totalRow5 =    btwBereken($btw5, $price5, $quantity5);

    $supertotal = $totalRow + $totalRow1 +$totalRow2 +$totalRow3 +$totalRow4 + $totalRow5;

    ?>
</head>
<body>

<div class="container">

    <div class="header">
      

    </div>



    <div class="main">

        <!--V Tabel in Form V-->

        <form  action="index.php" method="post" enctype="multipart/form-data">


                <table>
                    <th>Funk</th>
                    <th>Prijs</th>
                    <th>BTW %</th>
                    <th>Aantallen</th>
                    <th>Wow G</th>
                    <th>Totaal</th>

                    <tr>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>
                        <td><p></p></td>

                    </tr>

                    <tr>
                        <td>
                            <input class="infield" type="text" value="<?php PrijsSet($type)?>" name="opt" placeholder="Type">


                        </td>
                        <td>
                           <input class="infield" type="number" min="0" step="any"  value="<?php PrijsSet($price)?>" name="price" placeholder="€">
                        </td>
                        <td>
                            <input class="infield" type="number" min="-100" max="100" value="<?php PrijsSet($btw)?>" name="btw" placeholder="BTW tarief">
                        </td>
                        <td>
                            <input class="infield" type="number" value="<?php PrijsSet($quantity)?>" name="quantity" placeholder="Aantal">
                        </td>
                        <td>
                           <input class="infield" type="text" value="<?php PrijsSet($descr)?>" name="descr" placeholder="Omschrijving">
                        </td>
                        <td><?php if (isset($_POST['submit'])){ echo $totalRow;}?></td>
                    </tr>
                    <tr>
                        <td>

                            <input class="infield" type="text" value="<?php PrijsSet($type1)?>" name="opt1" placeholder="Type">

                        </td>
                        <td>
                           <input class="infield" type="number" min="0" step="any" value="<?php PrijsSet($price1)?>" name="price1" placeholder="€">
                        </td>
                        <td>
                            <input class="infield" type="number" min="-100" max="100" value="<?php PrijsSet($btw1)?>" name="btw1" placeholder="BTW tarief">
                        </td>
                        <td>
                          <input class="infield" type="number" value="<?php PrijsSet($quantity1)?>" name="quantity1" placeholder="Aantal">
                        </td>
                        <td>
                           <input class="infield" type="text" value="<?php PrijsSet($descr1)?>"  name="descr1" placeholder="Omschrijving">
                        </td>
                        <td><?php if (isset($_POST['submit'])){ echo $totalRow1;}?></td>
                    </tr><tr>
                        <td>

                            <input class="infield" type="text" value="<?php PrijsSet($type2)?>" name="opt2" placeholder="Type">

                        </td>
                        <td>
                           <input class="infield" type="number" min="0" step="any" value="<?php PrijsSet($price2)?>" name="price2" placeholder="€">
                        </td>
                        <td>
                            <input class="infield" type="number" min="-100" max="100" value="<?php PrijsSet($btw2)?>" name="btw2" placeholder="BTW tarief">
                        </td>
                        <td>
                           <input class="infield" type="number" value="<?php PrijsSet($quantity2)?>" name="quantity2" placeholder="Aantal">
                        </td>
                        <td>
                           <input class="infield" type="text" value="<?php PrijsSet($descr2)?>"  name="descr2" placeholder="Omschrijving">
                        </td>
                        <td><?php if (isset($_POST['submit'])){ echo $totalRow2;}?></td>
                    </tr><tr>
                        <td>

                            <input class="infield" type="text" value="<?php PrijsSet($type3)?>" name="opt3" placeholder="Type">

                        </td>
                        <td>
                           <input class="infield" type="number" min="0" step="any" value="<?php PrijsSet($price3)?>" name="price3" placeholder="€">
                        </td>
                        <td>
                            <input class="infield" type="number" min="-100" max="100" value="<?php PrijsSet($btw3)?>" name="btw3" placeholder="BTW tarief">
                        </td>
                        <td>
                            <input class="infield" type="number" value="<?php PrijsSet($quantity3)?>" name="quantity3" placeholder="Aantal">
                        </td>
                        <td>
                           <input class="infield" type="text" value="<?php PrijsSet($descr3)?>"  name="descr3" placeholder="Omschrijving">
                        </td>
                        <td><?php if (isset($_POST['submit'])){ echo $totalRow3;}?></td>
                    </tr><tr>
                        <td>

                            <input class="infield" type="text" value="<?php PrijsSet($type4)?>" name="opt4" placeholder="Type">

                        </td>
                        <td>
                           <input class="infield" type="number" min="0" step="any" value="<?php PrijsSet($price4)?>" name="price4" placeholder="€">
                        </td>
                        <td>
                            <input class="infield" type="number" min="-100" max="100" value="<?php PrijsSet($btw4)?>" name="btw4" placeholder="BTW tarief">
                        </td>
                        <td>
                           <input class="infield" type="number" value="<?php PrijsSet($quantity4)?>" name="quantity4" placeholder="Aantal">
                        </td>
                        <td>
                            <input class="infield" type="text" value="<?php PrijsSet($descr4)?>"  name="descr4" placeholder="Omschrijving">
                        </td>
                        <td><?php if (isset($_POST['submit'])){ echo $totalRow4;}?></td>
                    </tr><tr>
                        <td>

                            <input class="infield" type="text" value="<?php PrijsSet($type5)?>" name="opt5" placeholder="Type">

                        </td>
                        <td>
                           <input class="infield" type="number" min="0" step="any" value="<?php PrijsSet($price5)?>" name="price5" placeholder="€">
                        </td>
                        <td>
                            <input class="infield" type="number" min="-100" max="100" value="<?php PrijsSet($btw5)?>" name="btw5" placeholder="BTW tarief">
                        </td>
                        <td>
                            <input class="infield" type="number" value="<?php PrijsSet($quantity5)?>" name="quantity5" placeholder="Aantal">
                        </td>
                        <td>
                           <input class="infield" type="text" value="<?php PrijsSet($descr5)?>"  name="descr5" placeholder="Omschrijving">
                        </td>
                        <td><?php if (isset($_POST['submit'])){ echo $totalRow5;}?></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>

                        <td></td>
                            <td class="supatotal"><p><?php if (isset($_POST['submit'])){ echo 'Berekend';}?></p>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><b>Meme Upload:</b></td>
                        <td><input class="infield" type="file" name="upload" multiple="multiple"></td>
                        <td><input class="infield" type="submit" name="submit" value="Bereken">

                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>


                            <td><input class="infield" type="submit" name="reset" value="Reset">

                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td><input class="infield" type="submit" name="turbo" value="Uploaden!"></td>


                        <td><input class="infield" type="submit" name="schrijf" value="Genereer">

                    </tr>
                </table>

        </form>
        


        <p><?php


            $btwber = btwBereken($btw, $price, $quantity);
            $btwber1 = btwBereken($btw1, $price1, $quantity1);
            $btwber2 = btwBereken($btw2, $price2, $quantity2);
            $btwber3 = btwBereken($btw3, $price3, $quantity3);
            $btwber4 = btwBereken($btw4, $price4, $quantity4);
            $btwber5 = btwBereken($btw5, $price5, $quantity5);

            $ber =  bericht($descr, $quantity, $price, $btwber, $btw, $type);
            $ber1 =  bericht($descr1, $quantity1, $price1, $btwber1, $btw1, $type1);
            $ber2 = bericht($descr2, $quantity2, $price2, $btwber2, $btw2, $type2);
            $ber3 = bericht($descr3, $quantity3, $price3, $btwber3, $btw3, $type3);
            $ber4 = bericht($descr4, $quantity4, $price4, $btwber4, $btw4, $type4);
            $ber5 = bericht($descr5, $quantity5, $price5, $btwber5, $btw5, $type5);

            //Resultaten
            if (isset($_POST['submit'])) {
                echo '<table class="results">';
                echo  tabel($descr, $quantity, $price, $btwber, $btw, $type);
                echo  tabel($descr1, $quantity1, $price1, $btwber1, $btw1, $type1);
                echo  tabel($descr2, $quantity2, $price2, $btwber2, $btw2, $type2);
                echo  tabel($descr3, $quantity3, $price3, $btwber3, $btw3, $type3);
                echo  tabel($descr4, $quantity4, $price4, $btwber4, $btw4, $type4);
                echo   tabel($descr5, $quantity5, $price5, $btwber5, $btw5, $type5);
                echo '</table>';
            }



            $typefolder = array($type, $type1, $type2, $type3, $type4, $type5);

            foreach ($typefolder as $foldertype){

                $mappen = $foldertype . '<br>';
            }







            if(isset($_POST['schrijf'])) {
                echo '<center>';
                $dirname = "Ingevoerd op " . date('d-m-y');
                echo $dirname;
                echo '</center>';


                if (!is_dir("./$dirname")) {
                    mkdir("./$dirname", 0777);
                }

                $filenames = array($descr, $descr1, $descr2, $descr3, $descr4, $descr5);

                foreach ($typefolder as $foldertype) {
                    if (is_dir("./$dirname") && !is_dir("./$dirname/$foldertype")) {
                        $path = "./$dirname/$foldertype";
                        mkdir($path, 0777);

                    }


                }


                bestandmaken($type, $descr, $dirname, $ber);

                bestandmaken($type1, $descr1, $dirname, $ber1);

                bestandmaken($type2, $descr2, $dirname, $ber2);

                bestandmaken($type3, $descr3, $dirname, $ber3);

                bestandmaken($type4, $descr4, $dirname, $ber4);

                bestandmaken($type5, $descr5, $dirname, $ber5);



            }


            if (isset($_POST['turbo'])) {


                if(isset($_FILES['upload'])) {



                        $errors = array();
                        $file_name = time('h-m-s') . $_FILES['upload']['name'];
                        $file_size = $_FILES['upload']['size'];
                        $file_tmp = $_FILES['upload']['tmp_name'];
                        $file_type = $_FILES['upload']['type'];
                        

                        if ($file_size > 8388608) {
                            $errors[] = 'File too big (8 MB max)';
                        }
                        if (empty($errors) == true) {
                            $dirname = "Ingevoerd op " . date('d-m-y');
                            if (!is_dir("./$dirname")) {
                                mkdir("./$dirname", 0777);
                                if (!is_dir("./$dirname/uploads")) {
                                    mkdir("./$dirname/uploads", 0777);
                                }
                            }
                            $pupe = substr_count($file_name, '.');
                            if($pupe <= 1){
                            move_uploaded_file($file_tmp, "./$dirname/uploads/" . $file_name);
                            }else{
                                echo "<br><p style='text-align:center;'>Bestandsnaam bevat meer dan 1 punt!<br>Upload gefaald, net zoals jij.</p>";
                                $file_name = NULL;
                            }
                            if ($file_name !== NULL) {
                                echo "<br><p style='text-align:center;'>Bestand: [$file_name] in $dirname Succes </p><br>";
                            }
                        } else {
                            foreach ($errors as $error) {
                                echo '<center>' . $error . '</center><br>';
                            }
                        }
                    }

                

            }




            ?></p>

    </div>

    <div class="rightmenu">

        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="showdata.php">Showdata</a></li>
            <li><a href="dateselect.php">Datefolderselect</a></li>
            <li><a href="./blab84" target="_blank">Tiri Chat</a></li>
            <li>Opties</li>
            <li>Opties</li>
            <li>Opties</li>
            <li>Opties</li>
            <li>Opties</li>
        </ul>

    </div>

    <div class="foot">
        <?php

        $datez = date('d-m-y');
        echo "<center><b> &copy; PapaDingo  $datez</b></center>";
        ?>

    </div>

</div>



</body>
</html>
