<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
<<<<<<< HEAD
    @include("components.styles")
    <title>Document</title>
=======
    <link rel="stylesheet" href="{{ asset('css/adminpanel.css') }}">
    @include("components.styles")
    <title>Admin-mainPage</title>
>>>>>>> 2a58b658eb97b0e27372efc829c625e54993044d
</head>
@include("components.navbar")
@include("components.adminpanel")
<body>
<<<<<<< HEAD
    <div class="intro-text">
        <h1>Vitajte  admin </h1>

    </div>
    <div>
       <select name="last-uploaded" id="uploaded">
       <option value="topics">prispevky</option>
       <option value="gallery">fotogaleria</option>
       <option value="events">udalosti</option>
       </select>
       <table>
        <tr class="changes-header">
            <th>ID</th>
            <th>meno</th>
            <th>akcia</th>
            <th>datum_zmeny</th>
            <th>vykonal</th>
        </tr>
        <tr class="changes-data">
            <td>0</td>
            <td>meno</td>
            <td>upload</td>
            <td>2021</td>
            <td>admin</td>
        </tr>
       </table>
    </div>
        <p>po logine si tu</p>
=======
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
>>>>>>> 2a58b658eb97b0e27372efc829c625e54993044d
</body>
</html>
<style>
    body
    {
        background: gray;
    }
</style>