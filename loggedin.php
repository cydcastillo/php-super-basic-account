<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Logged In!</title>
</head>
    <?php
            function compareCredentials ($un, $pass) {
                $username = "admin";
                $password = "admin123";

                if ($un == $username) {
                    if ($pass == $password) {
                        return true;
                    } else {
                        return false;
                    }
                } else {
                    return false;
                }
            }

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $un = $_POST["un"];
                $pass = $_POST["pass"];

                if(compareCredentials($un, $pass)) {
                    echo "Logged in";
                } else {
                    
                    echo "Wrong Credentials! <br>";
                }
        }
    ?>
    <a href="index.php">Go back!</a>
<body>
    
</body>
</html>