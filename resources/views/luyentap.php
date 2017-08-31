<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 24/08/2017
 * Time: 2:55 PM
 */
function firstDuplicate($a)
{
    $index = [];
    $count = count($a);
    for($i = 0; $i < $count; $i++)
        for($j = 0; $j < $count; $j++)
        {
            if($i == $j)
            {
                continue;
            }
            if($a[$i] == $a[$j]){
                $index[$j] = $a[$j];
            }
        }

    if (count($index) < 1)
        return -1;
    else {
        ksort($index);
        return (reset($index));
    }
}

$arr = [5,3,3,4,5];
echo firstDuplicate($arr);

?>