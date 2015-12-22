<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
$unsortedarray=array(4,56,3,52,54,25,63,1);

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

insertion_sort($unsortedarray);
var_dump($unsortedarray);