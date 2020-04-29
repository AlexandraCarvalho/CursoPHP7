<?php

#funcão anonima

function test($callback){

    //função anonima
    $callback();
}

test(function(){

    echo "Terminou!";

});

//outra declaração de função anonima
$fn = function($a){

    var_dump($a);

};

$fn("Oi");

?>