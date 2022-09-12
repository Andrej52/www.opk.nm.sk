<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("components.styles")
    <title>Strelnica-Lehota</title>
</head>
<body>
@include("components.navbar")
    <div class="body-wrap">
        <main>
            <section class="topic">
                    <h3 id="range-name">Strelnica Nová Lehota </h3>

                    <div class="content">

                        <article>
                            <p class="person"> Správca Strelnce : Daniel Plačko </p>
                            <p class="phone"> <i class="fa fa-phone"></i> 0905 204 411  </p>
                            <p class="mail"> <i class="fa fa-envelope"></i> PLACKO@KLIMA.SK  </p>
                            <p class="GPS"> <a target="_blank" href="https://goo.gl/maps/HYwmWCsmLjRS28at8"><i class="fa fa-home s" aria-hidden="true"></i> Nová Lehota č. 85, 916 36 -Modrová  </a></p>
                        </article>

                        <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3466.0543158999817!2d17.9831665!3d48.6562647!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xd417eaa599a0da4d!2zNDjCsDM5JzE2LjAiTiAxN8KwNTknMTIuMyJF!5e1!3m2!1ssk!2ssk!4v1651572001726!5m2!1ssk!2ssk "
                    width="auto" height="auto" frameborder="0" allowfullscreen="true" aria-hidden="false " tabindex="0"></iframe>

                    </div>   
            </section>
        </main>

        @include("components.sidebar")

    </div>
</body>
</html>
