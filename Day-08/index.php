<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-uWxY/CJNBR+1zjPWmfnSnVxwRheevXITnMqoEIeG1LJrdI0GlVs/9cVSyPYXdcSF" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row mt-5">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form class="form-control" action="profile.php" method="post">
                    <label for="username">User Name:</label><br>
                    <input type="text" name="username" id="" placeholder="username"><br><br>
                    <label for="email">Email Address:</label><br>
                    <input type="email" name="email" id="" placeholder="email"><br><br>
                    <label for="password">Password:</label><br>
                    <input type="password" name="password" id="" placeholder="password"><br><br>
                    <input class="btn btn-success" type="submit" name="submit" value="Submit">
                </form>
                <button class="btn btn-sm btn-outline-danger"><?php
                    echo $_REQUEST ['wrongPassword'];
                ?></button>
            </div>
        </div>
    </div>
</body>

</html>