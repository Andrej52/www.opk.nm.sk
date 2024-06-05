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
                <form action="{{'create'}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="tablename" value="topics">
                    <input type="text" name="header" value="nadpis">
                    <input type="file" accept="image/*" name="thumbnail">
                    <textarea rows='15' cols='50' name="text"></textarea>
                    <input type="file" accept="doc/*" name="docs[]" multiple>
                    <select name="subpage" >
                        <option value="aktuality">aktuality</option>
                        <option value="kurzy">strelectvo</option>
                        <option value="podujatia">aktuality</option>
                    </select>
                    <input type="submit" value="upload">          
                </form>
            @elseif($action == 'edit')
                    <h3>This is form for editting</h3>
                    <!---
                    "{{ route('manage.update', ['type' => topic, 'id' => $post->id]) }}"
                    -->
                    <form action="{{'update'}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <input type="hidden" value="topics">
                        <input type="hidden" name="id" value="{{$data[0]->id}}">
                        <input type="text" name="header" value="{{$data[0]->Header}}">
                        <div class="thumbnail">
                            <img. src="" alt="cannot load image">
                        </div>
                        <input type="file" accept="image/*" name="thumbnail" multiple value="$data[0]->image">
                        <textarea rows='15' cols='50' name="text" value="{{$data[0]->text}}"></textarea>
                        <!-- SEM DAT loop na files vedla seba ktore budu jednotlivo mozne odstranit -->
                        <input type="file" accept="doc/*" name="docs[]" value="{{'docs'}}">
                        <select name="subpage" >
                            <option value="aktuality">aktuality</option>
                            <option value="kurzy">strelectvo</option>
                            <option value="podujatia">aktuality</option>
                        </select>
                        <input type="submit" value="edit">          
                    </form>
            @endif
        </main>
    </div>
</body>
</html>