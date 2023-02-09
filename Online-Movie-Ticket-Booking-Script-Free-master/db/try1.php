<?php
function myfun(){
    $ved="hello bro";
    return $ved;
}
function mynew(){

    $res=myfun();
    echo "your variable has $res";
}
$final=mynew();
?>