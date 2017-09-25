<?php

ob_start();
include "text.txt";
$text = ob_get_contents();
echo substr_count("$text","the");
ob_end_clean();
//$words = str_word_count($text, 1); // use this function if you only want ASCII
$words = utf8_str_word_count($text, 1); // use this function if you care about i18n

$frequency = array_count_values($words);

arsort($frequency);
echo '<pre>';
print_r($frequency);
echo '</pre>';

function utf8_str_word_count($string, $format = 0, $charlist = null)
{
    $result = "";
    if (preg_match_all('~[\p{L}\p{Mn}\p{Pd}\'\x{2019}' . preg_quote($charlist, '~') . ']+~u', $string, $result) > 0)
    {
        if (array_key_exists(0, $result) === true)
        {
            $result = $result[0];
        }
    }

    if ($format == 0)
    {
        $result = count($result);
    }
    return $result;
}
?>