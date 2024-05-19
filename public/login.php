<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="/css/common.css">
    <link rel="stylesheet" href="/css/girisyap.css">
</head>
<body>
    <div class="container">
        <div class="center">
            <h1>Giriş Yap</h1>
            <form action="auth.php" method="post">
                <div class="form-group">
                    <label for="username">Kullanıcı Adı:</label>
                    <input type="text" id="username" name="username" required>
                </div>
                <div class="form-group">
                    <label for="password">Şifre:</label>
                    <input type="password" id="password" name="password" required>
                </div>
                <div class="form-group">
                    <button type="submit">Giriş Yap</button>
                </div>
                <?php
                if (isset($_GET['error'])) {
                    if ($_GET['error'] == 'empty') {
                        echo "<p style='color:red;'>Kullanıcı adı ve şifre boş bırakılamaz.</p>";
                    } elseif ($_GET['error'] == 'invalidemail') {
                        echo "<p style='color:red;'>Geçerli bir e-posta adresi giriniz.</p>";
                    } elseif ($_GET['error'] == 'invalidcredentials') {
                        echo "<p style='color:red;'>Kullanıcı adı veya şifre hatalı.</p>";
                    }
                }
                ?>
            </form>
        </div>
    </div>
</body>
</html>
