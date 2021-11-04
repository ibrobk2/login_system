<?php   

//establishing server connection
$server = mysqli_connect("localhost", "root", "", "khairat") or die("error connecting to database");
/*
if($server){
    echo "Connection successful";
}

*/

if(isset($_GET['btn'])){
    $username = $_GET['user'];
    $password = $_GET['pass'];
//fetchin data from our database
    $query = "SELECT * FROM user WHERE username='$username'";
    $result = mysqli_query($server, $query);

    $row = mysqli_fetch_assoc($result);

    $user = $row['username'];
    $pass = $row['password'];

    if($username==$user){
        header("location: home.php");
    }
    else{
        echo "invalid username/password";
    }

    
}

?>