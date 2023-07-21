<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="login.php" method="post">
        <h2>LOGIN</h2>

        <?php
        if (isset($_GET['error'])) {    ?>
            <p class="error"><?php echo $_GET['error']; ?></p>
      <?php  }
        ?>
        <label for="">User name</label>
        <input type="text" name="ho_ten" placeholder="User name">

        <label for="">Password</label>
        <input type="password" name="mat_khau" placeholder="User name">

        <button type="submit">LOGIN</button>
    </form>
</body>
</html>