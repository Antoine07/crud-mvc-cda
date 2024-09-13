<?php


function create()
{
    $categories = getAllCategories();

    view('admin.post.create', ['categories' => $categories]);
}

function handleCreatePost()
{

    $title = $_POST['title'];
    $content = $_POST['content'];
    $category_id = $_POST['category'];

    // Ajouter le post avec la catégorie existante
    addPost(title : $title, content: $content, categoryId: $category_id);

    // Rediriger vers la page d'accueil ou une autre page
    header('Location: /dashboard');
}

function dashboard_controller(){
    $posts = getAllPosts(); 

    view('admin.post.index', ['posts' => $posts]);
}

function deletePostByID(){
    $id = $_POST['delete_id']; 
    // token verif TODO
    deletePost($id);

    header('Location: /dashboard');
}