<!DOCTYPE html>
<html>

<head>
    <!-- Meta tags -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- Title -->
    <title>Danki Code - Tema</title>
    <!-- References -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">
</head>

<body>

    <section class="top">
        <div class="center">
            <header>
                <div class="logo"><img src="images/logo.png" alt="Logo da empresa fictícia" /></div><!-- logo -->
            </header>
            <ul class="menu-desktop">
                <li><a href="#">Home</a></li>
                <li><a href="#">Sobre</a></li>
                <li><a href="#">Contato</a></li>
            </ul><!-- menu -->
            <div class="clear"></div>
            <br />
            <br />
            <div class="w50 team-description">
                <h2>Melhore a comunicação com seu cliente e time.</h2>
                <p>Consultoria especializada em startups, empresas e, principalmente, pessoas.</p>
                <a target="_blank" href="https://portfolio-pxrz.onrender.com/">Ver demonstração</a>
            </div><!-- w50 -->
            <div class="w50 team-image">
                <img src="images/equipe.png" alt="Imagem da equipe" />
            </div><!-- w50 -->
            <div class="clear"></div>
        </div> <!-- center -->
    </section> <!-- top -->

    <div class="circle"><i class="fas fa-angle-down"></i></div>

    <section class="customers-slider">
        <div style = "max-width: 700px; margin: 0 auto; overflow: hidden;" class="slider-conteiner">
            <img src="images/amazon.jpg"/>
            <img src="images/costco.jpg"/>
            <img src="images/dominos.jpg"/>
            <img src="images/uber.jpg"/>
            <img src="images/walmart.jpg"/>
            
        </div><!-- center -->
    </section>

    <script src="js/jquery.js"></script>
    <script src="js/slick.min.js"></script>
    <script type="text/javascript">
        $('section.customers-slider .slider-conteiner').slick({
            dots: true,
            arrows: false,
            infinite: false,
            speed: 1000,
            slidesToShow: 4,
            autoplay: true,
            centerMode: false,
            autoplaySpeed: 3000,
            pauseOnHover: false,
            responsive:
                [
                    {
                        breakpoint: 768,
                        settings: {
                            slidesToShow: 2
                        }
                    }
                ]
        });
        $('section.depoimentos .depoimentos-box').slick({
            dots: true,
            arrows: false,
            infinite: true,
            speed: 1000,
            slidesToShow: 1,
            centerMode: false
        });
    </script>

</body>

<footer>
    <p>Copyright &copy; 2026.</p>
</footer>

</html>