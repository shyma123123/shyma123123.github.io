<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>delete</title>
</head>
<body>
<?php
       // this php code is delete row that user enter in html from  (user enter id of person)
        $deleteKey = $_POST['id_To_Delete'];  //key of persons who will be deleted
        $sname = "localhost";   //sarver name
        $user = "id18864194_book";
        $pass = "ew(mGXPF35U5Md1>";
        
        //create connection
        $conn = mysqli_connect($servername , $username , $password , $dbname );

        //delete
    if(isset($_POST['id_To_Delete'])){
        //delete the tuples which have this primary key 
        $delete = "DELETE FROM persons WHERE id='$deleteKey' ";
        //check if tuple deleted then print 'data deleted successfully'
        $delete_result = mysqli_query($conn, $delete);
        if($delete_result){
            if(mysqli_affected_rows($conn)>0){
                echo("data deleted successfully");//Success message
                echo("return back and refresh page to see the change");
            }else{
                echo("unavailable data");//Failure message
                exit;
            }
        }
    }
    mysqli_close($conn); //end of connection
    ?>
</body>
</html>