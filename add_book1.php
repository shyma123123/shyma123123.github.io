<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $title = $_POST['title'];
    $author = $_POST['author'];
    $genre = $_POST['genre'];
    
    // Create a new book object
    $newBook = new Book($title, $author, $genre);
    
    // Add the new book to the topBooks array
    $topBooks[] = $newBook;
    
    // Redirect back to the index.php page
    header('Location: index.php');
    exit;
}
?>
