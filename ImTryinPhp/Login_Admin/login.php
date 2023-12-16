<!-- cek tombol sudah di tekan belum -->
<?php if( isset($_POST["submit"])) {
// ,<<<username dan password
if( $_POST["username"] == "admin" && $_POST["password"] =="123" ) {

// <!-- jika benar access granted -->
header("Location:homeadmin.php");
exit;
    } else {
    //jika password atau username salah access denied
    $err=true;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php if( isset($err)) : ?>
    <?php echo "
        <script>
        alert('Username atau password salah');
        document.location.href = 'login.php';
        </script> "; ?>
    <?php endif; ?>
    
    <form action="" method="post">
        <li>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </li>
        <li>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        </li>
        <!-- "name" dan "id" untuk tiap form atau button itu PENTING!!! -->
        <button type="submit" name="submit">masuk</button>
    </form>
    
</body>
</html>