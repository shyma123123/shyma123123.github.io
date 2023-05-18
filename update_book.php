<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>
    <?php
        // this php code is update jop_or_intrest that user enter in html from  
        // Variables
         $updateKey = $_POST['personId'];  //key of persons who will be updated
         $sname = "localhost";   //sarver name
         $user = "id18864194_book";
         $pass = "ew(mGXPF35U5Md1>";
        
         
         //create connection to server 
         $conn = mysqli_connect($servername , $username , $password , $dbname );
    
        //update value 
        if(isset($_POST['personId'])){
            //change data where primary key $info[1] 
            $newKey = $_POST['new_jop_or_intrest'];
            //update jop_or_intrest elements
            $update="UPDATE persons SET jop_or_intrest='" . $newKey. "' WHERE id='$updateKey' ";
            $update_result = mysqli_query($conn, $update);

            //show result
            //check if tuple updated then print 'data deleted successfully'
            if($update_result){
                if(mysqli_affected_rows($conn)>0){
                    echo("data updated successfully");//Success message
                    echo("return back and refresh page to see the change");
                }else{
                    echo("data are not updated");//Failure message
                    exit;
                }
            }
        }
        mysqli_close($conn);   //end connection
    ?>
</body>
</html>