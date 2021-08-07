<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='mystyle.css'>
    <title>11 PHP paskaita</title>
</head>
<body>

<div class='container'>
        <div class='left-column'>
            <div class='left-column-container'>
                <h1>Sign up</h1>

                <div class='links'>
                    <a href='#'>Privacy policy</a>
                    <p>&</p>
                    <a href='#'>terms of service</a>
                </div>
            </div>
        </div>
        <div class='right-column'>

        <form action='signup.php' method='get'>
            <div class='right-column-container'>
                <span class='close'>x</span>
                <div class='input'>
                    <label for='username'>USERNAME</label>
                    <input placeholder='Enter your user name' type='text' id='username' name='username' />
                </div>
                <div class='input'>
                    <label for='email'>E-MAIL</label>
                    <input placeholder='Enter your E-mail' type='text' id='email' name='email' />
                </div>
                <div class='input'>
                    <label for='password'>PASSWORD</label>
                    <input placeholder='Enter your password' type='text' id='password' name='password' />
                </div>
                <div class='input'>
                    <label for='repeat_password'>REPEAT PASSWORD</label>
                    <input placeholder='Enter your password' type='text' id='repeat_password' name='repeat_password' />
                </div>

                <div class='right-column-bottom-action'>

                     <button class='btn'>Get started</button>
                    <p class='or'>or</p>
                    <a href='login'>Sign in</a> 
                
                </div>
            </div>
        </div>
        </form>
    </div>

    <?php

if(isset($_COOKIE["prisijungti"]) && isset($_COOKIE['teises'])) 
    header("Location: manopaskyra.php");


    if(isset($_GET['login'])) 
        header('Location: login.php')
    
    

    ?>
    
    
    
    
</body>
</html>