<?php
function ic(){
    static $num = 0;
    echo "$num";
    $num++;
}
ic();
ic();
ic();
?>