<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function insertion_sort(&$inputarray){
    for ($pointer=0;$pointer<count($inputarray);$pointer++){
        if ($pointer<count($inputarray)){
        $pointer2=($pointer+1);
        }
        while ($pointer2<count($inputarray)) {
            if ($inputarray[$pointer]>$inputarray[$pointer2]){
                $key=$inputarray[$pointer2];
                $inputarray[$pointer2]=$inputarray[$pointer];
                $inputarray[$pointer]=$key;                
            }
           $pointer2++;
        }
    }

}

function insertion_sort_book(&$inputarray){
    for ($pointer=1;$pointer<count($inputarray);$pointer++){
        $key=$inputarray[$pointer];
        $pointer2=$pointer-1;
        while ($pointer2>=0 && $inputarray[$pointer2]>$key){
            $inputarray[$pointer2+1]=$inputarray[$pointer2];
            $pointer2=$pointer2-1;
            $inputarray[$pointer2+1]=$key;
        }
    }  
}
function insertion_sort_book_revert(&$inputarray){
    for ($pointer=(count($inputarray)-2);$pointer>=0;$pointer--){
        $key=$inputarray[$pointer];
        $pointer2=$pointer+1;
        while ($pointer2<(count($inputarray)-1) && $inputarray[$pointer2]>$key){
            $inputarray[$pointer2-1]=$inputarray[$pointer2];
            $pointer2=$pointer2+1;
            $inputarray[$pointer2-1]=$key;
        }
    }  
}

function linear_search(&$inputarray,$seek_val){
    $cnt=0;
    while ($cnt<count($inputarray) && $inputarray[$cnt]<>$seek_val){
        $cnt++;
    }
    if ($cnt==0)
    return 'nil';
    elseif ($cnt<>0)
    return $cnt;
        
}
function microtime_float()
{
    list($usec, $sec) = explode(" ", microtime());
    return ((float)$usec + (float)$sec);
}
$unsortedarray=array(4,56,3,52,54,25,63,1);
echo microtime_float().'<br>';
insertion_sort($unsortedarray);
echo microtime_float().'<br>';
var_dump($unsortedarray);
echo microtime_float().'<br>';
$unsortedarray=array(4,56,3,52,54,25,63,1);
echo microtime_float().'<br>';
echo insertion_sort_book($unsortedarray);
echo microtime_float().'<br>';
var_dump($unsortedarray);
echo microtime_float().'<br>';
$unsortedarray=array(4,56,3,52,54,25,63,1);
insertion_sort_book_revert($unsortedarray);
var_dump($unsortedarray);
echo linear_search($unsortedarray,63);

