<?php

include 'hidden.style.php';

?>


<div class="rightmenu">
<?php


$files = glob("./" ."*");

echo '<ul>';

foreach ($files as $link) {

    $heh = explode('.', $link);

    if($heh[2] == 'php') {
        $friendlylink = preg_replace('/[^A-Za-z0-9\-]/', '', $heh[1]);

        echo "<li><a href='$link'>" . ucfirst($friendlylink) ."</a></li>";
    }else{
        echo '';
    }
}

echo '</ul>';

?>

</div>
