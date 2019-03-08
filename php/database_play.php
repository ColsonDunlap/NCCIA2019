<html>
<head>
    <meta charset = "utf-8" />
    <link rel = "stylesheet" type = "text/css" href = "default.css" />
    <title>NCCIA 2019 PHP and Databases</title>
</head>
<body>

<h1>Connecting PHP to SQLite3 Database</h1>
<h2>
   Because... DATABASES!
</h2>
<p>
Connect to a database, do some CRUD
</p>

<?php

echo "<br>start";

$db = new SQLite3('HUMAN_RESOURCES_DATABASE.sqlite3');

$results = $db->query('SELECT name FROM Employees');

while ($row = $results->fetchArray())
{
    var_dump($row);
}


echo "end<br>";

?>

<h2>That was php above... Now we're back to html.</h2>

</body>
</html>