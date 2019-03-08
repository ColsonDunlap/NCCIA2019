<!DOCTYPE html>
<html>
<head>
    <meta charset = "utf-8" />
    <link rel = "stylesheet" type = "text/css" href = "default.css" />
    <title>NCCIA 2019 and 100 Top Songs!</title>
</head>
<body>
<main style="font-family:tahoma;">
<?php

$myFile = fopen("../topSongs.txt", "r") or die("Unable to open file!");
$text =  fread($myFile,filesize("../topSongs.txt"));
fclose($myFile);

$rows = explode("\n",$text);

foreach($rows as $row)
{
    $fields = explode("||",$row);
    foreach($fields as $field)
    {
        echo('*** ' . $field );
    }
    echo("<br>");
}

?>
</main>
</body>
</html>