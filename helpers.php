<?php

use App\Models\User;

function dump(...$mars) {
    echo '<pre>';
    var_dump(...$mars);
    echo '</pre>';
}

function dd(...$vars) {
    dump(...$vars);
    die;
}


function view($viewName, $variables=[]){
    extract($variables);
    include __DIR__ . "/views/$viewName.php";
}

function redirect($path) {
    header("Location: $path");
}

function auth() {
    $userID = $_SESSION['userID'] ?? null;
    if($userID) {
        return User::find($userID);
    }
    return false;
}