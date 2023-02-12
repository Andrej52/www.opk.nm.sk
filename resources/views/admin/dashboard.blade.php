<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("components.styles")
    <title>Document</title>
</head>
@include("components.navbar")
@include("components.adminpanel")
<body>
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
</body>
</html>
<style>
    body
    {
        background: gray;
    }
</style>