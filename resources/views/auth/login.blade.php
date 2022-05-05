<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Login</h1>
    <form action="/login-efetuado" method="POST">
        @csrf
        
    <label for="">Email</label>
    <br>
    <input type="email" name= "email" required>
    <br>
    <label for="">Senha</label>
    <br>
    <input type="password" name= "password" required>
    <br>
    <input type="submit" value ="Login">
    </form>
</body>
</html>
