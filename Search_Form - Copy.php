<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Search form</title>
    
    <style>
        .section{
            border: dotted rgb(86, 86, 86) thick;
            padding: 20px;
            margin-left: 15px;
            margin-right: 15px;
        }
        h3{
            color:rosybrown;
            font-weight: bold;
            font-family: 'Arial Narrow Bold', sans-serif;
            text-decoration: underline;
        }
        .button{
            border: thin gray;
            background-color:rosybrown ;
            padding: 8px;
            color:rgb(86, 86, 86) ;
        }
        h1{
            text-align: center;
            color:rgb(86, 86, 86) ;
            text-shadow: 3px 3px 5px rosybrown;
        }
        table {

        border: thick solid black;
        border-collapse: collapse;
        background-color:rosybrown ;
        }

        th {
        border: thin solid black;
        color:rgb(86, 86, 86);
        font-size: medium;
        font-style: bold;
        font-family: 'cursive';
        }

        td {
        border: thin solid black;
        font-size: medium;
        font-style: bold;
        font-family: 'cursive';
        }
    </style>
    
</head>


<!------------------------------ Header ------------------------------>
<header>
    <!-- Logo -->
    <a href="index.html"><img src="logo.png" alt="logo"></a>

    <!-- navigation bar for pages-->
   

  
</header>

<body>

<?php
// this php code is read data from database and display it in html table, 
// then user can search, insset, update and delete
$sname = "localhost";   //sarver name
$user = "id18864194_book";
$pass = "ew(mGXPF35U5Md1>";

// Create connection
$conn = new mysqli($sname, $user, $pass,$dbname);
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
//display all persons from database to html table 
$sql="select * from persons";
$result = mysqli_query($conn, $sql);
$noR = mysqli_num_rows($result); //no of rows
?>
<table cellpadding="10px" style="position: relative; left:500px">
<br/><br/>
    <h1>They work or are interested in reading-related fields</h1>
    <tr><th>ID</th><th>Name</th>
        <th>Gmail</th>><th>Jop or Intrest</th>
    </tr>
<?php
for($i=0;$i<$noR;$i++){
  $row = mysqli_fetch_assoc($result);
  echo "<tr>".
  "<td>".$row["id"]."</td>".
  "<td>".$row["name"]."</td>".
  "<td>".$row["gmail"]."</td>".
  "<td>".$row["jop_or_intrest"]."</td>".
  "</tr>";
}

mysqli_close($conn);
?>
</table>
<div>
<br/><br/>
    <hr>
    <br/><br/>
    <h1>Here you can Search, delete, update, insert in persons table</h1>
    <br/><br/>
  <div class="section">
      <form action="http://localhost/search_book.php" method="post">
      <h3>Type the jop or Intrset of person you want to search for</h3>
      <input type="text" placeholder="Jop or Intrset" name="jop_or_intrest" id="jop_or_intrest">
      <br/><br/>
      <input class="button" type="submit" value="Search" />
      </form>
  </div>
  <br/><br/>
  <div class="section">
    <form action="http://localhost/insert_book.php" method="post">
    <h3>Type book information to be added</h3>
    <label>ID:  <input type="text" placeholder="id" name="id"></label>
    <br/><br/>
    <label>Name:  <input type="text" placeholder="name" name="name"></label>
    <br/><br/>
    <label>Gmail:  <input type="gmail" placeholder="gmail" name="gmail"></label>
    <br/><br/>
    <label>Jop or Intrset:  <input type="text" placeholder="Jop or Intrset" name="jop_or_intrest"></label>
    <br/><br/>
    <input class="button" type="submit" value="Insert" />
    </form>
</div>
<br/><br/>
<div class="section">
    <form action="http://localhost/delete_book.php" method="post">
        <h3>Type id of person to be deleted</h3>
        <input type="text" placeholder="id" name="id_To_Delete"></label>
        <br/><br/>
        <input class="button" type="submit" value="Delete" />
    </form>
</div>
<br/><br/>
<div class="section">
    <form action="http://localhost/update_book.php" method="post">
        <h3>Enter the ID of the person you want to update</h3>
        <input type="text" placeholder="id" name="personId" id="personId">
        <br/><br/>
        <h3>Enter the new jop or intrest to be updated</h3>
        <input type="text" placeholder="jop or intrest" name="new_jop_or_intrest"></label>
        <br/><br/>
        <input class="button" type="submit" value="Update" />

    
    </form>
</div>
<br/><br/>
</div>  

</body>

<footer>
  <div class="bottom1" >
      <br>
     
  </div>
</footer>

</html>