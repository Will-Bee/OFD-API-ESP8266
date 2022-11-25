
<?php


// read var.txt

$myfile = fopen("var.txt", "r") or die("Unable to open file!");

$var = fread($myfile,filesize("var.txt"));

fclose($myfile);

// if var.txt is True, change site color to green, else change site color to red

if ($var == 'True') {

    echo '<style> * {background-color: green;}</style>';

}

if ($var == 'False') {

    echo '<style> * {background-color: red;}</style>';


}



// reload page

sleep(1); // time is in seconds

header("Refresh:0");


?>