<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="public/assets/css/login.css" rel="stylesheet">
    <title>Admin login</title>
</head>
<body>
        <div class="login-wrap">
            <form>
                <h1>Admin Login</h1>
                    <input  type="text" name="username" placeholder="Užívatelské meno/Email" aria-required="true">
                    <input type="password" name="password" id="password" placeholder="Heslo" aria-required="true">
                    <label>Zobraziť Heslo <input type="checkbox" name="showPassword"  onclick="show_Password(this)"></label>
            </form>
                <button class="login-btn" type="button" id="SignIn" onclick="post(this)">Login</button>
                <button class="forgot-password-btn">Zabudnuté Heslo</button>
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