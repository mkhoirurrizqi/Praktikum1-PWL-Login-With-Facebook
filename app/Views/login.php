<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title?></title>
    <link rel="stylesheet" href="<?php echo base_url('/css/style.css');?>">
</head>
<body>
    <div class="container">
        <h1>Login Form</h1>
        <form action="/home/validasi" method="POST">
            <label for="email">Email/username</label>
            <input type="text" id="email" name="email" placeholder="Masukkan email/username">
            <br>
            <label for="password">Password</label>
            <input type="password" id="password" name="password" placeholder="Masukkan password">
            <br>
            <button type="submit" id="form-button">Login</button>
        </form> 
        <p id="fb-login-text">-Login with Facebook-</p>
        <a id="fb-login" href="https://www.facebook.com/v10.0/dialog/oauth?client_id=900105250804979&redirect_uri=http%3A%2F%2Flocalhost%3A8080%2F"><img src="<?php echo base_url('/img/fb-icon.png');?>" alt="fb-icon"></a>   
    </div>

</body>
</html>