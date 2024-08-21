<?php


function get_root_path(){
    return $_SERVER["DOCUMENT_ROOT"];
}

function get_view_path(){
    return $_SERVER["DOCUMENT_ROOT"]. "/app/View/";
}