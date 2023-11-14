<?php
session_start();
if(isset($_POST['submit'])) {
    require 'db.php';
    $tai_khoan = $_POST['tai_khoan'];
    $password = $_POST['password'];
    $sql = 'SELECT * FROM user WHERE ten_dang_nhap=:ten_dang_nhap';
    $statement = $connection->prepare($sql);
    $statement->execute([':ten_dang_nhap' => $tai_khoan ]);
    $user = $statement->fetch(PDO::FETCH_OBJ); 
    if($user != null && $user->mat_khau == $password) {
        $lifetime = 24*60*60;
        $_SESSION['email'] = $email;
        setcookie('lifetime',time()+$lifetime);
        setcookie($tai_khoan, $password,$lifetime, "/");
        header('Location: list_san_pham.php');
    } else {
             echo '<p style = "color:red";> Tên đăng nhập hoặc mật khẩu không đúng, mời đăng nhập lại! </p>';
           }
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
    <form 
        action="<?php echo  htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        <h3>Đăng nhập tài khoản: </h3>
        <div>
            <label for="password">Tài khoản:</label>
            <input type="text" id="tai_khoan" name="tai_khoan" >
            
        </div>
        <div>
            <label for="password">Mật khẩu:</label>
            <input type="password" id="password" name="password" style ="margin-left: 3px;">

        </div>
        <input type="submit" value="Submit" name="submit" style ="margin-left: 185px;">
    </form>
</body>
</html>