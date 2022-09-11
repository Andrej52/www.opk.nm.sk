<!DOCTYPE html>
<title>login</title>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">

        <!--
        <link href="public/assets/css/login.css" rel="stylesheet">
        <script defer src="public/assets/js/http.js"></script>
-->
    </head>
    <body>         
        <div class="login-wrap">
            <form action="{{ route('loginUser') }}" method="POST">
                @csrf
                <h1>Admin Login</h1>
                <input type="text" name="name_or_email" placeholder="Meno alebo e-mail">
                <input type="password" name="password" placeholder="Heslo">
                <button class="login-btn" type="submit">Login</button>
            </form>
        </div>
    </body>
</html>
