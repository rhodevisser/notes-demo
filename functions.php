<?php 

function dumbDie($value) {
echo  "<pre>";
var_dump($value);
echo "</pre>";

die(); 

}


function urlIs($value) {
    return $_SERVER['REQUEST_URI'] === $value; 
}

function authorize($condition, $status = Response::UNAUTHORIZED){
    if (! $condition){
        abort($status);
    }
}