<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/adminpanel.css') }}">
    @include("components.styles")
    <title>Admin-mainPage</title>
</head>
<body>
@include("components.navbar")
@include("components.adminpanel")
        <div class="body-wrap">
            <main>
            <h1>Vitajte  admin </h1>
            <li>
                <a href="/">Hlavná stránka</a>
                <a href="">Naposledy vykonané zmeny</a>
            </li>
            </main>
        </div>
</body>
</html>