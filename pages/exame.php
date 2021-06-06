<?php
$cHtml = '';



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Projeto GP2</title>
    <!-- CSS -->
    <link href="../css/menu.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/slide-details.css">
    <link rel="stylesheet" href="../css/general.css">
    <link href="../fonts/css/all.css" rel="stylesheet"> <!--load all styles -->

    <!-- Foreign Dependecies -->
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.0/jquery-ui.min.js"></script>
    <script src="https://rawgit.com/kenwheeler/slick/master/slick/slick.js"></script>
    <link href="https://rawgit.com/kenwheeler/slick/master/slick/slick-theme.css" rel="stylesheet"/>
    <link href="https://rawgit.com/kenwheeler/slick/master/slick/slick.css" rel="stylesheet"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Asap:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Chivo&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=DM+Sans:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=DM+Sans:wght@400;500&display=swap');
    *{
        margin: 0;
        padding: 0;
    }
    .global{
        margin-top: 180px;
    }
    .exame{
        font-size: 40px;
    }
    .title{
        width: 85%;
        font-size: 20px;
    }
    .radios label{
        display: table;
        margin-left: 30px;

        font-size: 15px;
    }

    /* The container */
    .container {
        display: block;
        position: relative;
        padding-left: 35px;
        margin-bottom: 12px;
        cursor: pointer;
        font-size: 22px;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
    }

    /* Hide the browser's default radio button */
    .container input {
        position: absolute;
        opacity: 0;
        cursor: pointer;
    }

    /* Create a custom radio button */
    .checkmark {
        position: absolute;
        top: 0;
        left: 0;
        height: 25px;
        width: 25px;
        background-color: #eee;
        border-radius: 50%;
    }

    /* On mouse-over, add a grey background color */
    .container:hover input ~ .checkmark {
        background-color: #ccc;
    }

    /* When the radio button is checked, add a blue background */
    .container input:checked ~ .checkmark {
        background-color: #33AA58;
    }

    /* Create the indicator (the dot/circle - hidden when not checked) */
    .checkmark:after {
        content: "";
        position: absolute;
        display: none;
    }

    /* Show the indicator (dot/circle) when checked */
    .container input:checked ~ .checkmark:after {
        display: block;
    }

    /* Style the indicator (dot/circle) */
    .container .checkmark:after {
        top: 9px;
        left: 9px;
        width: 8px;
        height: 8px;
        border-radius: 50%;
        background: white;
    }


</style>
<body>
    <div class="sliderContainer">
        <div class="slider single-item">
            <div class='divslide'>30:00</div>
        </div>
    </div>

    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <img class="logo" src="../img/logo.jpg" width=220 height=40 alt="logo">
            <div class="container cab">
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
                
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item exame"><a href="#" class="nav-link">Exame Final</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="global">
        <div class="wrapper">  
            <h2 class="title">1. Em uma competição de xadrez existem 8 jogadores. De quantas formas diferentes poderá ser formado o pódio (primeiro, segundo e terceiro lugares)?</h2>
            <div class="radios">
                <label class="container">336 formas
                    <input type="radio" checked="checked" name="q1">
                    <span class="checkmark"></span>
                </label>
                <label class="container">222 formas
                    <input type="radio" name="q1">
                    <span class="checkmark"></span>
                </label>
                <label class="container">320 formas
                    <input type="radio" name="q1">
                    <span class="checkmark"></span>
                </label>
                <label class="container">380 formas
                    <input type="radio" name="q1">
                    <span class="checkmark"></span>
                </label>
            </div>
        <br>
        <br>
            <h2 class="title">2. (PUC-RJ) A senha de acesso a um jogo de computador consiste em quatro caracteres alfabéticos ou numéricos, sendo o primeiro necessariamente alfabético. O número de senhas possíveis será então:</h2>
            <div class="radios">
                <label class="container">364
                    <input type="radio" checked="checked" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="container">10.36³
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="container">26.36³
                <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
                <label class="container">264
                    <input type="radio" name="radio">
                    <span class="checkmark"></span>
                </label>
            </div>
        <br>
        <br>
        </div>
    </div>

<script>
    //setTimeout(function(){ alert("Hello"); }, 3000);
</script>
<script>
    $(".slider").slick({
  infinite: true,
  arrows: false,
  dots: false,
  autoplay: false,
  speed: 800,
  slidesToShow: 1,
  slidesToScroll: 1,
});

 //ticking machine
    var percentTime;
    var tick;
    var time = .1;
    var progressBarIndex = 0;

    $('.progressBarContainer .progressBar').each(function(index) {
        var progress = "<div class='inProgress inProgress" + index + "'></div>";
        $(this).html(progress);
    });

    function startProgressbar() {
        resetProgressbar();
        percentTime = 0;
        tick = setInterval(interval, 10);
    }

    function interval() {
        if (($('.slider .slick-track div[data-slick-index="' + progressBarIndex + '"]').attr("aria-hidden")) === "true") {
            progressBarIndex = $('.slider .slick-track div[aria-hidden="false"]').data("slickIndex");
            startProgressbar();
        } else {
            percentTime += 1 / (time + 5);
            $('.inProgress' + progressBarIndex).css({
                width: percentTime + "%"
            });
            if (percentTime >= 100) {
                $('.single-item').slick('slickNext');
                progressBarIndex++;
                if (progressBarIndex > 2) {
                    progressBarIndex = 0;
                }
                startProgressbar();
            }
        }
    }

    function resetProgressbar() {
        $('.inProgress').css({
            width: 0 + '%'
        });
        clearInterval(tick);
    }
    startProgressbar();
    // End ticking machine

    $('.item').click(function () {
    	clearInterval(tick);
    	var goToThisIndex = $(this).find("span").data("slickIndex");
    	$('.single-item').slick('slickGoTo', goToThisIndex, false);
    	startProgressbar();
    });
</script>
</body>
</html>