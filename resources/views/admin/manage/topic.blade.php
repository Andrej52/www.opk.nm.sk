<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("components.styles")
    <title>topics</title>
</head>
<body>
    <div class="body-wrap">
        <main>
            <p> this is page for adding items into DB (FORM) method</p>
            @if ($action == 'add')
                <h3>This is form for adding</h3>
                <form action="{{'create'}}" method="post">
                    <input type="hidden" name="tablename" value="topics">
                    <input type="text" name="" value="nadpis">
                    <input type="file" accept="image/*" name="files[]" multiple>
                    <input type="file" accept="doc/*" name="text">
                    <input type="file" accept="doc/*" name="docs[]">
                    <input type="submit" value="upload">          
                </form>
            @elseif($action == 'edit')
                    <h3>This is form for editting</h3>
                    <form action="" method="post">
                        <input type="hidden" value="topics">
                        <input type="hidden" name="id" value="{{$data[0]->id}}">
                        <input type="text" name="header" value="{{$data[0]->Header}}">
                        <input type="file" accept="image/*" name="files[]" multiple value="$data[0]->image">
                        <input type="file" accept="doc/*" name="text" value="{{'text'}}">
                        <input type="file" accept="doc/*" name="docs[]" value="{{'docs'}}">
                        <input type="submit" value="edit">          
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