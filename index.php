<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">
    <title>Registration form</title>
</head>
<body>
    <div class="container mt-4">
        <?php 
            if($_COOKIE['user'] == ''):
        ?>
        <div class="row">
            <div class="col">
                <h1>Registration form</h1>
                    <form action="check.php" method="POST">
                        <input type="text" class="form-control" name="login" id="login" placeholder="Enter login..."><br/>
                        <input type="text" class="form-control" name="name" id="name" placeholder="Enter name..."><br/>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter password..."><br/>
                        <button name="btn" type="submit" class="btn btn-success">Register</button>
                    </form>
            </div>
            <div class="col">
                <h1>Authorization form</h1>
                    <form action="auth.php" method="POST">
                        <input type="text" class="form-control" name="login" id="login" placeholder="Enter login..."><br/>
                        <input type="password" class="form-control" name="pass" id="pass" placeholder="Enter password..."><br/>
                        <button type="submit" class="btn btn-success">Login</button>
                    </form>
            </div>
        </div>
            <?php else: ?>
                <p>Hello <?=$_COOKIE['user']?>.For exit <a href="exit.php">click here</a></p>
        <?php endif ?>        

    </div>
        
</body>
</html>