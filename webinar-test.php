<?php
$retval=fact(0);
function fact($arg,$cnt=0){ 
    if ($arg==0)  {
        return 1;
    } elseif($cnt==1){
        $cnt--;
        return $arg;
    } else {
        if ($cnt==0) {
            $cnt=$arg;
            $arg=$arg*(--$cnt);
            return fact($arg,$cnt);
        }    
        if ($cnt>0){
            $arg*=--$cnt;
            return fact($arg,$cnt);
        }
    }
}
//echo $retval;
$b=10;
$a=20;
list($a,$b)=array($b,$a);
//echo $a.''.$b;
$c=array(1,2,4,8,18,20,33,66,99);
$retval=func($c, 18);
echo $retval;
function func($c, $SearchingValue){
    for ($cnt=0;$cnt<count($c);$cnt++){
        if (($c[$cnt]-$SearchingValue)<0 && $cnt_md<($c[$cnt]-$SearchingValue)){
            $cnt_md=$c[$cnt]-$SearchingValue;
            $retval=$cnt;
        }
       if ($c[$cnt]==$SearchingValue){
            return $cnt;           
       }
    }
    return $retval;
}

?>