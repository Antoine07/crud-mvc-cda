<?php

function path($name)
{
    return implode('/', explode('.', $name)) . '.php';
}
function view($name, $data = [])
{
    // ces variables sont définies dans app.php
    global $url_main, $url_style ;

    extract($data);

    $view = __DIR__ . '/../ressources/' . path($name);

    include_once $view;
}
