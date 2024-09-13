<?php

require_once __DIR__ .'/../config/database.php';

// Fonction pour récupérer toutes les catégories
function getAllCategories() {
    global $pdo;
    $query = "SELECT * FROM category";
    $stmt = $pdo->query($query);

    return $stmt->fetchAll();
}

// Fonction pour ajouter une nouvelle catégorie
function addCategory($name) {
    global $pdo;
    $query = "INSERT INTO category (name) VALUES (?)";
    $stmt = $pdo->prepare($query);

    return $stmt->execute([$name]);
}

// Fonction pour mettre à jour une catégorie existante
function updateCategory($id, $name) {
    global $pdo;
    $query = "UPDATE Category SET name = ? WHERE id = ?";
    $stmt = $pdo->prepare($query);

    return $stmt->execute([$name, $id]);
}

// Fonction pour supprimer une catégorie
function deleteCategory($id) {
    global $pdo;
    $query = "DELETE FROM Category WHERE id = ?";
    $stmt = $pdo->prepare($query);

    return $stmt->execute([$id]);
}
