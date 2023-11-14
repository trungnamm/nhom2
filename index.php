<?php 
    if(isset($_COOKIE['lifetime'])) $lifetime = time()-$_COOKIE['lifetime'];
    else $lifetime =-1;
    session_start();
    if(isset($_SESSION['email']) and $lifetime<0) {
        header("Location: /Project_demo/list_san_pham.php");
    } else {   
        header("Location: /Project_demo/list_san_pham_guest.php");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1></h1>
</body>
</html>