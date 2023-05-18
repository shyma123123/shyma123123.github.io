<?php
// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the entered book information from the form
    $title = $_POST['title'];
    $author = $_POST['author'];

    // Create a Book object
    class Book {
        public $title;
        public $author;

        public function __construct($title, $author) {
            $this->title = $title;
            $this->author = $author;
        }
    }

    // Initialize the session if not already started
    session_start();

    // Retrieve the existing book array from the session
    $topBooks = $_SESSION['topBooks'] ?? [];

    // Add the new book to the array
    $topBooks[] = new Book($title, $author);

    // Update the book array in the session
    $_SESSION['topBooks'] = $topBooks;

    // Redirect back to the original page or any other desired page
    header('Location: index.html');
    exit;
}
?>
