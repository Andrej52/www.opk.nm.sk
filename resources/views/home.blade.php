<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("components.styles")
    <link rel="stylesheet" href="../css/adminpanel.css">
    <title>OPK-hlavná strana</title>
</head>
<body>
    @include("components.navbar")
    @if (session()->has('username'))
        @include("components.adminpanel")
    @endif
    <div class="body-wrap">
        <main>
                
        <div class="device"></div>

        </main>
        @include("components.sidebar")
    </div>
</body>
</html>
<script>
    device();

    function device()
    {
        document.querySelector(".device").innerHTML="zariadenie je: "+navigator.userAgent;
    }
</script>

