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

            function dateSelect2($datum, $folder){

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

            $mappen = glob("./"."*");


            foreach ($mappen as $detum) {

                $fonk = explode('.',$detum);
                if(in_array('gif',$fonk)) {
                    echo "<img src='$detum' title='$detum'><br>";
                }
            }



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
