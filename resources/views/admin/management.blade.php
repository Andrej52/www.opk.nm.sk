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
                    <p>prispevky:</p>
                    <div class="frame">
                        <a href="manage/topic/add/null" class="action-btn">Add</a>
                    </div>
                </section>

                <section class="manage-section galleries">
                    <p>galerie </p>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                   :</p>
                    <div class="frame">
                     <a href="manage/gallery/add/null" class="action-btn">Add</a>
                    </div>
                </section>
                
                <section class="manage-section events">
                    <p>eventy:</p>
                    <div class="frame">
                    <a href="manage/event/add/null" class="action-btn">Add</a>
                    </div>
                </section>
            </main>
        </div>
</body>
</html>