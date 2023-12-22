<?php
$Username=$_REQUEST['Username'];
$Passwordname=$_REQUEST['pass'];
$Email=$Email_REQUEST['Email'];
if(isset($_POST['Long in']))
     $host="localhost";
    $user="root";
    $password="";
    $db="BIS";
    $conn =mysqli_connect($host,$user,$password,$db);
    $insert="insert into BIS4 values('$Username','$pass','$Email');
    $mysqli_query($conn,$insert);

    if($conn){
        echo("<h1 style=' coloer :black ';> your Resgistration is done!</h1>"); 
    }
    else{"<h1 style=' coloer :red ';> your Resgistration is failed!</h1>");
}

?>
