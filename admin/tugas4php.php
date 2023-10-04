<?php
function cekLogin($username, $password) {
    $usernameAdmin = 'admin';
    $passwordAdmin = 'mimin';

    if ($username === $usernameAdmin && $password === $passwordAdmin) {
        return true; 
    } else {
        return false;
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Login | Tugas 4 PHP</title>
</head>
<body>
    <h1>Selamat Datang, Silahkan Login!</h1>
    <form method="POST">
        <table >
            <thead align="center">
                <tr>
                    <th>FORM LOGIN</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <label for="username">Username:</label></td>
                    <td> <input type="text" id="username" name="username" required><br></td>
                </tr>
                <tr>
                    <td><label for="password">Password:</label></td>
                    <td><input type="password" id="password" name="password" required><br></td>
                </tr>
            </tbody>
            <tfoot>
                <tr>
                    <td><input type="submit" name="login" value="Login"></td>
                </tr>
            </tfoot>
        </table>
    </form>
</body>
</html>

<?php
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $result = cekLogin($username, $password);

    if ($result === true) {
        header('Location: admin.php');
        exit;
    } else {
        echo '<p>Maaf username dan password Anda salah</p>';
    }
}
?>