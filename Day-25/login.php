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
                <h4>Login</h4>
                     <form class="form-control text-justify-center" action="check.php" method="post">
                        <input type="text" name="username" id="" placeholder="username"><br><br>
                        <input type="password" name="password" id="" placeholder="password"><br><br>
                        <input class="btn btn-sm btn-success" type="submit" name="submit" value="Login">
                        <a href="index.php" class="btn btn-sm btn-primary" type="submit" name="submit">Back</a>
                    </form>
                    <span>Developed by <a class="btn btn-sm" href="https://riaz.fastitbd.com">Md Riazul Islam</a></span>
                
            </div>
        </div>
    </div>
</body>

</html>