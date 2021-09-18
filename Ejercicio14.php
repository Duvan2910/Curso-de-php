<?php
$name = 'david';
function getname(){
    global $name;
    echo $name;
}

getname();

//outputs 'david'
?>