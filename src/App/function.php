<?php 


declare(strict_types=1);

function dd(mixed $value){
    echo "<pre>";
    var_dump($value);
    echo "</pre>";
    die();
}

function e(mixed $value){
    return htmlspecialchars($value,ENT_QUOTES,'utf-8');
}

function redirectTo(string $path){
    header("Location: {$path}");
    http_response_code(302);
    exit;
}
?>