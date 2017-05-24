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
            echo "<center><b> &copy; PapaDingo Mc  $datez</b></center>";
        ?>

    </div>

</div>



</body>
</html>
