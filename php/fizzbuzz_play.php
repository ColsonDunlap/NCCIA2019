<html>
<head>
    <meta charset = "utf-8" />
    <link rel = "stylesheet" type = "text/css" href = "default.css" />
    <title>NCCIA 2019 FizzBuzz!</title>
</head>
<body>

<h1>Fizz Buzz in PHP</h1>
<h2>
   The problem that 99% of CompSci Majors Can't solve in an Interview
</h2>
<p>
Write a program that prints the numbers from 1 to 100.
But for multiples of three print "Fizz" instead of the number
and for the multiples of five print "Buzz".
For numbers which are multiples of both three and five print "FizzBuzz".
</p>
<p>
An article about this here: <a href = "https://blog.codinghorror.com/why-cant-programmers-program/" target = "new">"Coding Horror"</a>.
There's an awesome article about this here:
<a href = "https://itnext.io/fizzbuzzbazz-how-to-answer-and-how-not-to-answer-661fd8842c40" target = "new">"How to not Answer FizzBuzz"</a>
</p>

<?php

$sOutput = "<main>";

for($iCounter = 1; $iCounter <= 100; $iCounter++)
{
    if (($iCounter % 3 == 0) && ($iCounter % 5 == 0))
    {
        $sOutput .= "fizzbuzz!";
    }
    elseif ($iCounter % 3 == 0)
    {
        $sOutput .= "fizz";
    }
    elseif ($iCounter % 5 == 0)
    {
        $sOutput .= "buzz";
    }
    else
    {
       $sOutput .= $iCounter;
    }

    $sOutput .= "<br>";

} // end for

$sOutput .= "</main>";

echo($sOutput);

?>

<h2>That was php above... Now we're back to html.</h2>

</body>
</html>