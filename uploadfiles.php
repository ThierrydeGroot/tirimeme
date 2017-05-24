<!DOCTYPE html>
<html>
<head>

    <link rel="shortcut icon" type="image/png" href="./favi.png"/>

    <?php

    include 'hidden.style.php';

    ?>
    <?php

    ?>
</head>
<body>

<div class="container">

    <div class="header">


    </div>



    <div class="main">

        <!--V Tabel in Form V-->

        <form  action="uploadfiles.php" method="post" enctype="multipart/form-data">

            <table>


                <td><input style="height: 50px; background-color: aqua" type="file" name="upload" multiple="multiple"></td>
                <td><input class="infield" type="submit" name="reset" value="Reset"></td>
                <td><input class="infield" type="submit" name="turbo" value="Uploaden!"></td>
                <tr>
                <td><input class="infield" type="text" name="Titel" placeholder="Titel!"></td>
                <td><input class="infield" type="text" name="Poster" placeholder="Naam Poster!"></td>
                </tr>

            </table>

        </form>



        <p><?php



            if (isset($_POST['turbo'])) {



                if(isset($_FILES['upload'])) {



                    $errors = array();

                    if(!empty($_POST['Titel'])) {
                        $fileTitle = $_POST['Titel'];
                    }else{
                        $fileTitle = 'Naamloos geval';
                    }

                    if(!empty($_POST['Poster'])) {
                        $filePoster = $_POST['Poster'];
                    }else{
                        $filePoster = 'Anoniem';
                    }


                    $file_name = time('h-m-s') . "(+)$fileTitle(+){-}$filePoster{-}". $_FILES['upload']['name'];
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
                                echo 'Map voor uploads aangemaakt';
                            }
                        }
                        if (is_dir("./$dirname")) {

                            if (!is_dir("./$dirname/uploads")) {
                                mkdir("./$dirname/uploads", 0777);
                                echo 'Map voor uploads aangemaakt';
                            }
                        }
                        $pupe = substr_count($file_name, '.');
                        if($pupe <= 1){
                            move_uploaded_file($file_tmp, "./$dirname/uploads/" . $file_name);
                        }else{
                            echo "<br><p style='text-align:center;'>Bestandsnaam bevat meer dan 1 punt!<br>Upload gefaald, net zoals jij.</p>";
                            $file_name = NULL;
                        }
                        if (strpos($file_name,'.')) {
                            echo "<br><p style='text-align:center;'>Bestand: $file_name in $dirname Succes </p><br>";

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


    <?php


    include 'hidden.optionmenu.php';

    ?>





    <div class="foot">
        <?php

        $datez = date('d-m-y');
        echo "<center><b> &copy; PapaDingo  $datez</b></center>";
        ?>



    </div>



</body>
</html>
