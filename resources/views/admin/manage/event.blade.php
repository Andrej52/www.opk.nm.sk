<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Events</title>
</head>
<body>
<h1>Event html</h1>
<div class="body-wrap">
    <main>
    @if ($action == 'add')
            <h3>This is form for adding</h3>
                            <form action="{{'create'}}" method="post">
                                <input type="text" name="header">
                                <input type="file" accept="image/*" name="files[]" multiple>
                                <input type="file" accept="doc/*" name="text">
                                <input type="file" accept="doc/*" name="docs[]">
                                <input type="submit" value="submit">          
                            </form>
                @elseif($action == 'edit')
                <h3>This is form for editting</h3>
                            <form action="" method="post">
                                <input type="text" name="header" value="{{'header'}}">
                                <input type="file" accept="image/*" name="files[]" multiple value="{{'images'}}">
                                <input type="file" accept="doc/*" name="text" value="{{'text'}}">
                                <input type="file" accept="doc/*" name="docs[]" value="{{'docs'}}">
                                <input type="submit" value="submit">          
                            </form>
                @endif
    
            <div class="loaded-imgs">
                <div class="thumbnail">
                    <img. src="" alt="cannot load image">
                </div>
            </div>
    </main>
</div>
</body>
</html>