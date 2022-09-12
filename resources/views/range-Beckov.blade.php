<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("components.styles")
    <title>Strelnica-Beckov</title>
</head>
<body>

@include("components.navbar")

    <div class="body-wrap">
        <main>
            <section class="topic">
                    <h3 id="range-name">Strelnica PZ Hurban Beckov </h3>

                    <div class="content">

                        <article>
                            <p class="person"> Správca Strelnce : ing. Marek Jambor </p>
                            <p class="phone"> <i class="fa fa-phone"></i> +421 905 933 015 </p>
                            <p class="mail"> <i class="fa fa-envelope"></i> marek.jambor1@gmail.com  </p>
                            <p class="GPS"> <a target="_blank" href="https://goo.gl/maps/CTh6q4uM67ijQLbp8"><i class="fa fa-home s" aria-hidden="true"></i> Beckov 115, 916 38  </a></p>
                        </article>

                        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3214.0485215437825!2d17.905518676881744!3d48.78680488254937!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4714a7d19117c111%3A0xc1c027b85305e231!2sBeckov%20115%2C%20916%2038%20Beckov!5e1!3m2!1ssk!2ssk!4v1612524006822!5m2!1ssk!2ssk "
                        width="auto" height="auto" frameborder="0" allowfullscreen="true" aria-hidden="false " tabindex="0"></iframe>

                    </div>
                    
                    <div class="gallery-container">
                        <div class="gallery-thumbnail">
                            <img src="" alt="img1">
                            <img src="" alt="img2">
                        </div>
                        <div class="gallery-header">Header galerie</div>
                    </div>
            </section>
        </main>

        @include("components.sidebar")
    </div>
</body>
</html>
