<?php

function multiply($num1=false,$num2=false){
    if(!$num1 || !$num2) 
    throw new Exception("2 numbers are required for multiplication");
    return $num1 * $num2;
}
try{
    echo multiply();
}catch(Exception  $e){
    echo $e->getMessage();
}


?>