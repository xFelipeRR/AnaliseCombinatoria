<?php
$cHtml = '';
// INDEX
if(!isset($_GET["page"])) {
    $title1 = "O que é a Análise Combinatória?";
    $desc1 = "A análise combinatória ou combinatória é a parte da Matemática que estuda métodos e técnicas que permitem resolver problemas relacionados com contagem.
    <br>
    <br>
    Muito utilizada nos estudos sobre probabilidade, ela faz análise das possibilidades e das combinações possíveis entre um conjunto de elementos.";

    $title2 = "Qual o objetivo deste site?";
    $desc2 = "Fazer com que você aprenda a análise combinatória de forma fácil, didática e dinâmica, deixando a forma de aprendizagem mais interativa
    <br>
    <br>
    No site existem 3 estágios de aprendizagem:";

    $cHtml = "<h2 class='title'>Para começar os estudos, acesse os módulos exibidos no topo da página<span class='icon'><i class='fas fa-chevron-circle-up'></i></span></h2>";
}
elseif($_GET["page"] == '1') {
    $title1 = "Princípio Fundamental da Contagem";
    $desc1 = "O princípio fundamental da contagem, também chamado de princípio multiplicativo, postula que:
    <br>
    <b>
        “quando um evento é composto por n etapas sucessivas e independentes, de tal modo que as possibilidades da primeira etapa é x e as possibilidades da segunda etapa é y, resulta no número total de possibilidades de o evento ocorrer, dado pelo produto (x) . (y)”.
    </b>
    <br>
    <br>
    Em resumo, no princípio fundamental da contagem, multiplica-se o número de opções entre as escolhas que lhe são apresentadas.";

    $title2 = "Exemplo";
    $desc2 = "Uma lanchonete vende uma promoção de lanche a um preço único. No lanche, estão incluídos um sanduíche, uma bebida e uma sobremesa. São oferecidos três opções de sanduíches: hambúrguer especial, sanduíche vegetariano e cachorro-quente completo. Como opção de bebida pode-se escolher 2 tipos: suco de maçã ou guaraná. Para a sobremesa, existem quatro opções: cupcake de cereja, cupcake de chocolate, cupcake de morango e cupcake de baunilha. Considerando todas as opções oferecidas, de quantas maneiras um cliente pode escolher o seu lanche?";

    $cHtml = '
    <h2 class="title">Solução</h2>
    <p class="desc">Podemos começar a resolução do problema apresentado, construindo uma árvore de possibilidades, conforme ilustrado abaixo:</p>
    <img src="../img/principio-ex.jpg" width=320 height=200 class="ex" style="margin-left: 30px;" alt="Exemplo">
    <p class="desc">Acompanhando o diagrama, podemos diretamente contar quantos tipos diferentes de lanches podemos escolher. Assim, identificamos que existem 24 combinações possíveis.
    <br>
    <br>
    Podemos ainda resolver o problema usando o princípio multiplicativo. Para saber quais as diferentes possibilidades de lanches, basta multiplicar o número de opções de sanduíches, bebidas e sobremesa.
    <br>
    <br>
    Total de possibilidades: 3.2.4 = 24
    <br>
    <br>
    Portanto, temos 24 tipos diferentes de lanches para escolher na promoção.</p>
    ';
}
elseif($_GET["page"] == '2') {
    $title1 = "Tipos de Combinatória - Introdução";
    $desc1 = "O princípio fundamental da contagem pode ser usado em grande parte dos problemas relacionados com contagem. Entretanto, em algumas situações seu uso torna a resolução muito trabalhosa.
    <br>
    <br>
    Desta maneira, usamos algumas técnicas para resolver problemas com determinadas características. Basicamente há três tipos de agrupamentos: arranjos, combinações e permutações.
    <br>
    <br>
    Antes de conhecermos melhor esses procedimentos de cálculo, precisamos definir uma ferramenta muito utilizada em problemas de contagem, que é o fatorial.
    <br>
    <br>
    O fatorial de um número natural é definido como o produto deste número por todos os seus antecessores. Utilizamos o símbolo ! para indicar o fatorial de um número.
    <br>
    <br>
    Define-se ainda que o fatorial de zero é igual a 1.";

    $title2 = "Exemplo";
    $desc2 = "O! = 1
    <br>
    1! = 1
    <br>
    3! = 3.2.1 = 6
    <br>
    7! = 7.6.5.4.3.2.1 = 5 040
    <br>
    10! = 10.9.8.7.6.5.4.3.2.1 = 3 628 800";

    $cHtml = '
    <p class="desc">Note que o valor do fatorial cresce rapidamente, conforme cresce o número. Então, frequentemente usamos simplificações para efetuar os cálculos de análise combinatória.
    ';
}
elseif($_GET["page"] == '3') {
    $title1 = "Tipos de Combinatória - Arranjo";
    $desc1 = "Nos arranjos, os agrupamentos dos elementos dependem da ordem e da natureza dos mesmos.
    <br>
    <br>
    Para obter o arranjo simples de n elementos tomados, p a p (p ≤ n), utiliza-se a seguinte expressão:
    <br>
    <br>
    <img src='../img/baixados.png' alt='Exemplo'>
    ";

    $title2 = "Exemplo Solucionado";
    $desc2 = "Como exemplo de arranjo, podemos pensar na votação para escolher um representante e um vice-representante de uma turma, com 20 alunos. Sendo que o mais votado será o representante e o segundo mais votado o vice-representante.
    <br>
    <br>
    Dessa forma, de quantas maneiras distintas a escolha poderá ser feita? Observe que nesse caso, a ordem é importante, visto que altera o resultado final.
    <br>
    <br>
    <img src='../img/baixados (1).png' alt='Exemplo'>
    
    ";

    $cHtml = '
    <p class="desc">Logo, o arranjo pode ser feito de 380 maneiras diferentes.
    ';
}
elseif($_GET["page"] == '4') {
    $title1 = "Tipos de Combinatória - Permutação";
    $desc1 = "As permutações são agrupamentos ordenados, onde o número de elementos (n) do agrupamento é igual ao número de elementos disponíveis.
    <br>
    <br>
    Note que a permutação é um caso especial de arranjo, quando o número de elementos é igual ao número de agrupamentos. Desta maneira, o denominador na fórmula do arranjo é igual a 1 na permutação.
    <br>
    <br>
    Assim a permutação é expressa pela fórmula:
    <br>
    <br>
    <img src='../img/baixados (4).png' alt='Exemplo'>
    ";

    $title2 = "Exemplo Solucionado";
    $desc2 = "Para exemplificar, vamos pensar de quantas maneiras diferentes 6 pessoas podem se sentar em um banco com 6 lugares.
    <br>
    <br>
    Como a ordem em que irão se sentar é importante e o número de lugares é igual ao número de pessoas, iremos usar a permutação:
    <br>
    <br>
    <img src='../img/baixados (5).png' alt='Exemplo'>
    
    ";

    $cHtml = '
    <p class="desc">Logo, existem 720 maneiras diferentes para as 6 pessoas sentarem neste banco.
    </p>';
}
elseif($_GET["page"] == '5') {
    $title1 = "Tipos de Combinatória - Combinação";
    $desc1 = "As combinações são subconjuntos em que a ordem dos elementos não é importante, entretanto, são caracterizadas pela natureza dos mesmos.
    <br>
    <br>
    Assim, para calcular uma combinação simples de n elementos tomados p a p (p ≤ n), utiliza-se a seguinte expressão:
    <br>
    <br>
    <img src='../img/baixados (2).png' alt='Exemplo'>
    ";

    $title2 = "Exemplo Solucionado";
    $desc2 = "A fim de exemplificar, podemos pensar na escolha de 3 membros para formar uma comissão organizadora de um evento, dentre as 10 pessoas que se candidataram.
    <br>
    <br>
    De quantas maneiras distintas essa comissão poderá ser formada?
    <br>
    <br>
    Note que, ao contrário dos arranjos, nas combinações a ordem dos elementos não é relevante. Isso quer dizer que escolher Maria, João e José é equivalente à escolher João, José e Maria.
    <br>
    <br>
    <img src='../img/baixados (3).png' alt='Exemplo'>
    
    ";

    $cHtml = '
    <p class="desc">Observe que para simplificar os cálculos, transformamos o fatorial de 10 em produto, mas conservamos o fatorial de 7, pois, desta forma, foi possível simplificar com o fatorial de 7 do denominador.
    <br>
    <br>
    Assim, existem 120 maneiras distintas formar a comissão.
    </p>';
}
elseif($_GET["page"] == '6') {
    $title1 = "Exame Final";
    $desc1 = "Este módulo é como uma prova, você terá um tempo específico para termina-la, com base nos conhecimentos adquiros pelos módulos anteriores.
    <br>
    <br>
    Boa sorte!
    <br>
    <br>
    <a href='exame.php' class='btnExame'><span>Começar Exame &nbsp; <i class='fas fa-arrow-right'></i></span></a>
    ";
    $title2 = '';
    $desc2 = '';
}


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
        margin-top: 130px;
    }
</style>
<body>
    <div class="sliderContainer">
        <div class="slider single-item">
            <div class='divslide'>Análise Combinatória</div>
            <div class='divslide'>Site Interativo - GP2</div>
        </div>
    </div>

    <header class="header">
        <nav class="navbar navbar-expand-lg fixed-top py-3">
            <img class="logo" src="../img/logo.jpg" width=220 height=40 alt="logo">
            <div class="container cab">
                <button type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" class="navbar-toggler navbar-toggler-right"><i class="fa fa-bars"></i></button>
                
                <div id="navbarSupportedContent" class="collapse navbar-collapse">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item"><a href="index.php" class="nav-link">Resumo do Projeto</a></li>
                        <li class="nav-item"><a href="index.php?page=1" class="nav-link">Princípio Fundamental</a></li>
                        <li class="nav-item"><a href="index.php?page=2" class="nav-link">Tipos de Combinatória</a></li>
                        <li class="nav-item"><a href="index.php?page=6" class="nav-link">Exame Final</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <div class="global">
        <div class="wrapper">
            <h2 class="title"><?php echo $title1; ?></h2>
            <p class="desc"><?php echo $desc1; ?></p>

            <h2 class="title"><?php echo $title2; ?></h2>
            <p class="desc prelist"><?php echo $desc2; ?></p>
        <?php if(!isset($_GET["page"])) { ?>
            <ul class="stages">
                <li><span>Princípio Fundamental</span></li>
                <li><span>Tipos de Combinatória</span></li>
                <li><span>Exame Final</span></li>
            </ul>
        <?php } ?>        
            <?php echo $cHtml; ?>
        </div>
    </div>

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