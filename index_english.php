<?php
    require_once("view/head_english/headerindex.php");
?>
    <head>
            <title>MOVE-IT</title>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
            <link href="asset/css/index.css" rel="stylesheet">
            <meta http-equiv="X-frame-Options" content="DENY">
            <script src="asset/js/main.js"></script>
    </head>
    <body>
    <div class="overlay" id="overlay">
        <div class="loader"></div>
    </div>
    <div class="container-fluid">
        <div class="row section-1">
            <div class="col-5">
                <h4 class="pb-1 mb-3 slogan">NOS MOVEMOS POR TI</h4>
            </div>
            <div class="col section-1-right">
                <div class="container-section-1-right">

                </div>
            </div>
        </div>
        <div class="option-div">
            <div class="options">
                <img src="asset/image/ac.png" width="80" alt="">
                <div class="title-option">Personalized attention</div>
                <div class="text-option">We offer you a unique service, adapted to your needs, with specialized attention to every detail.</div>
            </div>
            <div class="options">
                <img src="asset/image/chat.png" width="80" alt="">
                <div class="title-option">Direct chat with the driver</div>
                <div class="text-option">Maintain constant communication with the driver of your move through our real-time chat.</div>
            </div>
            <div class="options">
                <img src="asset/image/precios.png" width="80" alt="">
                <div class="title-option">Accessible prices</div>
                <div class="text-option">Quality and affordability come together in our prices so that moving is not a headache for your pocket.</div>
            </div> 
        </div>
        <div class="option-div">
            <div class="options">
                <img src="asset/image/pa.png" width="80" alt="">
                <div class="title-option">Professionals in the field</div>
                <div class="text-option">Our in-house team is focused on meeting your needs and ensuring that your move is a worry-free experience.</div>
            </div>
            <div class="options">
                <img src="asset/image/soporte.png" width="80" alt="">
                <div class="title-option">24/7 Support</div>
                <div class="text-option">We are available 24 hours a day, 7 days a week, to provide support at any time.</div>
            </div>
        </div>
        <div class="row footer">
            <div class="col-5 rights">
                <p class="">© 2023 Move-it Corp. All rights reserved</p>
            </div>
            <div class="col-5"></div>
            <div class="col socials">
                <button title="X" class="x" style="color: rgba(255, 255, 255, 0);" onclick="window.location.href='https://twitter.com/?lang=es';">x</button>
                <button title="Youtube" class="youtube" style="color: rgba(255, 255, 255, 0);" onclick="window.location.href='https://www.youtube.com/';">youtube</a>
                <button title="Instagram" class="instagram" style="color: rgba(255, 255, 255, 0);" onclick="window.location.href='https://www.instagram.com/';">instagram</a>
            </div>
        </div>
    </div>
    </body>
<?php
    require_once("view/head/footer.php");
?>