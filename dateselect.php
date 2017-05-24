<!DOCTYPE html>
<html>
<head>
        <link rel="shortcut icon" type="image/png" href="./favi.png"/>

    <?php

    include 'hidden.style.php';

    ?>

    <?php

    if(isset($_POST['klik'])) {

        $datumin = $_POST['date'];

        if (empty($_POST['map'])) {
            $map = NULL;
        }else {
            $map = $_POST['map'];
        }
    }

    function dateSelect($datum, $folder){

        $dirnamez = "Ingevoerd op " . $datum;

        $files1 = glob("$dirnamez/" ."$folder/" ."*");

        if (empty($folder)){
            foreach(array_reverse($files1) as $file1) {
                echo "<a href='$file1'>-> $file1</a><br>";
            }
        }

        if (!empty($folder)){
                 foreach (array_reverse($files1) as $file1) {
                $numberOfFiles = count($files1);
            }
            
            echo "Er zitten [$numberOfFiles] bestanden in deze map.<br><br>";
            
            
            
            foreach (array_reverse($files1) as $file1) {
                $filetypes = explode('.',$file1);
                
                if($filetypes[1] == 'jpg' ||$filetypes[1] == 'png' || $filetypes[1] == 'jpeg' || $filetypes[1] == 'JPG' || $filetypes[1] == 'gif'){
                   echo "<a href='$file1' download><img src='$file1' title='$filetypes[0]' width='500'></a><br>"; 
                   $numberOfFiles = count($files1);
                   
                }elseif($filetypes[1] == 'mp4'){
                    echo "<video width='500' controls><source src='$file1' type='video/mp4'></video><br><a href='$file1' download>^Download video^</a><br>"; 
                }
                else{
                  echo "<a href='$file1' download>-> $file1</a><br>";
                  $numberOfFiles = count($files1);
                }
                
                
            }
            
        }

    }

    if(isset($_POST['reset'])){

        $datumin = NULL;
        $mapin = NULL;

    }

    ?>

</head>
<body>

<div class="container">

    <div class="header">
    </div>



    <div class="main">


        <div class="mid">
            



        <form action="dateselect.php" method="post" enctype="multipart/form-data">
            Datum:
            <input style="height: 50px; background-color: aqua" type="text" name="date" value="<?php if(isset($_POST['klik'])) {

                $datumin = $_POST['date'];
                if ($datumin != NULL) {
                    echo $datumin;
                }
            } else{
                echo date('d-m-y');
            }
            ?>">
            Map:
            <input style="height: 50px; background-color: aqua;" type="text" name="map" placeholder="Map" value="<?php if(isset($_POST['klik'])) {

                $mapin = $_POST['map'];
                if ($mapin != NULL) {
                    echo $mapin;
                }
            } else{
                echo NULL;
            }
            ?>">
            <input style="height: 50px; background-color: aqua; width: 100px;"  type="submit" name="klik" value="Verstuur">
            <input style="height: 50px; background-color: aqua; width: 100px;"  type="submit" name="reset" value="Reset">
        </form>
        
              
        </div>
        

        <div id="" style="overflow-y:scroll; height:60%; width: 80%; margin: 0 auto; border-style: solid;">

        <p class="mid"><?php

            if(isset($_POST['klik'])){

                $datumin = $_POST['date'];

                if (empty($_POST['map'])){
                    $map = '';
                }
                $map = $_POST['map'];

                echo dateSelect($datumin, $map);
            }


            ?></p>
        </div>
        <br><br><br>
            <iframe width="85%" height="350px" src="http://papadingo.nl/tiri/blab84/blab.php" style="margin-left:7%">
                
            </iframe>

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
