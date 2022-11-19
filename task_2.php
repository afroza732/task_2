<?php
$pattern = "data";
$text = "tadadattaetadadadafa";
$pattern_length = strlen($pattern);
$text_length = strlen($text);
$count = 0;
for($i=0;$i<=$text_length-$pattern_length;$i++)
{
    $match = true;
    for($j=0;$j<$pattern_length;$j++)
    {
        if($text[$i+$j] != $pattern[$j])
        {
            $match = false;
            break;
        }
    }
    if($match)
    {
        $count++;
    }
}