<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the search criteria
    $searchTitle = $_POST['searchName'];
    $searchAuthor = $_POST['searchAuthor'];
    
    // Perform the search in the topBooks array
    $foundBooks = array_filter($topBooks, function($book) use ($searchTitle, $searchAuthor) {
        return ($book->title === $searchTitle && $book->author === $searchAuthor);
    });
}
?>
