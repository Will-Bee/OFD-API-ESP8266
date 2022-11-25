

<!-- Create site that is taking secret argument and switch argument -->

<?php

$secret = $_GET['secret'];

$switch = $_GET['switch'];

if ($secret == '1234567890') {

    if  ($switch == 'True') {

        // write to file var

        $myfile = fopen("../var.txt", "w") or die("Unable to open file!");

        $txt = "True";

        fwrite($myfile, $txt);

        fclose($myfile);

    }

    if  ($switch == 'False') {

        // write to file var

        $myfile = fopen("../var.txt", "w") or die("Unable to open file!");

        $txt = "False";

        fwrite($myfile, $txt);

        fclose($myfile);

    }

}

?>