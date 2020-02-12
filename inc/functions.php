<?php

/**
 * Get a random quote from a array of quotes
 * @param array the array of quotes
 * @return array the quote array object
 */
function getRandomQuote($array)
{
    $arrayLength = count($array);
    $randNum = rand(0, $arrayLength - 1);
    return $array[$randNum];
};


/**
 * print out a random quote in HTML block
 * @param array the array of quotes
 * @return string an html string
 */
function printQuote($array)
{
    $quote = getRandomQuote($array);
    $html = "<p class='quote'> $quote[quote] </p>";
    $html .= "<p class='source'> $quote[source]";
    if (isset($quote['citation']))
        $html .= "<span class='citation'> $quote[citation] </span>";

    if (isset($quote['year']))
        $html .= "<span class='year'> $quote[year] </span>";

    $html .= "</p>";
    return $html;
};

/**
 * Generate a random RGB color 
 * @return string a stinrg of rgb color
 */

function getRandomColor()
{
    $rgb = "background: rgb(";
    for ($i = 0; $i < 3; $i++) {
        $rgb .= rand(0, 255);
        $rgb .= ',';
    }
    $strlength = strlen($rgb);

    $rgb =  substr($rgb, 0, $strlength - 1);
    $rgb .= ')';
    return $rgb;
}
