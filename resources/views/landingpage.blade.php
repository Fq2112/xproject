<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="/js/TweenMax.min.js"></script>
    <script src="/js/jquery-min.js"></script>
    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto);
        body {
            font-family: 'Roboto';
            margin: 0;
            text-decoration: none;
            height: 100vh;
            background: radial-gradient(ellipse at center, rgba(255, 255, 255, 0.7) 0%, #87ceeb 100%);
        }

        #logocontainer {
            background: transparent;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 650px;
            height: 650px;
            position: absolute;
        }

        #css3 {
            margin: 0;
            position: absolute;
            top: 67%;
            left: 20%;
            width: 15%;
            transform: translate(-50%, -50%);
            transform-origin: center center;
        }

        #html5 {
            margin: 0;
            position: absolute;
            top: 37%;
            left: 30%;
            width: 15%;
            transform: translate(-50%, -50%);
        }

        #sass {
            margin: 0;
            position: absolute;
            top: 20%;
            left: 50%;
            width: 15%;
            transform: translate(-50%, -50%);
        }

        #js {
            margin: 0;
            position: absolute;
            top: 37%;
            left: 70%;
            width: 15%;
            transform: translate(-50%, -50%);
        }

        #php {
            margin: 0;
            position: absolute;
            top: 67%;
            left: 80%;
            width: 15%;
            transform: translate(-50%, -50%);
        }

        #Retina1, #Retina2 {
            animation-name: blink;
            animation-duration: 6s;
            animation-iteration-count: infinite;
            transform-origin: 50%;
        }

        @keyframes blink {
            0% {
                transform: scaleX(1) scaleY(1);
            }
            1% {
                transform: scaleX(1.3) scaleY(0.1);
            }
            2% {
                transform: scaleX(1) scaleY(1);
            }
            60% {
                transform: scaleX(1) scaleY(1);
            }
            61% {
                transform: scaleX(1.3) scaleY(0.1);
            }
            62% {
                transform: scaleX(1) scaleY(1);
            }
            100% {
                transform: scaleX(1) scaleY(1);
            }
        }
        #sanky {
            margin: 0;
            position: absolute;
            top: 60%;
            left: 50%;
            width: 50%;
            transform: translate(-50%, -50%);
            z-index: -5;
        }

        #retina {
            width: 50%;
            margin: 0;
            position: absolute;
            top: 60%;
            left: 50%;
            width: 50%;
            z-index: -4;
            transform: translate(-50%, -50%);
        }
        section {
            position: relative;
        }

        #home, #overlay, #apresentation {
            width: 100%;
            height: 100vh;
        }

        #home {
            position: relative;
        }

        #overlay, #apresentation {
            position: fixed;
        }

        #overlay {
            z-index: 1000;
            background-color: black;
        }

        #apresentation {
            z-index: 100;
            background-color: #424242;
        }

        #home {
            background: url("http://henriquecarvalho.me/img/overlay-black.png")
            repeat
            center,
            url("http://henriquecarvalho.me/img/background.jpg") no-repeat center;
            background-size: cover;
            background-attachment: fixed;
        }

        #title {
            margin: auto;
            color: white;
            text-align: center;
            font-size: 26px;
            position: relative;
            top: 40%;
            -webkit-transform: translateY(-40%);
            -ms-transform: translateY(-40%);
            transform: translateY(-40%);
        }

        #typing {
            display: inline;
            font-weight: bolder;
            color: white;
        }

        .dash {
            display: inline-block;
            height: 8px;
            width: 38px;
            background-color: white;
            animation: blink2 .5s infinite linear;
        }

        @keyframes blink2 {
            0% {
                opacity: 1;
            }
            100% {
                opacity: 0;
            }
        }

    </style>
</head>
<body>
<section id="overlay">
    <div id="title">
        <h1>
            <div class="dash"></div>
        </h1>
    </div>
</section>

<section id="apresentation">
    <div id="title">
        <h1>
            <div id="typing"></div>
            <div class="dash"></div>
        </h1>
    </div>
</section>

<section id="home">
    <div class="content"></div>
</section>
<script>
    $(document).ready(function() {
        var text = "Hello, lorem ipsum dolor sit amet!";
        var index = 0;
        var chars = text.length - 1;
        var speed = 100;
        var div = "typing";

        function typing() {
            document.getElementById(div).innerHTML += text[index];

            if (index < chars) {
                setTimeout(function() {
                    index++;
                    typing();
                }, speed);
            }

            setTimeout(function() {
                $("#apresentation").fadeOut("slow");
            }, 4200);
        }

        // When the browser is load or reaload
        $(window).load(function() {
            $("#overlay").fadeOut();
            setTimeout(function() {
                typing();
            }, 1000);
        });
    });

</script>

<div id="logo">
    <div id="logocontainer">
        <a href="#"><img class="topics" id="css3" src="//inf3cti0n95.github.io/img/css3.svg"></a>
        <a href="xproject"><img class="topics" id="html5" src="//inf3cti0n95.github.io/img/html5.svg"></a>
        <a href="#"><img class="topics" id="sass" src="//inf3cti0n95.github.io/img/sass.svg"></a>
        <a href="#"><img class="topics" id="js" src="//inf3cti0n95.github.io/img/js.svg"></a>
        <a href="#"><img class="topics" id="php" src="//inf3cti0n95.github.io/img/php.svg"></a>
        <svg id="retina" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 500 500" style="enable-background:new 0 0 500 500;" xml:space="preserve">
			<path id="Retina2" class="st9" d="M222,186.3l-5.1,4.9l2.1-6.7c-0.7-0.2-1.3-0.3-2.1-0.3c-3.9,0-7.1,3.2-7.1,7.1
			c0,3.9,3.2,7.1,7.1,7.1c3.9,0,7.1-3.2,7.1-7.1C224,189.2,223.3,187.5,222,186.3z"></path>
            <path id="Retina1" class="st9" d="M281.6,186.3l-5.1,4.9l2.1-6.7c-0.7-0.2-1.3-0.3-2.1-0.3c-3.9,0-7.1,3.2-7.1,7.1
			c0,3.9,3.2,7.1,7.1,7.1c3.9,0,7.1-3.2,7.1-7.1C283.5,189.2,282.8,187.5,281.6,186.3z"></path>
		</svg>
        <img id="sanky" src="//inf3cti0n95.github.io/img/sanky.svg">
    </div>
</div>

<script>
    var tl = new TimelineLite();
    tl.staggerFrom(".topics", 3, {
        css: {transform: "scale(0)", top: "60%", left: "50%"}, ease: Elastic.easeOut
    }, 0.3);


    var js = document.getElementById("js");
    var sass = document.getElementById("sass");
    var php = document.getElementById("php");
    var css3 = document.getElementById("css3");
    var hmtl5 = document.getElementById("html5");
    var topics = document.getElementsByClassName("topics");


    js.addEventListener("mouseover", jsretina, false);
    js.addEventListener("touchstart", jsretina, false);
    html5.addEventListener("mouseover", html5retina, false);
    html5.addEventListener("touchstart", html5retina, false);
    sass.addEventListener("mouseover", sassretina, false);
    sass.addEventListener("touchstart", sassretina, false);
    php.addEventListener("mouseover", phpretina, false);
    php.addEventListener("touchstart", phpretina, false);
    css3.addEventListener("mouseover", css3retina, false);
    css3.addEventListener("touchstart", css3retina, false);

    function jsretina(event) {
        TweenMax.to("#retina", 0.2, {left: "51%", top: "59.5%"});
    }

    function html5retina(event) {
        TweenMax.to("#retina", 0.2, {left: "49%", top: "59.5%"});
    }

    function css3retina(event) {
        TweenMax.to("#retina", 0.2, {left: "49%", top: "60.5%"});
    }

    function phpretina(event) {
        TweenMax.to("#retina", 0.2, {left: "51%", top: "60.5%"});
    }

    function sassretina(event) {
        TweenMax.to("#retina", 0.2, {left: "50%", top: "59%"});
    }


    for (var i = 0; i < topics.length; i++) {
        topics[i].addEventListener("mouseout", retinaout);
    }
    function retinaout(event) {
        TweenMax.to("#retina", 0.2, {left: "50%", top: "60%"});
    }
</script>
<audio autoplay>
    <source src="/audio/ketik.mp3" type="audio/mpeg">
</audio>
</body>
</html>