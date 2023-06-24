<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $expectedUsername = "admin";
    $expectedPassword = "admin123";

    $username = $_POST["username"];
    $password = $_POST["password"];

    if ($username == $expectedUsername && $password == $expectedPassword) {
        $_SESSION["username"] = $username;
        header("Location: admin.php");
        exit();
    } else {
        $pesan = "Login gagal! Username dan password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Maung Login</title>
    <style>
        /* CSS styling */
        body {
            background: url('walgaleri.jpeg'); /* Ganti 'background.jpg' dengan URL gambar latar belakang Anda */
            background-size: cover;
            font-family: 'Open Sans', sans-serif;
        }
        .login {
            width: 400px;
            margin: 16px auto;
            font-size: 16px;
            background-color: #93C572 ; /* Ganti dengan warna latar belakang yang diinginkan */
            border-radius: 6px;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }
        /* Reset top and bottom margins from certain elements */
        .login-header,
        .login p {
            margin-top: 0;
            margin-bottom: 0;
        }
        .login-header {
            background: #3CB371;
            padding: 20px;
            font-size: 1.4em;
            font-weight: normal;
            text-align: center;
            text-transform: uppercase;
            color: #fff;
            border-radius: 6px 6px 0 0;
        }
        .login-container {
            padding: 12px;
        }
        /* Every row inside .login-container is defined with p tags */
        .login p {
            padding: 12px;
        }
        .login input {
            box-sizing: border-box;
            display: block;
            width: 100%;
            border-width: 1px;
            border-style: solid;
            padding: 16px;
            outline: 0;
            font-family: inherit;
            font-size: 0.95em;
        }
        .login input[type="text"],
        .login input[type="password"] {
            background: #fff;
            border-color: #bbb;
            color: #555;
        }
        /* Text fields' focus effect */
        .login input[type="text"]:focus,
        .login input[type="password"]:focus {
            border-color: #888;
        }
        .login input[type="submit"] {
            background: #3CB371;
            border-color: transparent;
            color: #fff;
            cursor: pointer;
        }
        .login input[type="submit"]:hover {
            background: #17c;
        }
        /* Buttons' focus effect */
        .login input[type="submit"]:focus {
            border-color: #05a;
        }
    </style>
</head>
<body>
<div class="login">
    <div class="login-header">
        <h1>Login ke Maung</h1>
    </div>
    <div class="login-container">
        <?php if(isset($pesan)): ?>
            <p><?php echo $pesan; ?></p>
        <?php endif; ?>
        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <p>
                <label for="username">Username</label>
                <input type="text" name="username" id="username" placeholder="Masukkan username" required>
            </p>
            <p>
                <label for="password">Password</label>
                <input type="password" name="password" id="password" placeholder="Masukkan password" required>
            </p>
            <p>
                <input type="submit" value="LOGIN">
            </p>
        </form>
    </div>
</div>
</body>
</html>
