<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @include("components.styles")
    <title>Kontakt</title>
</head>
<body>
@include("components.navbar")
    <div class="body-wrap">
      <main>
        <section class="topic">
          <h3>OPK Nové Mesto nad Váhom</h3>
          <div class="content contact-data">
            <article>
              <span><p><strong>Adresa : </strong> <a target="_blank" href="https://goo.gl/maps/DQa9Pe3WhdVj7AVVA"><i class="fa fa-map-marker " aria-hidden="true"></i>Krčméryho 3</a></p></span>
              <span> <p> <a href="https://www.google.com/maps/dir//''/@48.7507873,17.7974029,13z/data=!4m8!4m7!1m0!1m5!1m1!1s0x471357d57da44d41:0x584e43bc9f14b211!2m2!1d17.8324222!2d48.7507926">navigovať</a> </p></span>
              <span><p><i class="fa fa-phone"></i><a href="tel:+421 907 217 779">+421 907 217 779</a></p>
                <p>  <i class="fa fa-envelope"></i>Email: <a href="mailto:novemesto@nm.opk.sk" >novemesto@nm.opk.sk</a></p></span>
                <span><strong>Číslo účtu-IBAN: </strong><p>SK69 0900 0000 0051 6294 7048</p></span>

            </article>
   
           <iframe class="map"  src="https://www.google.com/maps/embed?pb=!4v1621087887531!6m8!1m7!1sOTw-rwZZq5aHClDTETPwlg!2m2!1d48.75094050412611!2d17.83234916786034!3f164.46390574262267!4f9.567801539640016!5f0.7820865974627469" width="auto" height="auto" style="border:1;" allowfullscreen="true" loading="lazy"></iframe>
          </div>
        </section>
      </main>
      

      @include("components.sidebar")
      </div>
</body>
</html>