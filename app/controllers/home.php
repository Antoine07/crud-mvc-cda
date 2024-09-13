<?php


function home_controller()
{
    $posts = getAllPosts() ;

    view('home.index', ['posts' => $posts]);
}