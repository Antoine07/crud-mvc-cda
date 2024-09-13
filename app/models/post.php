<?php


// Fonction pour récupérer tous les posts
function getAllPosts()
{
    global $pdo;
    $query = "SELECT Post.*, Category.name AS category_name
    FROM Post 
    LEFT JOIN Category ON Post.category_id = Category.id";
    $stmt = $pdo->query($query);

    return $stmt->fetchAll();
}

// Fonction pour ajouter un nouveau post
function addPost(string $title,string $content,  string $categoryId)
{
    global $pdo;
    $query = "INSERT INTO Post (title, content, category_id) VALUES (?, ?, ?)";
    $stmt = $pdo->prepare($query);

    return $stmt->execute([$title, $content, $categoryId]);
}

// Fonction pour mettre à jour un post existant
function updatePost($id, $title, $content)
{
    global $pdo;
    $query = "UPDATE Post SET title = ?, content = ? WHERE id = ?";
    $stmt = $pdo->prepare($query);

    return $stmt->execute([$title, $content, $id]);
}

// Fonction pour supprimer un post
function deletePost($id)
{
    global $pdo;
    $query = "DELETE FROM Post WHERE id = ?";
    $stmt = $pdo->prepare($query);

    return $stmt->execute([$id]);
}
