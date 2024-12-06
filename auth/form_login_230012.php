<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pet Clinic iKi</title>
</head>

<body>
    <h1>Pet Clinic iKi</h1>
    <hr>
    <h3>Welcome to the clinic</h3>

    <form action="login_230012.php" method="POST">
        <table>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username_230012" id=""></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password_230012" id="pass" required></td>
                <td><button      type="button">Show</button></td>
            </tr>
            <tr>
                <td></td>
                <td>
                    <input type="submit" value="LOGIN" name="login" required>
                    <input type="reset" value="RESET" name="reset" required>
                </td>
            </tr>
        </table>
    </form>

    <script>
        function show() {
            var x = document.getElementById("pass");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>
</body>

</html>