<!DOCTYPE html>
<title>login</title>
<html lang="en">
    <head>
        <title>Login</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="{{ asset('css/login.css') }}" rel="stylesheet">
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
            <div><i class="fa fa-home" aria-hidden="true"></i><a href="/">Uvodná stranka</a></div>
        </div>
    </body>
</html>

<script>
        /*  Admin password show */
        function show_Password(showPassword)
        {   
        if (showPassword.checked === true) 
            document.querySelector("#password").setAttribute("type","text");
        else
            document.querySelector("#password").setAttribute("type","password");
        };
        function checkEvt(){
        var evTypep=window.performance.getEntriesByType("navigation")[0].type;
        if (evTypep=='reload')
         window.location.replace("login");
        }
        document.querySelector(".login-btn").addEventListener("click", (event) => {
            document.querySelector(".forgot-password-btn").style.display = "flex";
        })
</script>