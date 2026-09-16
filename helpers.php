<?php

function dump(...$mars) {
    echo '<pre>';
    var_dump(...$mars);
    echo '</pre>';
}

function view($viewName, $variables=[]){
    extract($variables);
    include __DIR__ . "/views/$viewName.php";
}