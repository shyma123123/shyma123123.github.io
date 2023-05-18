<!DOCTYPE html>
<html lang="en">
<head>
  <title>Glance</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="register.css">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet" type="text/css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    #book {
      font-family: Arial, Helvetica, sans-serif;
      border-collapse: collapse;
      width: 100%;
    }
    
    #book td, #book th {
      border: 1px solid #ddd;
      padding: 8px;
    }
    
    #book tr:nth-child(even){background-color: #f2f2f2;}
    
    #book tr:hover {background-color: #ddd;}
    
    #book th {
      padding-top: 12px;
      padding-bottom: 12px;
      text-align: left;
      background-color: #060606;
      color: white;
    }
    .navbar {
    font-family: Montserrat, sans-serif;
    margin-bottom: 0;
    background-color: #2d2d30;
    border: 0;
    font-size: 11px !important;
    letter-spacing: 4px;
    opacity: 0.9;
  }
  .navbar li a, .navbar .navbar-brand { 
    color: #d5d5d5 !important;
  }
  .navbar-nav li a:hover {
    color: #fff !important;
  }
  .navbar-nav li.active a {
    color: #fff !important;
    background-color: #29292c !important;
  }
  .navbar-default .navbar-toggle {
    border-color: transparent;
  }
  .open .dropdown-toggle {
    color: #fff;
    background-color: #555 !important;
  }
  .dropdown-menu li a {
    color: #000 !important;
  }
  .dropdown-menu li a:hover {
    background-color: red !important;
  }
    </style>

</head>
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">
<script>
    function Book(title, author) {
        this.title = title;
        this.author = author;
        
      }

    
      let topBooks = [
    new Book("In Love","Amy Bloom"),
    new Book("South to America","Imani Perry"),
    new Book("Ducks", "Kate Beaton"),
    new Book("The Escape Artist", "Jonathan Free"),
    new Book("An immense World", "Ed Yong")]
  
 
function addBook(){

let btnAdd = document.getElementById("btn");
let t=document.getElementById("title").value;
let a=document.getElementById("author").value;
topBooks.push(new Book(t,a));

}
      

      


    $(document).ready(function(){
        // Initialize Tooltip
        $('[data-toggle="tooltip"]').tooltip(); 
        
        // Add smooth scrolling to all links in navbar + footer link
        $(".navbar a, footer a[href='#myPage']").on('click', function(event) {
      
          // Make sure this.hash has a value before overriding default behavior
          if (this.hash !== "") {
      
            // Prevent default anchor click behavior
            event.preventDefault();
      
            // Store hash
            var hash = this.hash;
      
            // Using jQuery's animate() method to add smooth page scroll
            // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
            $('html, body').animate({
              scrollTop: $(hash).offset().top
            }, 900, function(){
         
              // Add hash (#) to URL when done scrolling (default click behavior)
              window.location.hash = hash;
            });
          } // End if
        });
      })
      </script>
      
    
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
        </button>
        <a class="navbar-brand" href="#myPage">Logo</a>
      </div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.html">HOME</a></li>
          <li><a href="Books.html">Books</a></li>
          <li><a href="Register.html">Register</a></li>
          <li><a href="funpage.html">Game</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">Articles
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="BestSellerBooks.html">Best sellers</a></li>
              <li><a href="BestNonFictionBooks.html">Best nonfiction</a></li>
            </ul>
          </li>
          <li><a href="calculations.html">cart</a></li>

          <li><a href="Contact.html">Contact</a></li>
          <li><a href="About.html">About</a></li>
          <li><a href="#"><span class="glyphicon glyphicon-search"></span></a></li>
        </ul>
      </div>
    </div>
  </nav>
 
     
  <br><br> <br>
  <h1 style="color: #ddd;">The Top 5 nonFiction</h1>
  <pre>

Here is the list of the top 5 best nonFiction books, but to find more you can 
visit this link:
<a href="https://www.theguardian.com/news/datablog/2012/aug/09/best-selling-books-all-time-fifty-shades-grey-compare">The best 100 books ever!</a>
  </pre>
  <table id="peopleTable" border="solid" style="color: #ddd; border-color: #ddd;border-width: 5px; margin:5pt;">
    <thead>
      <tr>
        <th>Title</th>
        <th>Author</th>
      </tr>
    </thead>
    <tbody></tbody>
  </table>
  <form action=""><input type="button" value="press" onclick="displayBooks(topBooks)"></form>

  <div class="login-page">
    <div class="form">
      <div class="login">
        <div class="login-header">
          <h3>Add A Book</h3>
          <p>Please enter the book info here.</p>
        </div>
      </div>
      <form class="login-form">
        <input type="text" placeholder="Book name" id="title" required/>
        <input type="text" placeholder="author" id="author" required/>
        <form class="login-form" action="add_book.php">
          
      </form>
    </div>
  </div>

  <div class="login-page2">
    <div class="form">
      <div class="login">
        <div class="login-header">
          <h3>Search</h3>
          <p>Please enter the book info here.</p>
        </div>
      </div>
      <form class="login-form">
        <input type="text" placeholder="Book name" id="searchName" required/>
        <input type="text" placeholder="author" id="searcAuthor" required/>
        <form class="login-form" action="search_books.php">
         
      </form>
    </div>
  </div>
  <pre>






























  </pre>
  <footer class="text-center">
      <a class="up-arrow" href="index.html" data-toggle="tooltip" title="TO TOP">
        <span class="glyphicon glyphicon-chevron-up"></span>
      </a><br><br>
      <p>Glance</p> 
    </footer>
</body>
</html>