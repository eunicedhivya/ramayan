$(document).ready(function(){
    // init controller
    var controller = new ScrollMagic.Controller();

    // $("#opening-scene h1#mainTitle").wrapEach(/(.)/g, "<span>$1</span>");
    //  var laola = new TimelineMax()
    //                 .add(TweenMax.staggerTo("#start h1 span", 0.5, {top: -150, x: -75, scale: 2, color: '#ff4468' }, 0.2))
    //                 .add(TweenMax.staggerTo("#start h1 span", 0.5, {top: 0, x: 0, scale: 1, color: '#fff'}, 0.2), 0.5);

    //             // container pin
    //             var startpin = new ScrollMagic.Scene({
    //                     duration: 700
    //                 })
    //                 .setPin("section#start")
    //                 .addTo(controller);

    var scene = new ScrollMagic.Scene({
        triggerElement: "#origins"
    })
    .setClassToggle("#origins .origin-map", 'fadein-up')
    .addIndicators({
        name: 'fadeinmapscene',
        colorTrigger: 'black'
    })
    .addTo(controller);
    
    var scene2 = new ScrollMagic.Scene({
        triggerElement: "#india"
    })
    .setClassToggle("#india .col1", 'fadein-left')
    .addIndicators({
        name: 'fadeInTwoColFromLeft&Right',
        colorTrigger: 'black'
    })
    .addTo(controller);
    
    var scene3 = new ScrollMagic.Scene({
        triggerElement: "#india"
    })
    .setClassToggle("#india .col2", 'fadein-right')
    .addTo(controller);

    var scene4 = new ScrollMagic.Scene({
        triggerElement: "#others .characters",
    })
    .setClassToggle("#others .characters img", 'fadeIn')
    .addTo(controller);

    var scene5 = new ScrollMagic.Scene({
        triggerElement: "#indiaAdp .list-of-characters .character",
    })
    .setClassToggle("#indiaAdp .list-of-characters .character img", 'fadeIn')
    .addTo(controller);

    var scene6 = new ScrollMagic.Scene({
        triggerElement: "#origins-Cambodia"
    })
    .setClassToggle("#origins-Cambodia .origin-map", 'fadein-up')
    .addIndicators({
        name: 'fadeinmapscene',
        colorTrigger: 'black'
    })
    .addTo(controller);

    var scene7 = new ScrollMagic.Scene({
        triggerElement: "#Cambodia"
    })
    .setClassToggle("#Cambodia .col1", 'fadein-left')
    .addIndicators({
        name: 'fadeInTwoColFromLeft&Right',
        colorTrigger: 'black'
    })
    .addTo(controller);
    
    var scene8 = new ScrollMagic.Scene({
        triggerElement: "#Cambodia"
    })
    .setClassToggle("#Cambodia .col2", 'fadein-right')
    .addTo(controller);
    
    var scene9 = new ScrollMagic.Scene({
        triggerElement: "#others-1 .characters",
    })
    .setClassToggle("#others-1 .characters img", 'fadeIn')
    .addTo(controller);

    var scene10 = new ScrollMagic.Scene({
        triggerElement: "#combodiaAdp .list-of-characters .character",
    })
    .setClassToggle("#combodiaAdp .list-of-characters .character img", 'fadeIn')
    .addTo(controller);
});