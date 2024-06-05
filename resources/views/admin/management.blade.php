<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("components.styles")
    <link rel="stylesheet" href="../css/adminpanel.css">
    <title>Management page</title>
</head>
<body>
    @include("components.navbar")
    @include("components.adminpanel")
    <div class="body-wrap">
            <main>
                <h1>Vitajte  v managemente </h1>
                <section class="manage-section topics">
                    <h4>prispevky:</h4>
                    <div class="frame">
                        <a href="manage/topic/add/null" class="action-btn">Pridaj</a>
                    </div>
                </section>

                <section class="manage-section galleries">
                    <h4>galerie </h4>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   :</h4>
                    <div class="frame">
                     <a href="manage/gallery/add/null" class="action-btn">Pridaj</a>
                    </div>
                </section>
                
                <section class="manage-section events">
                    <h4>eventy:</h4>
                    <div class="frame">
                    <a href="manage/event/add/null" class="action-btn">Pridaj</a>
                    </div>
                </section>
            </main>
        </div>
</body>
</html>