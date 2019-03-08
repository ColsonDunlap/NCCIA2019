<html>
<head>
    <meta charset = "utf-8" />
    <link rel = "stylesheet" type = "text/css" href = "default.css" />
    <title>NCCIA 2019 Greetings!</title>
</head>
<body>

<h1>Hello World... </h1>
<h2>
    The Heading Above is Plain 'Ol HTML
    <br>
    Some PHP lies below...
</h2>

<?php
echo ("<h1>"); // here you see html put right onto the page (into the http stream) as a string

$sGreeting = "Yo Yo Yo NCCIA! <br>****This is PHP!****"; // here you see a string put right into a variable (php is loosely typed), along with html

echo("$sGreeting</h1>"); // note the semantic sugar of putting the variable right into the DOUBLE quotes... makes concatenation supa easy!

?>

<h2>That was php above... Now we're back to html.</h2>

</body>
</html>