<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>admin login</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css"
        integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="icon" href="../img/icon.png" type="image/png">
    <style>
        /* styles.css */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .login-container {
            text-align: center;
            background-color: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 400px;
        }


        h1 {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 0.5rem;
        }

        .subtitle {
            font-size: 1rem;
            color: #666;
            margin-bottom: 2rem;
        }

        .login-button {
            width: 100%;
            padding: 0.75rem;
            background-color: #ffc107;
            border: none;
            border-radius: 50px;
            font-size: 1rem;
            font-weight: bold;
            color: white;
            cursor: pointer;
            margin-top: 1rem;
        }

        .login-button:hover {
            background-color: #e0a800;
        }

    </style>
</head>

<body class="bg-warning">
    <div class="login-container">
        <div class="logo mb-3">
            <i class="fa-solid fa-user-tie text-secondary" style="font-size: 100px;"></i>
        </div>
        <h1>Welcome to Admin pre M1</h1>
        <hr>
        <form action="php_login.php" method="post">
            <div class="mb-3 text-start">
                <label for="usernaem" class="form-label"><i class="fa-solid fa-circle-user"></i> Username</label>
                <input type="text" id="username" class="form-control" name="username" required>
            </div>
            <div class="mb-3 text-start">
                <label for="password" class="form-label"><i class="fa-solid fa-key"></i> Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            <button type="submit" class="login-button">LOGIN</button>
        </form>
    </div>


    <script src="	https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>