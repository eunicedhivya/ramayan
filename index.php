<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link rel="stylesheet" href="css/style2.css">
</head>
<body>
    <div class="tf-wrapper">
        <section id="opening-scene">
           <div>
            <h1>Ramayan</h1>
            <h2>stories from around the world</h2>
           </div>
        </section>
        <section class="container" id="origins">
            <h2 class="animated bounce">Origins</h2>
            <p>Ramayana originated from India and The Ramayana has spread to many Asian countries outside of India, including Burma, Indonesia, Cambodia, Laos, Philippines, Sri Lanka, Nepal, Thailand, Singapore, Malaysia, Japan, Mongolia, Vietnam and China. The original Valmiki version has been adapted or translated into various regional languages, which have often been marked more or less by plot twists and thematic adaptations.</p>
            <img class="origin-map" src="img/world.svg" alt="">
        </section>
        <section class="container grid" id="india">
            <div class="col1">
                <h2>Ramayan <span>India</span></h2>
                <p>The Cambodian epic poem, is based on the Sanskrit's Ramayana epic anonymously written by at least three authors over three centuries. The earliest mention of this epic's manuscript in Cambodia dates back to the 7th century based on Veal Kantel inscription.While, the surviving text of Reamker that dates from 16th century.</p>
            </div>
            <div class="col2">
                <img src="img/world.svg" alt="">
            </div>
        </section>
        <section class="container" id="others" style="height:500px;">
            
        </section>
    </div>
    <script src="js/jquery-1.11.0.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.min.js"></script>
    <script>
        $(document).ready(function(){
            // init controller
			var controller = new ScrollMagic.Controller();


            var scene = new ScrollMagic.Scene({
                triggerElement: "#origins"
            })
            .setClassToggle("#origins .origin-map", 'fadein-up')
            .addTo(controller);
            
            var scene2 = new ScrollMagic.Scene({
                triggerElement: "#india"
            })
            .setClassToggle("#india .col1", 'fadein-left')
            .addTo(controller);
            
            var scene3 = new ScrollMagic.Scene({
                triggerElement: "#india"
            })
            .setClassToggle("#india .col2", 'fadein-right')
            .addTo(controller);
        });
    </script>
</body>
</html>

