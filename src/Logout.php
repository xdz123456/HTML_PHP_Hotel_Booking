<!DOCTYPE html>
<html>
<head>
        <title>
            SUNNY ISLE Hotel
        </title>
        <link rel="stylesheet" type="text/css" href="./style.css">
</head>
    <body>
        <p class="head2">&nbsp; &nbsp;</p>
        <p class="head3">
            SUNNY ISLE<br>
        </p>
        <p class="head4">Unlock unforgettable experiences  in the east region of Lukewarm Kingdom</p>

    <?php
        session_start();
        error_reporting(E_ALL || ~E_NOTICE);
        session_unset();
        session_destroy();
        echo '<script>window.location="./Index.html";</script>';
    ?>

</body>
</html>

